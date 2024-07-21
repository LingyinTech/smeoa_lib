<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeReturngoodsAgreeExchangeBaseResponse {

    /**
        返回结果的描述字段
     **/
    public $message;

    /**
        返回结果的状态码
     **/
    public $msg_code;

    /**
        是否成功调用
     **/
    public $success;

    /**
        换货单号基本信息
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

    public function getExchange() : TmallExchangeReturngoodsAgreeExchange{
        return $this->exchange;
    }

    public function setExchange(TmallExchangeReturngoodsAgreeExchange $exchange){
        $this->exchange = $exchange;
    }


}

