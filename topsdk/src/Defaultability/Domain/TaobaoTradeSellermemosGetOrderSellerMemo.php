<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTradeSellermemosGetOrderSellerMemo {

    /**
        订单号
     **/
    public $tid;

    /**
        订单备注
     **/
    public $memo;

    /**
        插旗ID
     **/
    public $flag_id;

    /**
        插旗备注
     **/
    public $flag_tag;

    /**
        备注创建者ID
     **/
    public $operator_id;

    /**
        备注创建时间戳
     **/
    public $timestamp;

    /**
        备注创建者昵称
     **/
    public $operator_nick;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getFlagId() : int{
        return $this->flag_id;
    }

    public function setFlagId(int $flagId){
        $this->flag_id = $flagId;
    }

    public function getFlagTag() : string{
        return $this->flag_tag;
    }

    public function setFlagTag(string $flagTag){
        $this->flag_tag = $flagTag;
    }

    public function getOperatorId() : int{
        return $this->operator_id;
    }

    public function setOperatorId(int $operatorId){
        $this->operator_id = $operatorId;
    }

    public function getTimestamp() : int{
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp){
        $this->timestamp = $timestamp;
    }

    public function getOperatorNick() : string{
        return $this->operator_nick;
    }

    public function setOperatorNick(string $operatorNick){
        $this->operator_nick = $operatorNick;
    }


}

