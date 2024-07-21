<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItemdiscountQueryactivityMarketResult {

    /**
        错误信息
     **/
    public $message;

    /**
        错误码
     **/
    public $error_code;

    /**
        特价活动信息
     **/
    public $data;

    /**
        是否参加后单压前单，默认不参加
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

    public function getData() : AlibabaWdkMarketingItemdiscountQueryactivityItemDiscountActivity{
        return $this->data;
    }

    public function setData(AlibabaWdkMarketingItemdiscountQueryactivityItemDiscountActivity $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

