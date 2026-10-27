<?php
/**
 * ============================================================================
 * TCPDF 兼容层
 * ============================================================================
 *
 * 背景：
 *   原 lib/ThinkPHP/Extend/Vendor/Tcpdf 是 TCPDF 6.0.020（2011 年）的整份拷贝，
 *   在 PHP 8 下 include/ 与 tcpdf.php 共 10 个文件直接解析失败。
 *   官方 6.x 一直在维护并支持 PHP 8，现已通过 composer 安装 tecnickcom/tcpdf 6.10.1
 *   （其 composer.json 只要求 php >= 7.1.0，PHP 7.4 与 8.5 都能跑）。
 *
 * 做法：
 *   保留 Vendor('Tcpdf.tcpdf') 这个加载入口，实际转发到 composer 里的官方实现。
 *   TCPDF 内部所有 require 都用 dirname(__FILE__) 定位，因此随包自带的
 *   include/、fonts/、config/ 都能被正确定位，无需额外配置路径。
 */

require_once dirname(__DIR__, 4) . '/vendor/tecnickcom/tcpdf/tcpdf.php';
