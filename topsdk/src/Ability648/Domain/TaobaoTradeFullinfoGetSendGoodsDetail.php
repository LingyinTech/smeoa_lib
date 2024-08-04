<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetSendGoodsDetail {

    /**
        0普通1组合商品2组套商品3后置赠品4状态推进
     **/
    public $type;

    /**
        0全部发货1部分发货
     **/
    public $consign_status;

    /**
        数量
     **/
    public $amount;

    /**
        包裹详情
     **/
    public $goods_details;


    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getConsignStatus() : int{
        return $this->consign_status;
    }

    public function setConsignStatus(int $consignStatus){
        $this->consign_status = $consignStatus;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getGoodsDetails() : array{
        return $this->goods_details;
    }

    public function setGoodsDetails(array $goodsDetails){
        $this->goods_details = $goodsDetails;
    }


}

