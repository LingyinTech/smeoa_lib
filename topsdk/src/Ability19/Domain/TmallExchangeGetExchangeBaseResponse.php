<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeGetExchangeBaseResponse {

    /**
        错误信息说明
     **/
    public $message;

    /**
        错误码
     **/
    public $msg_code;

    /**
        返回结果是否符合要求
     **/
    public $success;

    /**
        换货单详情
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

    public function getExchange() : TmallExchangeGetExchange{
        return $this->exchange;
    }

    public function setExchange(TmallExchangeGetExchange $exchange){
        $this->exchange = $exchange;
    }


}

