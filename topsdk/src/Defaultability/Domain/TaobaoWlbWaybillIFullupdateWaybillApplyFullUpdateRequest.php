<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIFullupdateWaybillApplyFullUpdateRequest {

    /**
        收件人姓名
     **/
    public $consignee_name;

    /**
        收件人电话
     **/
    public $consignee_phone;

    /**
        快递服务商CODE
     **/
    public $cp_code;

    /**
        物流服务能力集合
     **/
    public $logistics_service_list;

    /**
        快递服务产品类型编码
     **/
    public $product_type;

    /**
        发件人姓名
     **/
    public $send_name;

    /**
        发件人联系方式
     **/
    public $send_phone;

    /**
        交易订单号（组合表示合并订单）
     **/
    public $trade_order_list;

    /**
        使用者ID
     **/
    public $real_user_id;

    /**
        包裹重量 单位为G(克)
     **/
    public $weight;

    /**
        收\发货地址
     **/
    public $consignee_address;

    /**
        订单渠道类型
     **/
    public $order_channels_type;

    /**
        包裹里面的商品名称
     **/
    public $package_items;

    /**
        包裹体积 单位为ML(毫升)或立方厘米
     **/
    public $volume;

    /**
        电子面单单号
     **/
    public $waybill_code;

    /**
        ERP 订单号或包裹号
     **/
    public $package_id;


    public function getConsigneeName() : string{
        return $this->consignee_name;
    }

    public function setConsigneeName(string $consigneeName){
        $this->consignee_name = $consigneeName;
    }

    public function getConsigneePhone() : string{
        return $this->consignee_phone;
    }

    public function setConsigneePhone(string $consigneePhone){
        $this->consignee_phone = $consigneePhone;
    }

    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getLogisticsServiceList() : array{
        return $this->logistics_service_list;
    }

    public function setLogisticsServiceList(array $logisticsServiceList){
        $this->logistics_service_list = $logisticsServiceList;
    }

    public function getProductType() : string{
        return $this->product_type;
    }

    public function setProductType(string $productType){
        $this->product_type = $productType;
    }

    public function getSendName() : string{
        return $this->send_name;
    }

    public function setSendName(string $sendName){
        $this->send_name = $sendName;
    }

    public function getSendPhone() : string{
        return $this->send_phone;
    }

    public function setSendPhone(string $sendPhone){
        $this->send_phone = $sendPhone;
    }

    public function getTradeOrderList() : array{
        return $this->trade_order_list;
    }

    public function setTradeOrderList(array $tradeOrderList){
        $this->trade_order_list = $tradeOrderList;
    }

    public function getRealUserId() : int{
        return $this->real_user_id;
    }

    public function setRealUserId(int $realUserId){
        $this->real_user_id = $realUserId;
    }

    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }

    public function getConsigneeAddress() : TaobaoWlbWaybillIFullupdateWaybillAddress{
        return $this->consignee_address;
    }

    public function setConsigneeAddress(TaobaoWlbWaybillIFullupdateWaybillAddress $consigneeAddress){
        $this->consignee_address = $consigneeAddress;
    }

    public function getOrderChannelsType() : string{
        return $this->order_channels_type;
    }

    public function setOrderChannelsType(string $orderChannelsType){
        $this->order_channels_type = $orderChannelsType;
    }

    public function getPackageItems() : array{
        return $this->package_items;
    }

    public function setPackageItems(array $packageItems){
        $this->package_items = $packageItems;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getPackageId() : string{
        return $this->package_id;
    }

    public function setPackageId(string $packageId){
        $this->package_id = $packageId;
    }


}

