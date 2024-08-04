<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReturnorderSvcSearchReturnLogisticsInfoDTO {

    /**
        商家店铺id
     **/
    public $seller_id;

    /**
        淘宝交易单号
     **/
    public $trade_id;

    /**
        发货运单号
     **/
    public $consign_mail_no;

    /**
        逆向退回物流单号
     **/
    public $return_mail_no;

    /**
        退回运单对应的物流编码
     **/
    public $return_tms_code;


    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

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

    public function getReturnTmsCode() : string{
        return $this->return_tms_code;
    }

    public function setReturnTmsCode(string $returnTmsCode){
        $this->return_tms_code = $returnTmsCode;
    }


}

