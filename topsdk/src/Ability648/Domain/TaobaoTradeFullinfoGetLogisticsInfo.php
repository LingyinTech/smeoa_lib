<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetLogisticsInfo {

    /**
        主交易号
     **/
    public $trade_id;

    /**
        子交易号
     **/
    public $sub_trade_id;

    /**
        货品仓储id
     **/
    public $item_id;

    /**
        货品仓储code
     **/
    public $item_code;

    /**
        应发数量
     **/
    public $need_consign_num;

    /**
        如是菜鸟仓，则将菜鸟仓的区域仓code进行填充，如是商家仓发货则填充SC
     **/
    public $store_code;

    /**
        子订单类型:标示该子交易单来源交易，还是BMS增加的，枚举值(00=交易，10=BMS绑定)
     **/
    public $type;

    /**
        商品的最小库存单位Sku的id
     **/
    public $sku_id;

    /**
        商品数字编号
     **/
    public $num_iid;

    /**
        发货类型 CN=菜鸟发货,SC的商家仓发货
     **/
    public $consign_type;

    /**
        组合货品ID
     **/
    public $combine_item_id;

    /**
        组合货品Code
     **/
    public $combine_item_code;

    /**
        组合货品比例
     **/
    public $item_ratio;

    /**
        货品BarCode
     **/
    public $bar_code;

    /**
        择配信息
     **/
    public $delivery_cps;

    /**
        推荐配送erp编码
     **/
    public $biz_delivery_code;

    /**
        仓商家编码
     **/
    public $biz_store_code;

    /**
        仓配建议类型
     **/
    public $biz_sd_type;

    /**
        服务决策的发货地，国家
     **/
    public $send_country;

    /**
        服务决策的发货地，省份
     **/
    public $send_state;

    /**
        服务决策的发货地，城市
     **/
    public $send_city;

    /**
        服务决策的发货地，地区
     **/
    public $send_district;

    /**
        服务决策的发货地，街道地址
     **/
    public $send_town;

    /**
        服务决策的发货地最小地址编码
     **/
    public $send_division_code;

    /**
        服务决策的快递黑名单列表
     **/
    public $black_delivery_cps;

    /**
        服务决策的快递白名单列表
     **/
    public $white_delivery_cps;

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
        承诺/最晚揽收时间
     **/
    public $promise_collect_time;


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

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getNeedConsignNum() : int{
        return $this->need_consign_num;
    }

    public function setNeedConsignNum(int $needConsignNum){
        $this->need_consign_num = $needConsignNum;
    }

    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getConsignType() : string{
        return $this->consign_type;
    }

    public function setConsignType(string $consignType){
        $this->consign_type = $consignType;
    }

    public function getCombineItemId() : string{
        return $this->combine_item_id;
    }

    public function setCombineItemId(string $combineItemId){
        $this->combine_item_id = $combineItemId;
    }

    public function getCombineItemCode() : string{
        return $this->combine_item_code;
    }

    public function setCombineItemCode(string $combineItemCode){
        $this->combine_item_code = $combineItemCode;
    }

    public function getItemRatio() : int{
        return $this->item_ratio;
    }

    public function setItemRatio(int $itemRatio){
        $this->item_ratio = $itemRatio;
    }

    public function getBarCode() : string{
        return $this->bar_code;
    }

    public function setBarCode(string $barCode){
        $this->bar_code = $barCode;
    }

    public function getDeliveryCps() : string{
        return $this->delivery_cps;
    }

    public function setDeliveryCps(string $deliveryCps){
        $this->delivery_cps = $deliveryCps;
    }

    public function getBizDeliveryCode() : string{
        return $this->biz_delivery_code;
    }

    public function setBizDeliveryCode(string $bizDeliveryCode){
        $this->biz_delivery_code = $bizDeliveryCode;
    }

    public function getBizStoreCode() : string{
        return $this->biz_store_code;
    }

    public function setBizStoreCode(string $bizStoreCode){
        $this->biz_store_code = $bizStoreCode;
    }

    public function getBizSdType() : string{
        return $this->biz_sd_type;
    }

    public function setBizSdType(string $bizSdType){
        $this->biz_sd_type = $bizSdType;
    }

    public function getSendCountry() : string{
        return $this->send_country;
    }

    public function setSendCountry(string $sendCountry){
        $this->send_country = $sendCountry;
    }

    public function getSendState() : string{
        return $this->send_state;
    }

    public function setSendState(string $sendState){
        $this->send_state = $sendState;
    }

    public function getSendCity() : string{
        return $this->send_city;
    }

    public function setSendCity(string $sendCity){
        $this->send_city = $sendCity;
    }

    public function getSendDistrict() : string{
        return $this->send_district;
    }

    public function setSendDistrict(string $sendDistrict){
        $this->send_district = $sendDistrict;
    }

    public function getSendTown() : string{
        return $this->send_town;
    }

    public function setSendTown(string $sendTown){
        $this->send_town = $sendTown;
    }

    public function getSendDivisionCode() : string{
        return $this->send_division_code;
    }

    public function setSendDivisionCode(string $sendDivisionCode){
        $this->send_division_code = $sendDivisionCode;
    }

    public function getBlackDeliveryCps() : string{
        return $this->black_delivery_cps;
    }

    public function setBlackDeliveryCps(string $blackDeliveryCps){
        $this->black_delivery_cps = $blackDeliveryCps;
    }

    public function getWhiteDeliveryCps() : string{
        return $this->white_delivery_cps;
    }

    public function setWhiteDeliveryCps(string $whiteDeliveryCps){
        $this->white_delivery_cps = $whiteDeliveryCps;
    }

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

    public function getPromiseCollectTime() : string{
        return $this->promise_collect_time;
    }

    public function setPromiseCollectTime(string $promiseCollectTime){
        $this->promise_collect_time = $promiseCollectTime;
    }


}

