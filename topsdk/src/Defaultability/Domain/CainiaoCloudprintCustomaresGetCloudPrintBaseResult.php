<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintCustomaresGetCloudPrintBaseResult {

    /**
        数据
     **/
    public $datas;

    /**
        系统自动生成
     **/
    public $error_code;

    /**
        系统自动生成
     **/
    public $error_message;

    /**
        系统自动生成
     **/
    public $success;


    public function getDatas() : array{
        return $this->datas;
    }

    public function setDatas(array $datas){
        $this->datas = $datas;
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

