<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuQueryApiResult {

    /**
        错误码
     **/
    public $err_code;

    /**
        错误信息
     **/
    public $err_msg;

    /**
        返回
     **/
    public $model;

    /**
        成功标志
     **/
    public $success;


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

    public function getModel() : AlibabaWdkCouponSkuQueryCouponTemplateOperateResponse{
        return $this->model;
    }

    public function setModel(AlibabaWdkCouponSkuQueryCouponTemplateOperateResponse $model){
        $this->model = $model;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

