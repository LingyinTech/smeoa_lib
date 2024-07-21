<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenDarunfaActivitySyncWdkMarketOpenResult {

    /**
        true--成功，false--失败
     **/
    public $success;

    /**
        活动数据
     **/
    public $activity_list;

    /**
        错误码
     **/
    public $message;

    /**
        错误描述
     **/
    public $error_code;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getActivityList() : array{
        return $this->activity_list;
    }

    public function setActivityList(array $activityList){
        $this->activity_list = $activityList;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }


}

