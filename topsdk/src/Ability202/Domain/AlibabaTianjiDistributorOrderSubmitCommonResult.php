<?php
namespace Topsdk\Topapi\Ability202\Domain;

class AlibabaTianjiDistributorOrderSubmitCommonResult {

    /**
        错误码
     **/
    public $code;

    /**
        错误描述
     **/
    public $desc;

    /**
        是否成功
     **/
    public $success;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

