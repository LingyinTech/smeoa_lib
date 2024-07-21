<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItembuygiftQueryactivityMarketResult {

    /**
        错误信息
     **/
    public $message;

    /**
        错误码
     **/
    public $error_code;

    /**
        查询返回的活动信息
     **/
    public $data;

    /**
        查询活动是否成功
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

    public function getData() : AlibabaHmMarketingItembuygiftQueryactivityItemBuyGiftActivity{
        return $this->data;
    }

    public function setData(AlibabaHmMarketingItembuygiftQueryactivityItemBuyGiftActivity $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

