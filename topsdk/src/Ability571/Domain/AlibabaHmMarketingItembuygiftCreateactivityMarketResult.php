<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItembuygiftCreateactivityMarketResult {

    /**
        错误信息
     **/
    public $message;

    /**
        错误码
     **/
    public $error_code;

    /**
        创建成功时会返回五道口活动id
     **/
    public $data;

    /**
        创建活动是否成功
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

    public function getData() : int{
        return $this->data;
    }

    public function setData(int $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

