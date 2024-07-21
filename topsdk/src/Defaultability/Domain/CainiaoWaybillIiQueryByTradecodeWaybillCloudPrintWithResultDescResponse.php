<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiQueryByTradecodeWaybillCloudPrintWithResultDescResponse {

    /**
        单查询错误code
     **/
    public $error_code;

    /**
        单查询错误message
     **/
    public $error_message;

    /**
        请求id
     **/
    public $object_id;

    /**
        是否查询
     **/
    public $success;

    /**
        面单信息
     **/
    public $waybill_cloud_print_response;


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

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getWaybillCloudPrintResponse() : CainiaoWaybillIiQueryByTradecodeWaybillCloudPrintResponse{
        return $this->waybill_cloud_print_response;
    }

    public function setWaybillCloudPrintResponse(CainiaoWaybillIiQueryByTradecodeWaybillCloudPrintResponse $waybillCloudPrintResponse){
        $this->waybill_cloud_print_response = $waybillCloudPrintResponse;
    }


}

