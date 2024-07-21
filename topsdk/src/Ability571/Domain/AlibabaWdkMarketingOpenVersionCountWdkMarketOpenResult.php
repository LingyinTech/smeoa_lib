<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenVersionCountWdkMarketOpenResult {

    /**
        错误编码
     **/
    public $error_code;

    /**
        查询结果
     **/
    public $success;

    /**
        错误描述
     **/
    public $message;

    /**
        版本同步数量
     **/
    public $data;


    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getData() : int{
        return $this->data;
    }

    public function setData(int $data){
        $this->data = $data;
    }


}

