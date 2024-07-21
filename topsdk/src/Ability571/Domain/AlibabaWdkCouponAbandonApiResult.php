<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponAbandonApiResult {

    /**
        错误码
     **/
    public $err_code;

    /**
        错误信息
     **/
    public $err_msg;

    /**
        成功标志
     **/
    public $success;

    /**
        操作结果
     **/
    public $model;


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

    public function getModel() : bool{
        return $this->model;
    }

    public function setModel(bool $model){
        $this->model = $model;
    }


}

