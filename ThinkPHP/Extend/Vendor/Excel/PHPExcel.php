<?php
/**
 * ============================================================================
 * PHPExcel 兼容层
 * ============================================================================
 *
 * 背景：
 *   原 lib/ThinkPHP/Extend/Vendor/Excel/PHPExcel 是 PHPExcel 1.8（2012 年）的整份拷贝，
 *   官方已停止维护、没有 PHP 8 版本，在 PHP 8 下 24 个文件直接解析失败。
 *   官方指定的继任者是 PhpSpreadsheet，且已通过 composer 安装（1.29.12，
 *   最后一个同时支持 PHP 7.4 与 PHP 8.x 的版本）。
 *
 * 做法：
 *   保留 Vendor('Excel.PHPExcel') 这个加载入口和 PHPExcel_* 类名，
 *   内部实现全部转发到 PhpSpreadsheet，业务代码无需改动。
 *   仅当业务确实依赖旧类名时才需要动 Action 里的代码。
 *
 * 已覆盖本项目实际用到的 API：
 *   new PHPExcel()                                 -> PhpOffice\PhpSpreadsheet\Spreadsheet
 *   PHPExcel_IOFactory::load($file)                -> IOFactory::load($file)
 *   PHPExcel_IOFactory::createWriter($obj, $type)  -> 自动翻译 Excel5/Excel2007 等旧写法的类型名
 *   PHPExcel_Cell::stringFromColumnIndex($idx)     -> Coordinate::stringFromColumnIndex($idx)
 *   PHPExcel_Cell_DataType::TYPE_*                 -> Cell\DataType::TYPE_*
 *   PHPExcel_Style_Alignment::* / PHPExcel_Style_Fill::* -> Style\Alignment::* / Style\Fill::*
 *
 * 如果后续出现未覆盖的 PHPExcel_* 类，按同样方式在下面补一条 class_alias 或薄封装即可。
 */

if (class_exists('PHPExcel', false)) {
    // 已经加载过（ThinkPHP 的 import() 本身也有缓存，这里再兜一层）
    return;
}

// PhpSpreadsheet 走 composer 自动加载；index.php 一般已经引入过，重复 require 是安全的
$__smeoaAutoload = dirname(__DIR__, 4) . '/vendor/autoload.php';
if (is_file($__smeoaAutoload)) {
    require_once $__smeoaAutoload;
}
unset($__smeoaAutoload);

if (!class_exists(\PhpOffice\PhpSpreadsheet\Spreadsheet::class)) {
    throw new RuntimeException('PHPExcel 兼容层加载失败：未找到 phpoffice/phpspreadsheet，请先执行 composer install');
}

/* ---------------------------------------------------------------------------
 * 纯类名映射：这些类的常量/方法名在新旧两版里完全一致，直接别名即可
 * ------------------------------------------------------------------------ */
class_alias(\PhpOffice\PhpSpreadsheet\Spreadsheet::class, 'PHPExcel');
class_alias(\PhpOffice\PhpSpreadsheet\Style\Alignment::class, 'PHPExcel_Style_Alignment');
class_alias(\PhpOffice\PhpSpreadsheet\Style\Fill::class, 'PHPExcel_Style_Fill');
class_alias(\PhpOffice\PhpSpreadsheet\Cell\DataType::class, 'PHPExcel_Cell_DataType');
class_alias(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::class, 'PHPExcel_Style_NumberFormat');
class_alias(\PhpOffice\PhpSpreadsheet\Style\Border::class, 'PHPExcel_Style_Border');
class_alias(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::class, 'PHPExcel_Worksheet');

/* ---------------------------------------------------------------------------
 * PHPExcel_Cell：旧版把列号换算放在这里，新版挪到了 Cell\Coordinate
 * ------------------------------------------------------------------------ */
if (!class_exists('PHPExcel_Cell', false)) {
    class PHPExcel_Cell
    {
        /** 列号(int, 0 基) -> 列名(A..Z, AA..) */
        public static function stringFromColumnIndex($columnIndex)
        {
            return \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($columnIndex);
        }

        /** 列名(A..Z, AA..) -> 列号(int, 0 基) */
        public static function columnIndexFromString($columnString)
        {
            return \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($columnString);
        }

        /** 绝对引用，如 A1 -> $A$1 */
        public static function absoluteReference($cellAddress)
        {
            return \PhpOffice\PhpSpreadsheet\Cell\Coordinate::absoluteReference($cellAddress);
        }

        /** 相对引用 */
        public static function absoluteCoordinate($cellAddress)
        {
            return \PhpOffice\PhpSpreadsheet\Cell\Coordinate::absoluteCoordinate($cellAddress);
        }

        /** 拆分单元格地址，返回 [列名, 行号] */
        public static function coordinateFromString($cellAddress)
        {
            return \PhpOffice\PhpSpreadsheet\Cell\Coordinate::coordinateFromString($cellAddress);
        }
    }
}

/* ---------------------------------------------------------------------------
 * PHPExcel_IOFactory：核心差异是读写器的类型名改了
 *   Excel5 -> Xls、Excel2007 -> Xlsx、Excel2003XML -> Xml、HTML -> Html、CSV -> Csv、PDF -> Pdf
 * ------------------------------------------------------------------------ */
if (!class_exists('PHPExcel_IOFactory', false)) {
    class PHPExcel_IOFactory
    {
        /**
         * 旧类型名 => 新类型名。键统一转小写比较，兼容 'Excel5' / 'excel5' 等写法。
         */
        private static $typeMap = array(
            'excel5'       => 'Xls',
            'excel2007'    => 'Xlsx',
            'excel2003xml' => 'Xml',
            'xml'          => 'Xml',
            'csv'          => 'Csv',
            'html'         => 'Html',
            'pdf'          => 'Pdf',
            'xls'          => 'Xls',
            'xlsx'         => 'Xlsx',
            'ods'          => 'Ods',
            'slk'          => 'Slk',
            'sylk'         => 'Slk',
        );

        private static function translate($type)
        {
            if ($type === null) {
                return null;
            }
            $key = strtolower(str_replace('\\', '', $type));
            return isset(self::$typeMap[$key]) ? self::$typeMap[$key] : $type;
        }

        /**
         * 读取文件并返回 Spreadsheet（旧版签名 load($pFilename)）
         */
        public static function load($pFilename)
        {
            return \PhpOffice\PhpSpreadsheet\IOFactory::load($pFilename);
        }

        /**
         * 创建写入器（旧版签名 createWriter($phpExcel, $writerType = null)）
         */
        public static function createWriter($phpExcel, $writerType = null)
        {
            return \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($phpExcel, self::translate($writerType));
        }

        /**
         * 创建读取器（旧版签名 createReader($readerType = null)）
         */
        public static function createReader($readerType = null)
        {
            return \PhpOffice\PhpSpreadsheet\IOFactory::createReader(self::translate($readerType));
        }

        /**
         * 根据文件自动选择读取器
         */
        public static function createReaderForFile($filename)
        {
            return \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($filename);
        }

        /**
         * 旧版用来列出可用的写入器类型
         */
        public static function getWriterTypes()
        {
            return array_keys(self::$typeMap);
        }

        /**
         * 旧版用来列出可用的读取器类型
         */
        public static function getReaderTypes()
        {
            return array_keys(self::$typeMap);
        }
    }
}
