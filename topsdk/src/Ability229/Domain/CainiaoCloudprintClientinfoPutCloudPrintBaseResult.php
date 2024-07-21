<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoCloudprintClientinfoPutCloudPrintBaseResult {

    /**
        errorMessage
     **/
    public $error_message;

    /**
        errorCode
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


    public function getErrorMessage() : string{
        return $this->error_message;
    }

    public function setErrorMessage(string $errorMessage){
        $this->error_message = $errorMessage;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getData() : array{
        return $this->data;
    }

    public function setData(array $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

