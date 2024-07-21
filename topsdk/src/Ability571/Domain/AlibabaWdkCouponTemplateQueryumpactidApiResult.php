<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryumpactidApiResult {

    /**
        数据
     **/
    public $models;

    /**
        错误码
     **/
    public $err_code;

    /**
        错误信息
     **/
    public $err_msg;

    /**
        true为成功
     **/
    public $success;


    public function getModels() : array{
        return $this->models;
    }

    public function setModels(array $models){
        $this->models = $models;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

