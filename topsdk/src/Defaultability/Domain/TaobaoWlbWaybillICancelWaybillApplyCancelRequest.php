<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillICancelWaybillApplyCancelRequest {

    /**
        CP快递公司编码
     **/
    public $cp_code;

    /**
        交易订单列表
     **/
    public $trade_order_list;

    /**
        面单使用者编号
     **/
    public $real_user_id;

    /**
        电子面单号码
     **/
    public $waybill_code;

    /**
        ERP订单号或包裹号
     **/
    public $package_id;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
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

