<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoWaybillCloudprintNetprintBindIsvResult {

    /**
        共享码
     **/
    public $data;

    /**
        错误码
     **/
    public $server_error_code;

    /**
        描述
     **/
    public $describe;


    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

    public function getServerErrorCode() : string{
        return $this->server_error_code;
    }

    public function setServerErrorCode(string $serverErrorCode){
        $this->server_error_code = $serverErrorCode;
    }

    public function getDescribe() : string{
        return $this->describe;
    }

    public function setDescribe(string $describe){
        $this->describe = $describe;
    }


}

