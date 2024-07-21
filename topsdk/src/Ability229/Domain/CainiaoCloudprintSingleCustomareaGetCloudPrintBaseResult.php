<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoCloudprintSingleCustomareaGetCloudPrintBaseResult {

    /**
        data
     **/
    public $data;

    /**
        errorCode
     **/
    public $error_code;

    /**
        错误消息
     **/
    public $error_message;

    /**
        success
     **/
    public $success;


    public function getData() : CainiaoCloudprintSingleCustomareaGetCustomAreaSingleResult{
        return $this->data;
    }

    public function setData(CainiaoCloudprintSingleCustomareaGetCustomAreaSingleResult $data){
        $this->data = $data;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMessage() : string{
        return $this->error_message;
    }

    public function setErrorMessage(string $errorMessage){
        $this->error_message = $errorMessage;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

