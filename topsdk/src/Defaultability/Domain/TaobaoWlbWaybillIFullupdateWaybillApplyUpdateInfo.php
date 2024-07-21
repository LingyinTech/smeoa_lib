<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIFullupdateWaybillApplyUpdateInfo {

    /**
        挑拣规则（大头笔信息）
     **/
    public $short_address;

    /**
        收货网点编码
     **/
    public $consignee_branch_name;

    /**
        收货网点信息
     **/
    public $consignee_branch_code;

    /**
        --
     **/
    public $trade_order_info;

    /**
        --
     **/
    public $waybill_code;

    /**
        集包地、目的地中心名称
     **/
    public $package_center_name;

    /**
        集包地、目的地中心代码。打印时根据该 code 生成目的地中心的条码，条码生成的算法与对应的电子面单条码一致
     **/
    public $package_center_code;


    public function getShortAddress() : string{
        return $this->short_address;
    }

    public function setShortAddress(string $shortAddress){
        $this->short_address = $shortAddress;
    }

    public function getConsigneeBranchName() : string{
        return $this->consignee_branch_name;
    }

    public function setConsigneeBranchName(string $consigneeBranchName){
        $this->consignee_branch_name = $consigneeBranchName;
    }

    public function getConsigneeBranchCode() : string{
        return $this->consignee_branch_code;
    }

    public function setConsigneeBranchCode(string $consigneeBranchCode){
        $this->consignee_branch_code = $consigneeBranchCode;
    }

    public function getTradeOrderInfo() : TaobaoWlbWaybillIFullupdateTradeOrderInfo{
        return $this->trade_order_info;
    }

    public function setTradeOrderInfo(TaobaoWlbWaybillIFullupdateTradeOrderInfo $tradeOrderInfo){
        $this->trade_order_info = $tradeOrderInfo;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getPackageCenterName() : string{
        return $this->package_center_name;
    }

    public function setPackageCenterName(string $packageCenterName){
        $this->package_center_name = $packageCenterName;
    }

    public function getPackageCenterCode() : string{
        return $this->package_center_code;
    }

    public function setPackageCenterCode(string $packageCenterCode){
        $this->package_center_code = $packageCenterCode;
    }


}

