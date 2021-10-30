<?php

/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2018/8/20
 * Time: 22:00
 */
require_once 'aliyun-oss-2.3.0.phar';
require_once __DIR__.'/../BaseUpload.class.php';

class Download extends BaseUpload
{

    public function __construct()
    {
        parent::__construct();

        try {
            if (self::$ossClient == null) {
                self::$ossClient = new \OSS\OssClient($this->accessKeyId, $this->accessKeySecret, $this->endpoint);
            }
        } catch (\OSS\Core\OssException $e) {
            $this->error = '实例化客户端失败！' . $e->getMessage();
        }
    }

    public function down($fileName, $localFile = '')
    {
        if (empty($localFile)) {
            $localFile = $fileName;
        }

        try {

            $metaInfo = $this->getMata($fileName);
            $size = $metaInfo['content-length'];

            $options = [
                \OSS\OssClient::OSS_FILE_DOWNLOAD => $localFile
            ];
            self::$ossClient->getObject($this->bucket, $this->getFileStoreName($fileName), $options);
            return $size;
        } catch (\OSS\Core\OssException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    public function deleteFile($fileName)
    {
        return self::$ossClient->deleteObject($this->bucket, $this->getFileStoreName($fileName));
    }

    public function getMata($fileName)
    {
        return self::$ossClient->getObjectMeta($this->bucket, $this->getFileStoreName($fileName));
    }

    public function getObject($fileName, $options = [])
    {
        return self::$ossClient->getObject($this->bucket, $this->getFileStoreName($fileName), $options);
    }

    public function doesObjectExist($fileName)
    {
        return self::$ossClient->doesObjectExist($this->bucket, $this->getFileStoreName($fileName));
    }
}