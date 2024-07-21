<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenPosDiscountCodeCreateWdkMarketOpenResult {

    /**
        唯一码信息
     **/
    public $data;

    /**
        true--成功，false--失败
     **/
    public $success;

    /**
        错误提示信息
     **/
    public $error_code;

    /**
        错误码
     **/
    public $message;


    public function getData() : AlibabaWdkMarketingOpenPosDiscountCodeCreateUniqueDiscountCodeBO{
        return $this->data;
    }

    public function setData(AlibabaWdkMarketingOpenPosDiscountCodeCreateUniqueDiscountCodeBO $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }


}

