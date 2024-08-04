<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetLogisticsModifyInfo {

    /**
        修改关联的订单好
     **/
    public $related_id;

    /**
        修改后的发货时效
     **/
    public $consign_time;

    /**
        修改前的发货时效
     **/
    public $origin_consign_time;

    /**
        修改时间
     **/
    public $modify_time;

    /**
        修改原因
     **/
    public $modify_reason;

    /**
        成分品的商品id
     **/
    public $item_id;

    /**
        成分品的skuId
     **/
    public $sku_id;

    /**
        成分品的组合id
     **/
    public $comb_id;


    public function getRelatedId() : string{
        return $this->related_id;
    }

    public function setRelatedId(string $relatedId){
        $this->related_id = $relatedId;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getOriginConsignTime() : string{
        return $this->origin_consign_time;
    }

    public function setOriginConsignTime(string $originConsignTime){
        $this->origin_consign_time = $originConsignTime;
    }

    public function getModifyTime() : string{
        return $this->modify_time;
    }

    public function setModifyTime(string $modifyTime){
        $this->modify_time = $modifyTime;
    }

    public function getModifyReason() : string{
        return $this->modify_reason;
    }

    public function setModifyReason(string $modifyReason){
        $this->modify_reason = $modifyReason;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getCombId() : string{
        return $this->comb_id;
    }

    public function setCombId(string $combId){
        $this->comb_id = $combId;
    }


}

