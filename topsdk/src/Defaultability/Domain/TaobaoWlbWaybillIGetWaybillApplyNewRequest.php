<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIGetWaybillApplyNewRequest {

    /**
        物流服务商编码
     **/
    public $cp_code;

    /**
        收\发货地址
     **/
    public $shipping_address;

    /**
        订单数据
     **/
    public $trade_order_info_cols;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getShippingAddress() : TaobaoWlbWaybillIGetWaybillAddress{
        return $this->shipping_address;
    }

    public function setShippingAddress(TaobaoWlbWaybillIGetWaybillAddress $shippingAddress){
        $this->shipping_address = $shippingAddress;
    }

    public function getTradeOrderInfoCols() : array{
        return $this->trade_order_info_cols;
    }

    public function setTradeOrderInfoCols(array $tradeOrderInfoCols){
        $this->trade_order_info_cols = $tradeOrderInfoCols;
    }


}

