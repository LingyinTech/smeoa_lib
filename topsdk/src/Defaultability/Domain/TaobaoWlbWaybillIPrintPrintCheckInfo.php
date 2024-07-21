<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIPrintPrintCheckInfo {

    /**
        收\发货地址
     **/
    public $consignee_address;

    /**
        收货网点编码
     **/
    public $consignee_branch_code;

    /**
        收货网点信息
     **/
    public $consignee_branch_name;

    /**
        收件人姓名
     **/
    public $consignee_name;

    /**
        consigneePhone
     **/
    public $consignee_phone;

    /**
        物流服务能力集合
     **/
    public $logistics_service_list;

    /**
        集包地、目的地中心代码。打 印时根据该 code 生成目的地 中心的条码，条码生成的算法 与对应的电子面单条码一致
     **/
    public $package_center_code;

    /**
        集包地、目的地中心名称
     **/
    public $package_center_name;

    /**
        打标设置字段，直接传给ali-lodop。不用管具体含义。
     **/
    public $print_config;

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
        收\发货地址
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
        拣货规则（大头笔信息）
     **/
    public $short_address;

    /**
        使用者ID
     **/
    public $real_user_id;

    /**
        包裹体积 单位为ML(毫升)或立方厘米
     **/
    public $volume;

    /**
        电子面单单号
     **/
    public $waybill_code;

    /**
        包裹重量 单位为G(克)
     **/
    public $weight;


    public function getConsigneeAddress() : TaobaoWlbWaybillIPrintWaybillAddress{
        return $this->consignee_address;
    }

    public function setConsigneeAddress(TaobaoWlbWaybillIPrintWaybillAddress $consigneeAddress){
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

    public function getPrintConfig() : string{
        return $this->print_config;
    }

    public function setPrintConfig(string $printConfig){
        $this->print_config = $printConfig;
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

    public function getShippingAddress() : TaobaoWlbWaybillIPrintWaybillAddress{
        return $this->shipping_address;
    }

    public function setShippingAddress(TaobaoWlbWaybillIPrintWaybillAddress $shippingAddress){
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

