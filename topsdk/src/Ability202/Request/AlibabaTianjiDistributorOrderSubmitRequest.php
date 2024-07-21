<?php
namespace Topsdk\Topapi\Ability202\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaTianjiDistributorOrderSubmitRequest {

    /**
        商品编码，如手机串号
     **/
    private $itemSerialNo;

    /**
        淘宝交易订单号
     **/
    private $orderNo;

    /**
        供应商产品编码，如SIM卡号
     **/
    private $productSerialNo;


    public function getItemSerialNo() : string{
        return $this->itemSerialNo;
    }

    public function setItemSerialNo(string $itemSerialNo){
        $this->itemSerialNo = $itemSerialNo;
    }

    public function getOrderNo() : string{
        return $this->orderNo;
    }

    public function setOrderNo(string $orderNo){
        $this->orderNo = $orderNo;
    }

    public function getProductSerialNo() : string{
        return $this->productSerialNo;
    }

    public function setProductSerialNo(string $productSerialNo){
        $this->productSerialNo = $productSerialNo;
    }


    public function getApiName() : string {
        return "alibaba.tianji.distributor.order.submit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemSerialNo)) {
            $requestParam["item_serial_no"] = TopUtil::convertBasic($this->itemSerialNo);
        }

        if (!TopUtil::checkEmpty($this->orderNo)) {
            $requestParam["order_no"] = TopUtil::convertBasic($this->orderNo);
        }

        if (!TopUtil::checkEmpty($this->productSerialNo)) {
            $requestParam["product_serial_no"] = TopUtil::convertBasic($this->productSerialNo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

