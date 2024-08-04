<?php
namespace Topsdk\Topapi\Ability312\Domain;

class AlibabaAliqinTaNumberSinglecallbyvoiceResult {

    /**
        结果
     **/
    public $model;

    /**
        系统自动生成
     **/
    public $msg;

    /**
        成功，失败
     **/
    public $success;

    /**
        系统自动生成
     **/
    public $code;


    public function getModel() : string{
        return $this->model;
    }

    public function setModel(string $model){
        $this->model = $model;
    }

    public function getMsg() : string{
        return $this->msg;
    }

    public function setMsg(string $msg){
        $this->msg = $msg;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }


}

