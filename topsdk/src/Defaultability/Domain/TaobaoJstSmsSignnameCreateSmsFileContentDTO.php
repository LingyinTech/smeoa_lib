<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsSignnameCreateSmsFileContentDTO {

    /**
        文件名称
     **/
    public $file_name;

    /**
        文件大小
     **/
    public $file_size;

    /**
        文件后缀名
     **/
    public $file_suffix;

    /**
        文件Base64转码后的字符串
     **/
    public $file_contents;


    public function getFileName() : string{
        return $this->file_name;
    }

    public function setFileName(string $fileName){
        $this->file_name = $fileName;
    }

    public function getFileSize() : int{
        return $this->file_size;
    }

    public function setFileSize(int $fileSize){
        $this->file_size = $fileSize;
    }

    public function getFileSuffix() : string{
        return $this->file_suffix;
    }

    public function setFileSuffix(string $fileSuffix){
        $this->file_suffix = $fileSuffix;
    }

    public function getFileContents() : string{
        return $this->file_contents;
    }

    public function setFileContents(string $fileContents){
        $this->file_contents = $fileContents;
    }


}

