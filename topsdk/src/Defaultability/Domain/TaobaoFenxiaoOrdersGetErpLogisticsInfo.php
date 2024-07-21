<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFenxiaoOrdersGetErpLogisticsInfo {

    /**
        发货类型 CN=菜鸟发货,SC的商家仓发货
     **/
    public $consign_type;

    /**
        商品数字编号
     **/
    public $num_iid;

    /**
        商品的最小库存单位Sku的id
     **/
    public $sku_id;

    /**
        子订单类型:标示该子交易单来源交易，还是BMS增加的，枚举值(00=交易，10=BMS绑定)
     **/
    public $type;

    /**
        如是菜鸟仓，则将菜鸟仓的区域仓code进行填充，如是商家仓发货则填充SC
     **/
    public $store_code;

    /**
        应发数量
     **/
    public $need_consign_num;

    /**
        货品仓储code
     **/
    public $item_code;

    /**
        货品仓储id
     **/
    public $item_id;

    /**
        采购单子单号
     **/
    public $sub_order_id;

    /**
        采购单号
     **/
    public $order_id;

    /**
        组合商品ID
     **/
    public $combine_item_id;

    /**
        组合商品Code
     **/
    public $combine_item_code;

    /**
        组合货品比例
     **/
    public $item_ratio;

    /**
        货品条码
     **/
    public $bar_code;

    /**
        推荐配送公司编码
     **/
    public $delivery_cps;

    /**
        仓商家编码
     **/
    public $biz_store_code;

    /**
        推荐配送erp编码
     **/
    public $biz_delivery_code;

    /**
        仓配建议类型
     **/
    public $biz_sd_type;

    /**
        预计发货地址-最小行政地址编码
     **/
    public $send_division_code;

    /**
        预计发货地址-文案描述-国家
     **/
    public $send_country;

    /**
        预计发货地址-文案描述-省份
     **/
    public $send_state;

    /**
        预计发货地址-文案描述-城市
     **/
    public $send_city;

    /**
        预计发货地址-文案描述-地区
     **/
    public $send_district;

    /**
        预计发货地址-文案描述-街道/镇
     **/
    public $send_town;

    /**
        CP黑名单，逗号分隔
     **/
    public $black_delivery_cps;

    /**
        CP白名单，逗号分隔
     **/
    public $white_delivery_cps;


    public function getConsignType() : string{
        return $this->consign_type;
    }

    public function setConsignType(string $consignType){
        $this->consign_type = $consignType;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }

    public function getNeedConsignNum() : int{
        return $this->need_consign_num;
    }

    public function setNeedConsignNum(int $needConsignNum){
        $this->need_consign_num = $needConsignNum;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getSubOrderId() : int{
        return $this->sub_order_id;
    }

    public function setSubOrderId(int $subOrderId){
        $this->sub_order_id = $subOrderId;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
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

    public function getBizStoreCode() : string{
        return $this->biz_store_code;
    }

    public function setBizStoreCode(string $bizStoreCode){
        $this->biz_store_code = $bizStoreCode;
    }

    public function getBizDeliveryCode() : string{
        return $this->biz_delivery_code;
    }

    public function setBizDeliveryCode(string $bizDeliveryCode){
        $this->biz_delivery_code = $bizDeliveryCode;
    }

    public function getBizSdType() : string{
        return $this->biz_sd_type;
    }

    public function setBizSdType(string $bizSdType){
        $this->biz_sd_type = $bizSdType;
    }

    public function getSendDivisionCode() : string{
        return $this->send_division_code;
    }

    public function setSendDivisionCode(string $sendDivisionCode){
        $this->send_division_code = $sendDivisionCode;
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


}

