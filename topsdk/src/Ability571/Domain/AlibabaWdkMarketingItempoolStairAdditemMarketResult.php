<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolStairAdditemMarketResult {

    /**
        结果信息
     **/
    public $message;

    /**
        错误编码
     **/
    public $error_code;

    /**
        data
     **/
    public $data;

    /**
        success
     **/
    public $success;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getData() : AlibabaWdkMarketingItempoolStairAdditemItemPoolSku{
        return $this->data;
    }

    public function setData(AlibabaWdkMarketingItempoolStairAdditemItemPoolSku $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

