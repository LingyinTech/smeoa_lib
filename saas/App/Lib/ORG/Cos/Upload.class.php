<?php

/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2018/8/20
 * Time: 22:00
 */
require_once __DIR__.'/../BaseUpload.class.php';

class Upload extends BaseUpload
{

    public function __construct()
    {
        parent::__construct();

        self::$ossClient = new Qcloud\Cos\Client(
            [
                'region' => $this->region,
                'credentials' => [
                    'secretId' => $this->accessKeyId,
                    'secretKey' => $this->accessKeySecret,
                ],
            ]
        );
    }

    public function save($file)
    {
        $fileName = $this->getFileStoreName($file['save_name']);
        if (!$this->uploadReplace
            && self::$ossClient->doesObjectExist(
                $this->bucket,
                $fileName
            )) {
            $this->error = '文件已经存在！'.$fileName;

            return false;
        }

        self::$ossClient->upload(
            $this->bucket,
            $fileName,
            fopen($file['tmp_name'], 'rb')
        );

        return true;
    }

    protected function error($errorNo)
    {
        switch ($errorNo) {
            case 1:
                $this->error = '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                break;
            case 2:
                $this->error = '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
                break;
            case 3:
                $this->error = '文件只有部分被上传';
                break;
            case 4:
                $this->error = '没有文件被上传';
                break;
            case 6:
                $this->error = '找不到临时文件夹';
                break;
            case 7:
                $this->error = '文件写入失败';
                break;
            default:
                $this->error = '未知上传错误！';
        }
    }

}