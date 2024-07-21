<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingExpirePromotionQueryMarketResult {

    /**
        message
     **/
    public $message;

    /**
        data
     **/
    public $data;

    /**
        errorCode
     **/
    public $error_code;

    /**
        success
     **/
    public $is_success;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getData() : AlibabaHmMarketingExpirePromotionQueryExpirePromotionBo{
        return $this->data;
    }

    public function setData(AlibabaHmMarketingExpirePromotionQueryExpirePromotionBo $data){
        $this->data = $data;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getIsSuccess() : bool{
        return $this->is_success;
    }

    public function setIsSuccess(bool $isSuccess){
        $this->is_success = $isSuccess;
    }


}

