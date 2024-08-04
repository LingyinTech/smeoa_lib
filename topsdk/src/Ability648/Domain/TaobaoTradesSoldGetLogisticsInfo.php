<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradesSoldGetLogisticsInfo {

    /**
        订单推荐配送类型      * 0：子单无配建议；ERP按照自己的逻辑进行择配。      * 1：子单有推荐配list，erp可按需参考。      * 2：子单有推荐配list，erp必须在推荐配list中选择配品牌。      * 3：子单有禁用配list，erp需要过滤配品牌。
     **/
    public $biz_delivery_type;

    /**
        未使用仓建议报错
     **/
    public $unused_warehouse_error_msg;

    /**
        未使用配建议报错
     **/
    public $unused_delivery_error_msg;

    /**
        使用禁止配报错
     **/
    public $used_black_delivery_error_msg;

    /**
        承诺/最晚出库时间
     **/
    public $promise_outbound_time;

    /**
        主交易号
     **/
    public $trade_id;

    /**
        子交易号
     **/
    public $sub_trade_id;

    /**
        承诺/最晚揽收时间
     **/
    public $promise_collect_time;


    public function getBizDeliveryType() : int{
        return $this->biz_delivery_type;
    }

    public function setBizDeliveryType(int $bizDeliveryType){
        $this->biz_delivery_type = $bizDeliveryType;
    }

    public function getUnusedWarehouseErrorMsg() : string{
        return $this->unused_warehouse_error_msg;
    }

    public function setUnusedWarehouseErrorMsg(string $unusedWarehouseErrorMsg){
        $this->unused_warehouse_error_msg = $unusedWarehouseErrorMsg;
    }

    public function getUnusedDeliveryErrorMsg() : string{
        return $this->unused_delivery_error_msg;
    }

    public function setUnusedDeliveryErrorMsg(string $unusedDeliveryErrorMsg){
        $this->unused_delivery_error_msg = $unusedDeliveryErrorMsg;
    }

    public function getUsedBlackDeliveryErrorMsg() : string{
        return $this->used_black_delivery_error_msg;
    }

    public function setUsedBlackDeliveryErrorMsg(string $usedBlackDeliveryErrorMsg){
        $this->used_black_delivery_error_msg = $usedBlackDeliveryErrorMsg;
    }

    public function getPromiseOutboundTime() : string{
        return $this->promise_outbound_time;
    }

    public function setPromiseOutboundTime(string $promiseOutboundTime){
        $this->promise_outbound_time = $promiseOutboundTime;
    }

    public function getTradeId() : int{
        return $this->trade_id;
    }

    public function setTradeId(int $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getSubTradeId() : int{
        return $this->sub_trade_id;
    }

    public function setSubTradeId(int $subTradeId){
        $this->sub_trade_id = $subTradeId;
    }

    public function getPromiseCollectTime() : string{
        return $this->promise_collect_time;
    }

    public function setPromiseCollectTime(string $promiseCollectTime){
        $this->promise_collect_time = $promiseCollectTime;
    }


}

