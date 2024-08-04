<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReturnorderSvcSearchReturnLogisticsInfoQueryReq {

    /**
        淘宝交易单号
     **/
    public $trade_id;

    /**
        发货运单号
     **/
    public $consign_mail_no;

    /**
        773284273544336
     **/
    public $return_mail_no;


    public function getTradeId() : string{
        return $this->trade_id;
    }

    public function setTradeId(string $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getConsignMailNo() : string{
        return $this->consign_mail_no;
    }

    public function setConsignMailNo(string $consignMailNo){
        $this->consign_mail_no = $consignMailNo;
    }

    public function getReturnMailNo() : string{
        return $this->return_mail_no;
    }

    public function setReturnMailNo(string $returnMailNo){
        $this->return_mail_no = $returnMailNo;
    }


}

