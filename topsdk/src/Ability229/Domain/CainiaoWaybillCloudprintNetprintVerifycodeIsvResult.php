<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoWaybillCloudprintNetprintVerifycodeIsvResult {

    /**
        错误码，0 表示正常
     **/
    public $server_error_code;

    /**
        描述
     **/
    public $describe;


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

