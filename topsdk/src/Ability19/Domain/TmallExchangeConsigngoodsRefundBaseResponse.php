<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeConsigngoodsRefundBaseResponse {

    /**
        message
     **/
    public $message;

    /**
        msgCode
     **/
    public $msg_code;

    /**
        success
     **/
    public $success;

    /**
        exchange
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

    public function getExchange() : TmallExchangeConsigngoodsExchange{
        return $this->exchange;
    }

    public function setExchange(TmallExchangeConsigngoodsExchange $exchange){
        $this->exchange = $exchange;
    }


}

