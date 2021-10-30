<?php


abstract class BaseUpload extends Think
{

    public $saveRule = '';
    public $maxSize = -1;

    public $allowExts = [];
    public $allowTypes = [];

    public $savePath = '';
    public $autoCheck = true;
    public $uploadReplace = false;
    public $autoSub = false;
    public $subType = 'hash';
    public $subFolder;
    public $dateFormat = 'Ym';
    public $hashLevel = 1;
    public $hashType = 'md5_file';

    protected $accessKeyId;
    protected $accessKeySecret;
    protected $endpoint;
    protected $region;
    protected $bucket;

    // 错误信息
    protected $error = '';
    protected $uploadFileInfo;

    static $ossClient = null;

    public function __construct()
    {
        $this->saveRule = C('UPLOAD_FILE_RULE');
        $this->accessKeyId = C('FILE_STORE_ACCESS_ID');
        $this->accessKeySecret = C('FILE_STORE_ACCESS_KEY');
        $this->endpoint = C('FILE_STORE_ENDPOINT');
        $this->region = C('FILE_STORE_REGION');
        $this->bucket = C('FILE_STORE_BUCKET');
    }

    public function getErrorMsg()
    {
        return $this->error;
    }

    public function getUploadFileInfo()
    {
        return $this->uploadFileInfo;
    }

    public function upload($savePath = '')
    {
        if (empty($savePath)) {
            $savePath = $this->savePath;
        }

        $fileInfo = [];
        $isUpload = false;

        $files = $this->dealFiles($_FILES);
        foreach ($files as $key => $file) {
            if (!empty($file['name'])) {
                $file['key'] = $key;
                $file['extension'] = $this->getExt($file['name']);
                $file['save_path'] = $savePath;
                $file['save_name'] = $this->getSaveName($file);

                // 自动检查附件
                if ($this->autoCheck && (!$this->check($file))) {
                    return false;
                }

                //保存上传文件
                if (!$this->save($file)) {
                    return false;
                }

                if (function_exists($this->hashType)) {
                    $fun = $this->hashType;
                    $file['hash'] = $fun(auto_charset($file['save_path'] . $file['save_name'], 'utf-8', 'gbk'));
                }

                unset($file['tmp_name'], $file['error']);
                $fileInfo[] = $file;
                $isUpload = true;
            }
        }

        if ($isUpload) {
            $this->uploadFileInfo = $fileInfo;
            return true;
        } else {
            $this->error = '没有选择上传文件';
            return false;
        }

    }

    protected function check($file)
    {
        if ($file['error'] !== 0) {
            $this->error($file['error']);
            return false;
        }

        if (!$this->checkSize($file['size'])) {
            $this->error = '上传文件大小不符！';
            return false;
        }

        if (!$this->checkType($file['type'])) {
            $this->error = '上传文件MIME类型不允许！';
            return false;
        }

        if (!$this->checkExt($file['extension'])) {
            $this->error = '上传文件类型不允许';
            return false;
        }

        if (!$this->checkUpload($file['tmp_name'])) {
            $this->error = '非法上传文件！';
            return false;
        }
        return true;
    }

    /**
     * 检查上传的文件类型是否合法
     * @access private
     * @param string $type 数据
     * @return boolean
     */
    protected function checkType($type)
    {
        if (!empty($this->allowTypes)) {
            return in_array(strtolower($type), $this->allowTypes);
        }
        return true;
    }


    /**
     * 检查上传的文件后缀是否合法
     * @access private
     * @param string $ext 后缀名
     * @return boolean
     */
    protected function checkExt($ext)
    {
        if (!empty($this->allowExts)) {
            return in_array(strtolower($ext), $this->allowExts, true);
        }
        return true;
    }

    /**
     * +----------------------------------------------------------
     * 检查文件大小是否合法
     * +----------------------------------------------------------
     * @access private
     * +----------------------------------------------------------
     * @param integer $size 数据
     * +----------------------------------------------------------
     * @return boolean
    +----------------------------------------------------------
     */
    protected function checkSize($size)
    {
        return !($size > $this->maxSize) || (-1 == $this->maxSize);
    }

    /**
     * +----------------------------------------------------------
     * 检查文件是否非法提交
     * +----------------------------------------------------------
     * @access private
     * +----------------------------------------------------------
     * @param string $filename 文件名
     * +----------------------------------------------------------
     * @return boolean
    +----------------------------------------------------------
     */
    protected function checkUpload($filename)
    {
        return is_uploaded_file($filename);
    }

    protected function getExt($fileName)
    {
        $pathInfo = pathinfo($fileName);
        return $pathInfo['extension'];
    }

    protected function getSaveName($filename, $thumb = false)
    {
        $rule = $this->saveRule;
        if (empty($rule)) {
            $saveName = $filename['name'];
        } else {
            if (function_exists($rule)) {
                $saveName = $rule() . "." . $filename['extension'];
            } else {
                $saveName = $rule . "." . $filename['extension'];
            }
        }

        if ($thumb) {
            $saveName = 'thumb/' . $saveName;
        }

        if ($this->autoSub) {
            $saveName = $this->getSubName($filename) . '/' . $saveName;
        }
        return $saveName;
    }

    protected function getSubName($file)
    {
        switch ($this->subType) {
            case 'date':
                $dir = date($this->dateFormat, time());
                break;
            case 'hash':
            default:
                $name = md5($file['save_name']);
                $dir = '';
                for ($i = 0; $i < $this->hashLevel; $i++) {
                    $dir .= $name{0} . '/';
                }
                break;
        }

        if (!empty($this->subFolder)) {
            $dir = $this->subFolder . "/" . $dir;
        }

        return $dir;
    }

    protected function dealFiles($files)
    {
        $fileArray = array();
        foreach ($files as $file) {
            if (is_array($file['name'])) {
                $keys = array_keys($file);
                $count = count($file['name']);
                for ($i = 0; $i < $count; $i++) {
                    foreach ($keys as $key)
                        $fileArray[$i][$key] = $file[$key][$i];
                }
            } else {
                $fileArray = $files;
            }
            break;
        }
        return $fileArray;
    }

    protected function getFileStoreName($filename)
    {
        return C('FILE_STORE_PATH').$filename;
    }
}