<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetWaybillCloudPrintApplyNewRequest {

    /**
        <a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.8cf9Nj&treeId=17&articleId=105085&docType=1#1">物流公司Code</a>，长度小于20
     **/
    public $cp_code;

    /**
        目前仅顺丰支持此字段，传入快递产品编码
     **/
    public $product_code;

    /**
        发货人信息
     **/
    public $sender;

    /**
        请求面单信息，数量限制为10
     **/
    public $trade_order_info_dtos;

    /**
        仓code， 仓库WMS系统对接落地配业务，其它场景请不要使用
     **/
    public $store_code;

    /**
        配送资源code， 仓库WMS系统对接落地配业务，其它场景请不要使用
     **/
    public $resource_code;

    /**
        是否使用智分宝预分拣， 仓库WMS系统对接落地配业务，其它场景请不要使用
     **/
    public $dms_sorting;

    /**
        订单上是否带3PLtiming属性, 该属性需要严格与订单上属性保持一致，如果不确定，请使用默认false。
     **/
    public $three_pl_timing;

    /**
        设定取号返回的云打印报文是否加密
     **/
    public $need_encrypt;

    /**
        快递公司支持一票多件，快运公司子母件请勿使用该参数
     **/
    public $multi_packages_shipment;

    /**
        品牌编码
     **/
    public $brand_code;

    /**
        扩展参数
     **/
    public $extra_info;

    /**
        月结卡号
     **/
    public $customer_code;

    /**
        是否预约上门
     **/
    public $call_door_pick_up;

    /**
        预约上门收件时间
     **/
    public $door_pick_up_time;

    /**
        预约上门截止时间
     **/
    public $door_pick_up_end_time;

    /**
        寄件网点编码
     **/
    public $shipping_branch_code;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getSender() : CainiaoWaybillIiGetUserInfoDto{
        return $this->sender;
    }

    public function setSender(CainiaoWaybillIiGetUserInfoDto $sender){
        $this->sender = $sender;
    }

    public function getTradeOrderInfoDtos() : array{
        return $this->trade_order_info_dtos;
    }

    public function setTradeOrderInfoDtos(array $tradeOrderInfoDtos){
        $this->trade_order_info_dtos = $tradeOrderInfoDtos;
    }

    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }

    public function getResourceCode() : string{
        return $this->resource_code;
    }

    public function setResourceCode(string $resourceCode){
        $this->resource_code = $resourceCode;
    }

    public function getDmsSorting() : bool{
        return $this->dms_sorting;
    }

    public function setDmsSorting(bool $dmsSorting){
        $this->dms_sorting = $dmsSorting;
    }

    public function getThreePlTiming() : bool{
        return $this->three_pl_timing;
    }

    public function setThreePlTiming(bool $threePlTiming){
        $this->three_pl_timing = $threePlTiming;
    }

    public function getNeedEncrypt() : bool{
        return $this->need_encrypt;
    }

    public function setNeedEncrypt(bool $needEncrypt){
        $this->need_encrypt = $needEncrypt;
    }

    public function getMultiPackagesShipment() : bool{
        return $this->multi_packages_shipment;
    }

    public function setMultiPackagesShipment(bool $multiPackagesShipment){
        $this->multi_packages_shipment = $multiPackagesShipment;
    }

    public function getBrandCode() : string{
        return $this->brand_code;
    }

    public function setBrandCode(string $brandCode){
        $this->brand_code = $brandCode;
    }

    public function getExtraInfo() : string{
        return $this->extra_info;
    }

    public function setExtraInfo(string $extraInfo){
        $this->extra_info = $extraInfo;
    }

    public function getCustomerCode() : string{
        return $this->customer_code;
    }

    public function setCustomerCode(string $customerCode){
        $this->customer_code = $customerCode;
    }

    public function getCallDoorPickUp() : bool{
        return $this->call_door_pick_up;
    }

    public function setCallDoorPickUp(bool $callDoorPickUp){
        $this->call_door_pick_up = $callDoorPickUp;
    }

    public function getDoorPickUpTime() : string{
        return $this->door_pick_up_time;
    }

    public function setDoorPickUpTime(string $doorPickUpTime){
        $this->door_pick_up_time = $doorPickUpTime;
    }

    public function getDoorPickUpEndTime() : string{
        return $this->door_pick_up_end_time;
    }

    public function setDoorPickUpEndTime(string $doorPickUpEndTime){
        $this->door_pick_up_end_time = $doorPickUpEndTime;
    }

    public function getShippingBranchCode() : string{
        return $this->shipping_branch_code;
    }

    public function setShippingBranchCode(string $shippingBranchCode){
        $this->shipping_branch_code = $shippingBranchCode;
    }


}

