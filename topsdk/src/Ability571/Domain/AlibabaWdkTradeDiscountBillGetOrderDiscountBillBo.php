<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkTradeDiscountBillGetOrderDiscountBillBo {

    /**
        活动ID
     **/
    public $activity_id;

    /**
        活动名称
     **/
    public $activity_name;

    /**
        活动类型 1：活动 2：券
     **/
    public $activity_type;

    /**
        购买数量
     **/
    public $buy_quantity;

    /**
        优惠金额
     **/
    public $discount_fee;

    /**
        优惠件数
     **/
    public $discount_quantity;

    /**
        补差类型
     **/
    public $discount_type;

    /**
        主键id
     **/
    public $id;

    /**
        主订单号
     **/
    public $main_order_id;

    /**
        商家编码
     **/
    public $merchant_code;

    /**
        商家优惠补差金额
     **/
    public $merchant_discount_fee;

    /**
        交易状态
     **/
    public $order_status;

    /**
        外部订单号
     **/
    public $out_order_id;

    /**
        商品编码
     **/
    public $sku_code;

    /**
        商品名称
     **/
    public $sku_name;

    /**
        经营店id
     **/
    public $store_id;

    /**
        子单号
     **/
    public $sub_order_id;

    /**
        淘鲜达优惠金额
     **/
    public $txd_discount_fee;

    /**
        业务时间
     **/
    public $biz_time;

    /**
        订单渠道
     **/
    public $order_channel;

    /**
        出资方 1表示平台出资  0表示品牌商出资
     **/
    public $investor;


    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }

    public function getActivityName() : string{
        return $this->activity_name;
    }

    public function setActivityName(string $activityName){
        $this->activity_name = $activityName;
    }

    public function getActivityType() : int{
        return $this->activity_type;
    }

    public function setActivityType(int $activityType){
        $this->activity_type = $activityType;
    }

    public function getBuyQuantity() : int{
        return $this->buy_quantity;
    }

    public function setBuyQuantity(int $buyQuantity){
        $this->buy_quantity = $buyQuantity;
    }

    public function getDiscountFee() : int{
        return $this->discount_fee;
    }

    public function setDiscountFee(int $discountFee){
        $this->discount_fee = $discountFee;
    }

    public function getDiscountQuantity() : int{
        return $this->discount_quantity;
    }

    public function setDiscountQuantity(int $discountQuantity){
        $this->discount_quantity = $discountQuantity;
    }

    public function getDiscountType() : int{
        return $this->discount_type;
    }

    public function setDiscountType(int $discountType){
        $this->discount_type = $discountType;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getMainOrderId() : string{
        return $this->main_order_id;
    }

    public function setMainOrderId(string $mainOrderId){
        $this->main_order_id = $mainOrderId;
    }

    public function getMerchantCode() : string{
        return $this->merchant_code;
    }

    public function setMerchantCode(string $merchantCode){
        $this->merchant_code = $merchantCode;
    }

    public function getMerchantDiscountFee() : int{
        return $this->merchant_discount_fee;
    }

    public function setMerchantDiscountFee(int $merchantDiscountFee){
        $this->merchant_discount_fee = $merchantDiscountFee;
    }

    public function getOrderStatus() : int{
        return $this->order_status;
    }

    public function setOrderStatus(int $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getOutOrderId() : string{
        return $this->out_order_id;
    }

    public function setOutOrderId(string $outOrderId){
        $this->out_order_id = $outOrderId;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

    public function getStoreId() : string{
        return $this->store_id;
    }

    public function setStoreId(string $storeId){
        $this->store_id = $storeId;
    }

    public function getSubOrderId() : string{
        return $this->sub_order_id;
    }

    public function setSubOrderId(string $subOrderId){
        $this->sub_order_id = $subOrderId;
    }

    public function getTxdDiscountFee() : int{
        return $this->txd_discount_fee;
    }

    public function setTxdDiscountFee(int $txdDiscountFee){
        $this->txd_discount_fee = $txdDiscountFee;
    }

    public function getBizTime() : string{
        return $this->biz_time;
    }

    public function setBizTime(string $bizTime){
        $this->biz_time = $bizTime;
    }

    public function getOrderChannel() : int{
        return $this->order_channel;
    }

    public function setOrderChannel(int $orderChannel){
        $this->order_channel = $orderChannel;
    }

    public function getInvestor() : int{
        return $this->investor;
    }

    public function setInvestor(int $investor){
        $this->investor = $investor;
    }


}

