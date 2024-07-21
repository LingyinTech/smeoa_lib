<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintIsvResourcesGetCloudPrintBaseResult {

    /**
        data
     **/
    public $resource_list;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误消息
     **/
    public $error_message;

    /**
        状态
     **/
    public $success;


    public function getResourceList() : array{
        return $this->resource_list;
    }

    public function setResourceList(array $resourceList){
        $this->resource_list = $resourceList;
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

