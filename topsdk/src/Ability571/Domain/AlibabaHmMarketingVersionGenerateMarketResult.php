<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingVersionGenerateMarketResult {

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
    public $result_code;

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

    public function getData() : int{
        return $this->data;
    }

    public function setData(int $data){
        $this->data = $data;
    }

    public function getResultCode() : string{
        return $this->result_code;
    }

    public function setResultCode(string $resultCode){
        $this->result_code = $resultCode;
    }

    public function getIsSuccess() : bool{
        return $this->is_success;
    }

    public function setIsSuccess(bool $isSuccess){
        $this->is_success = $isSuccess;
    }


}

