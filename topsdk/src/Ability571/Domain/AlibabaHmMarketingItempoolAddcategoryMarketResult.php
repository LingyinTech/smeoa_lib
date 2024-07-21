<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolAddcategoryMarketResult {

    /**
        错误信息
     **/
    public $message;

    /**
        报名活动成功的商品详情
     **/
    public $data;

    /**
        错误码
     **/
    public $error_code;

    /**
        是否报名成功
     **/
    public $success;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

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


}

