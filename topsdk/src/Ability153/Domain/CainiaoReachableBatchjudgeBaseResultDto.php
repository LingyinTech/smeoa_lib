<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoReachableBatchjudgeBaseResultDto {

    /**
        请求错误信息
     **/
    public $one_error_info;

    /**
        请求是否成功
     **/
    public $success;

    /**
        返回信息
     **/
    public $module;


    public function getOneErrorInfo() : CainiaoReachableBatchjudgeErrorInfo{
        return $this->one_error_info;
    }

    public function setOneErrorInfo(CainiaoReachableBatchjudgeErrorInfo $oneErrorInfo){
        $this->one_error_info = $oneErrorInfo;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModule() : CainiaoReachableBatchjudgeReachableServiceWaybillForTopResponseDto{
        return $this->module;
    }

    public function setModule(CainiaoReachableBatchjudgeReachableServiceWaybillForTopResponseDto $module){
        $this->module = $module;
    }


}

