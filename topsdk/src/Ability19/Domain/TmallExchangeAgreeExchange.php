<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeAgreeExchange {

    /**
        修改时间
     **/
    public $modified;

    /**
        换货单号ID
     **/
    public $dispute_id;

    /**
        换货单状态
     **/
    public $status;

    /**
        正向交易单号ID
     **/
    public $biz_order_id;


    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getDisputeId() : string{
        return $this->dispute_id;
    }

    public function setDisputeId(string $disputeId){
        $this->dispute_id = $disputeId;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }


}

