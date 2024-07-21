<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiQueryByWaybillcodeWaybillCloudPrintWithResultDescResponse {

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_message;

    /**
        请求id
     **/
    public $object_id;

    /**
        请求成功
     **/
    public $success;

    /**
        面单查询结构体
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

    public function getWaybillCloudPrintResponse() : CainiaoWaybillIiQueryByWaybillcodeWaybillCloudPrintResponse{
        return $this->waybill_cloud_print_response;
    }

    public function setWaybillCloudPrintResponse(CainiaoWaybillIiQueryByWaybillcodeWaybillCloudPrintResponse $waybillCloudPrintResponse){
        $this->waybill_cloud_print_response = $waybillCloudPrintResponse;
    }


}

