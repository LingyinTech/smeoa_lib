<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIGetWaybillApplyNewInfo {

    /**
        包裹对应的派件（收件）物流服务商网点（分支机构）代码
     **/
    public $consignee_branch_code;

    /**
        包裹对应的派件（收件）物流服务商网点（分支机构）名称
     **/
    public $consignee_branch_name;

    /**
        集包地代码
     **/
    public $package_center_code;

    /**
        集包地名称
     **/
    public $package_center_name;

    /**
        打印配置项，传给ali-print组件
     **/
    public $print_config;

    /**
        面单号对应的物流服务商网点（分支机构）代码
     **/
    public $shipping_branch_code;

    /**
        面单号对于的物流服务商网点（分支机构）名称
     **/
    public $shipping_branch_name;

    /**
        根据收货地址返回大头笔信息
     **/
    public $short_address;

    /**
        面单对应的订单列
     **/
    public $trade_order_info;

    /**
        返回的面单号
     **/
    public $waybill_code;


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

    public function getTradeOrderInfo() : TaobaoWlbWaybillIGetTradeOrderInfo{
        return $this->trade_order_info;
    }

    public function setTradeOrderInfo(TaobaoWlbWaybillIGetTradeOrderInfo $tradeOrderInfo){
        $this->trade_order_info = $tradeOrderInfo;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }


}

