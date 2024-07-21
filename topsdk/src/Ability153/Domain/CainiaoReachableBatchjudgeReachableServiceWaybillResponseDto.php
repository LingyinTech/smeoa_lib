<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoReachableBatchjudgeReachableServiceWaybillResponseDto {

    /**
        单个结果是否异常
     **/
    public $error_info;

    /**
        单个结果是否成功
     **/
    public $success;

    /**
        可达信息
     **/
    public $module;

    /**
        与入参地址列表中单项objectId对应
     **/
    public $object_id;


    public function getErrorInfo() : CainiaoReachableBatchjudgeErrorInfo{
        return $this->error_info;
    }

    public function setErrorInfo(CainiaoReachableBatchjudgeErrorInfo $errorInfo){
        $this->error_info = $errorInfo;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModule() : CainiaoReachableBatchjudgeReachableDto{
        return $this->module;
    }

    public function setModule(CainiaoReachableBatchjudgeReachableDto $module){
        $this->module = $module;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }


}

