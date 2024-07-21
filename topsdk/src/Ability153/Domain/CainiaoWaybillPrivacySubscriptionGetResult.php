<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoWaybillPrivacySubscriptionGetResult {

    /**
        错误code列表
     **/
    public $error_code_list;

    /**
        是否失败
     **/
    public $failure;

    /**
        第一个错误
     **/
    public $one_error_info;

    /**
        是否成功
     **/
    public $success;

    /**
        商家是否订购
     **/
    public $subscription;

    /**
        系统自动生成
     **/
    public $error_message;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误列表
     **/
    public $error_info_list;

    /**
        系统信息
     **/
    public $object_id;


    public function getErrorCodeList() : array{
        return $this->error_code_list;
    }

    public function setErrorCodeList(array $errorCodeList){
        $this->error_code_list = $errorCodeList;
    }

    public function getFailure() : bool{
        return $this->failure;
    }

    public function setFailure(bool $failure){
        $this->failure = $failure;
    }

    public function getOneErrorInfo() : string{
        return $this->one_error_info;
    }

    public function setOneErrorInfo(string $oneErrorInfo){
        $this->one_error_info = $oneErrorInfo;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getSubscription() : bool{
        return $this->subscription;
    }

    public function setSubscription(bool $subscription){
        $this->subscription = $subscription;
    }

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

    public function getErrorInfoList() : array{
        return $this->error_info_list;
    }

    public function setErrorInfoList(array $errorInfoList){
        $this->error_info_list = $errorInfoList;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }


}

