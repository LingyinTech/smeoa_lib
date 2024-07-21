<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItembuygiftAdditemMarketResult {

    /**
        错误信息
     **/
    public $message;

    /**
        错误码
     **/
    public $error_code;

    /**
        报名活动成功的商品详情
     **/
    public $data;

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

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getData() : AlibabaWdkMarketingItembuygiftAdditemItemBuyGiftSku{
        return $this->data;
    }

    public function setData(AlibabaWdkMarketingItembuygiftAdditemItemBuyGiftSku $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

