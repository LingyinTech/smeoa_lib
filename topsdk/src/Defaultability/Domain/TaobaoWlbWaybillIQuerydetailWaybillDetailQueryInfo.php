<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIQuerydetailWaybillDetailQueryInfo {

    /**
        交易订单列表
     **/
    public $trade_order_list;

    /**
        收货人地址
     **/
    public $consignee_address;

    /**
        包裹对应的派件（收件）物流服务商网点（分支机构）代码
     **/
    public $consignee_branch_code;

    /**
        包裹对应的派件（收件）物流服务商网点（分支机构）名称
     **/
    public $consignee_branch_name;

    /**
        收件人姓名
     **/
    public $consignee_name;

    /**
        收件人联系方式
     **/
    public $consignee_phone;

    /**
        物流商编码CODE
     **/
    public $cp_code;

    /**
        创建时间
     **/
    public $create_time;

    /**
        最后一次打印时间
     **/
    public $last_print_time;

    /**
        物流服务能力集合
     **/
    public $logistics_service_list;

    /**
        集包地、目的地中心代码。打印时根据该 code 生成目的地中心的条码，条码生成的算法与对应的电子面单条码一致
     **/
    public $package_center_code;

    /**
        集包地、目的地中心名称
     **/
    public $package_center_name;

    /**
        ERP订单号或包裹号
     **/
    public $package_id;

    /**
        包裹里面的商品类型
     **/
    public $package_items;

    /**
        揽收时间
     **/
    public $pickup_time;

    /**
        打印配置项
     **/
    public $print_config;

    /**
        打印次数
     **/
    public $print_count;

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
        发货地址
     **/
    public $shipping_address;

    /**
        发货网点编码
     **/
    public $shipping_branch_code;

    /**
        发货网点信息
     **/
    public $shipping_branch_name;

    /**
        大头笔信息
     **/
    public $short_address;

    /**
        签收时间
     **/
    public $sign_time;

    /**
        面单状态
     **/
    public $status;

    /**
        使用者ID
     **/
    public $real_user_id;

    /**
        包裹重量 单位为G(克)
     **/
    public $volume;

    /**
        电子面单信息
     **/
    public $waybill_code;

    /**
        包裹体积 单位为ML(毫升)或立方厘米
     **/
    public $weight;


    public function getTradeOrderList() : array{
        return $this->trade_order_list;
    }

    public function setTradeOrderList(array $tradeOrderList){
        $this->trade_order_list = $tradeOrderList;
    }

    public function getConsigneeAddress() : TaobaoWlbWaybillIQuerydetailWaybillAddress{
        return $this->consignee_address;
    }

    public function setConsigneeAddress(TaobaoWlbWaybillIQuerydetailWaybillAddress $consigneeAddress){
        $this->consignee_address = $consigneeAddress;
    }

    public function getConsigneeBranchCode() : string{
        return $this->consignee_branch_code;
    }

    public function setConsigneeBranchCode(string $consigneeBranchCode){
        $this->consignee_branch_code = $consigneeBranchCode;
    }

    public function getConsigneeBranchName() : string{
        return $this->consignee_branch_name;
    }

    public function setConsigneeBranchName(string $consigneeBranchName){
        $this->consignee_branch_name = $consigneeBranchName;
    }

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

    public function getCreateTime() : string{
        return $this->create_time;
    }

    public function setCreateTime(string $createTime){
        $this->create_time = $createTime;
    }

    public function getLastPrintTime() : string{
        return $this->last_print_time;
    }

    public function setLastPrintTime(string $lastPrintTime){
        $this->last_print_time = $lastPrintTime;
    }

    public function getLogisticsServiceList() : array{
        return $this->logistics_service_list;
    }

    public function setLogisticsServiceList(array $logisticsServiceList){
        $this->logistics_service_list = $logisticsServiceList;
    }

    public function getPackageCenterCode() : string{
        return $this->package_center_code;
    }

    public function setPackageCenterCode(string $packageCenterCode){
        $this->package_center_code = $packageCenterCode;
    }

    public function getPackageCenterName() : string{
        return $this->package_center_name;
    }

    public function setPackageCenterName(string $packageCenterName){
        $this->package_center_name = $packageCenterName;
    }

    public function getPackageId() : string{
        return $this->package_id;
    }

    public function setPackageId(string $packageId){
        $this->package_id = $packageId;
    }

    public function getPackageItems() : array{
        return $this->package_items;
    }

    public function setPackageItems(array $packageItems){
        $this->package_items = $packageItems;
    }

    public function getPickupTime() : string{
        return $this->pickup_time;
    }

    public function setPickupTime(string $pickupTime){
        $this->pickup_time = $pickupTime;
    }

    public function getPrintConfig() : string{
        return $this->print_config;
    }

    public function setPrintConfig(string $printConfig){
        $this->print_config = $printConfig;
    }

    public function getPrintCount() : int{
        return $this->print_count;
    }

    public function setPrintCount(int $printCount){
        $this->print_count = $printCount;
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

    public function getShippingAddress() : TaobaoWlbWaybillIQuerydetailWaybillAddress{
        return $this->shipping_address;
    }

    public function setShippingAddress(TaobaoWlbWaybillIQuerydetailWaybillAddress $shippingAddress){
        $this->shipping_address = $shippingAddress;
    }

    public function getShippingBranchCode() : string{
        return $this->shipping_branch_code;
    }

    public function setShippingBranchCode(string $shippingBranchCode){
        $this->shipping_branch_code = $shippingBranchCode;
    }

    public function getShippingBranchName() : string{
        return $this->shipping_branch_name;
    }

    public function setShippingBranchName(string $shippingBranchName){
        $this->shipping_branch_name = $shippingBranchName;
    }

    public function getShortAddress() : string{
        return $this->short_address;
    }

    public function setShortAddress(string $shortAddress){
        $this->short_address = $shortAddress;
    }

    public function getSignTime() : string{
        return $this->sign_time;
    }

    public function setSignTime(string $signTime){
        $this->sign_time = $signTime;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getRealUserId() : int{
        return $this->real_user_id;
    }

    public function setRealUserId(int $realUserId){
        $this->real_user_id = $realUserId;
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

    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }


}

