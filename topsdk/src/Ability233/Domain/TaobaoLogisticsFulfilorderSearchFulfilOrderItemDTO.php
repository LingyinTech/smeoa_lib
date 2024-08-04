<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsFulfilorderSearchFulfilOrderItemDTO {

    /**
        后端货品名
     **/
    public $sc_item_name;

    /**
        后端货品编码
     **/
    public $sc_item_code;

    /**
        后端货品id
     **/
    public $sc_item_id;

    /**
        预计发货数量
     **/
    public $goods_qty;

    /**
        子交易单
     **/
    public $sub_trade_id;

    /**
        分销场景下，分销toC交易子单
     **/
    public $fx_sub_trade_id;

    /**
        条码
     **/
    public $bar_code;

    /**
        扩展信息，invQlty（临期品可售场景）=139 gift_type（赠品类型）：1（普通品）、5（交易赠品）、2（供应链赠品）；
     **/
    public $feature_map;

    /**
        交易主单id
     **/
    public $trade_id;

    /**
        分销交易主单id
     **/
    public $fx_trade_id;

    /**
        组合货品主品Id
     **/
    public $combine_item_id;

    /**
        组合货品主品名称
     **/
    public $combine_item_name;

    /**
        组合货品交易下单数量
     **/
    public $combine_qty;

    /**
        前端商品Id
     **/
    public $item_id;

    /**
        前端商品Code
     **/
    public $item_code;

    /**
        前端商品名称
     **/
    public $item_name;

    /**
        skuId
     **/
    public $sku_id;


    public function getScItemName() : string{
        return $this->sc_item_name;
    }

    public function setScItemName(string $scItemName){
        $this->sc_item_name = $scItemName;
    }

    public function getScItemCode() : string{
        return $this->sc_item_code;
    }

    public function setScItemCode(string $scItemCode){
        $this->sc_item_code = $scItemCode;
    }

    public function getScItemId() : int{
        return $this->sc_item_id;
    }

    public function setScItemId(int $scItemId){
        $this->sc_item_id = $scItemId;
    }

    public function getGoodsQty() : int{
        return $this->goods_qty;
    }

    public function setGoodsQty(int $goodsQty){
        $this->goods_qty = $goodsQty;
    }

    public function getSubTradeId() : string{
        return $this->sub_trade_id;
    }

    public function setSubTradeId(string $subTradeId){
        $this->sub_trade_id = $subTradeId;
    }

    public function getFxSubTradeId() : string{
        return $this->fx_sub_trade_id;
    }

    public function setFxSubTradeId(string $fxSubTradeId){
        $this->fx_sub_trade_id = $fxSubTradeId;
    }

    public function getBarCode() : string{
        return $this->bar_code;
    }

    public function setBarCode(string $barCode){
        $this->bar_code = $barCode;
    }

    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }

    public function getTradeId() : string{
        return $this->trade_id;
    }

    public function setTradeId(string $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getFxTradeId() : string{
        return $this->fx_trade_id;
    }

    public function setFxTradeId(string $fxTradeId){
        $this->fx_trade_id = $fxTradeId;
    }

    public function getCombineItemId() : int{
        return $this->combine_item_id;
    }

    public function setCombineItemId(int $combineItemId){
        $this->combine_item_id = $combineItemId;
    }

    public function getCombineItemName() : string{
        return $this->combine_item_name;
    }

    public function setCombineItemName(string $combineItemName){
        $this->combine_item_name = $combineItemName;
    }

    public function getCombineQty() : int{
        return $this->combine_qty;
    }

    public function setCombineQty(int $combineQty){
        $this->combine_qty = $combineQty;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }


}

