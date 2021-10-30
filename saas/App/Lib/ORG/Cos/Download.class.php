<?php

require_once __DIR__.'/../BaseUpload.class.php';

class Download extends BaseUpload
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

    public function down($fileName, $localFile = '')
    {
        if (empty($localFile)) {
            $localFile = $fileName;
        }

        $metaInfo = $this->getMata($fileName);
        $size = $metaInfo['content-length'];

        self::$ossClient->getObject(
            [
                'Bucket' => $this->bucket,
                'Key' => $this->getFileStoreName($fileName),
                'SaveAs' => $localFile,
            ]
        );

        return $size;
    }

    public function deleteFile($fileName)
    {
        return self::$ossClient->deleteObject(
            [
                'Bucket' => $this->bucket,
                'Key' => $this->getFileStoreName($fileName),
            ]
        );
    }

    public function getMata($fileName)
    {
        $result = self::$ossClient->headObject(
            [
                'Bucket' => $this->bucket,
                'Key' => $this->getFileStoreName($fileName),
            ]
        );
        $result = $result->toArray();
        if (empty($result)) {
            return false;
        }

        return [
            'content-type' => $result['ContentType'],
            'content-length' => $result['ContentLength'],
        ];
    }

    public function getObject($fileName, $options = [])
    {
        $params = [
            'Bucket' => $this->bucket,
            'Key' => $this->getFileStoreName($fileName),
        ];
        if (isset($options['range'])) {
            list($begin, $end) = explode('--', $options['range']);
            $params['Range'] = "bytes={$begin}-{$end}";
        }

        $result = self::$ossClient->getObject($params);
        $result = $result->toArray();
        return $result['Body'];
    }

    public function doesObjectExist($fileName)
    {
        return self::$ossClient->doesObjectExist($this->bucket, $this->getFileStoreName($fileName));
    }
}