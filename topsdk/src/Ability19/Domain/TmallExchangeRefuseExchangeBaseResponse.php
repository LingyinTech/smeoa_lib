<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeRefuseExchangeBaseResponse {

    /**
        返回结果说明
     **/
    public $message;

    /**
        返回结果码
     **/
    public $msg_code;

    /**
        是否成功调用
     **/
    public $success;

    /**
        换货单基本信息
     **/
    public $exchange;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getExchange() : TmallExchangeRefuseExchange{
        return $this->exchange;
    }

    public function setExchange(TmallExchangeRefuseExchange $exchange){
        $this->exchange = $exchange;
    }


}

