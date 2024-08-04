<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReverseorderErpSearchErpReverseOrderItemViewDTO {

    /**
        子交易单id
     **/
    public $sub_trade_id;

    /**
        货品id
     **/
    public $sc_item_id;

    /**
        货品code
     **/
    public $sc_item_code;

    /**
        后端货品名称
     **/
    public $sc_item_name;

    /**
        条形码
     **/
    public $bar_code;

    /**
        计划数量
     **/
    public $plan_quantity;

    /**
        实际上架数量
     **/
    public $real_quantity;

    /**
        残品数量
     **/
    public $damage_quantity;

    /**
        销退二级明细
     **/
    public $reverse_order_return_item_list;

    /**
        tc_order_id：2C交易订单 tc_suborder_id：2C交易子订单 refundReason：退货原因 refundReasonId：退货原因ID
     **/
    public $feature_map;

    /**
        交易单号
     **/
    public $trade_id;

    /**
        明细主键id
     **/
    public $id;

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


    public function getSubTradeId() : string{
        return $this->sub_trade_id;
    }

    public function setSubTradeId(string $subTradeId){
        $this->sub_trade_id = $subTradeId;
    }

    public function getScItemId() : int{
        return $this->sc_item_id;
    }

    public function setScItemId(int $scItemId){
        $this->sc_item_id = $scItemId;
    }

    public function getScItemCode() : string{
        return $this->sc_item_code;
    }

    public function setScItemCode(string $scItemCode){
        $this->sc_item_code = $scItemCode;
    }

    public function getScItemName() : string{
        return $this->sc_item_name;
    }

    public function setScItemName(string $scItemName){
        $this->sc_item_name = $scItemName;
    }

    public function getBarCode() : string{
        return $this->bar_code;
    }

    public function setBarCode(string $barCode){
        $this->bar_code = $barCode;
    }

    public function getPlanQuantity() : int{
        return $this->plan_quantity;
    }

    public function setPlanQuantity(int $planQuantity){
        $this->plan_quantity = $planQuantity;
    }

    public function getRealQuantity() : int{
        return $this->real_quantity;
    }

    public function setRealQuantity(int $realQuantity){
        $this->real_quantity = $realQuantity;
    }

    public function getDamageQuantity() : int{
        return $this->damage_quantity;
    }

    public function setDamageQuantity(int $damageQuantity){
        $this->damage_quantity = $damageQuantity;
    }

    public function getReverseOrderReturnItemList() : array{
        return $this->reverse_order_return_item_list;
    }

    public function setReverseOrderReturnItemList(array $reverseOrderReturnItemList){
        $this->reverse_order_return_item_list = $reverseOrderReturnItemList;
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

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
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

