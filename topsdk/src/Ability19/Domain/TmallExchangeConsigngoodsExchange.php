<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeConsigngoodsExchange {

    /**
        modified
     **/
    public $modified;

    /**
        status
     **/
    public $status;

    /**
        bizOrderId
     **/
    public $biz_order_id;

    /**
        disputeId
     **/
    public $dispute_id;


    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
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

    public function getDisputeId() : string{
        return $this->dispute_id;
    }

    public function setDisputeId(string $disputeId){
        $this->dispute_id = $disputeId;
    }


}

