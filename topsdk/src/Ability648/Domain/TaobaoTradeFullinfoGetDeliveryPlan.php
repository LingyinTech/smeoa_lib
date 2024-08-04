<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetDeliveryPlan {

    /**
        计划id
     **/
    public $plan_id;

    /**
        交易订单号
     **/
    public $order_id;

    /**
        发货期数
     **/
    public $curr_phase;

    /**
        外部物流单号
     **/
    public $out_logistics_id;

    /**
        备货期开始时间
     **/
    public $prepare_time_begin;

    /**
        计划发货时间
     **/
    public $ship_time_begin;

    /**
        实际发货时间
     **/
    public $actual_ship_time;

    /**
        发货商品数量
     **/
    public $goods_num;

    /**
        计划状态
     **/
    public $plan_status;

    /**
        计划退款状态
     **/
    public $plan_refund_status;

    /**
        收货人姓名
     **/
    public $receiver_name;

    /**
        收货人手机号
     **/
    public $receiver_mobile;

    /**
        收货人电话
     **/
    public $receiver_phone;

    /**
        收货详细地址
     **/
    public $receiver_address;

    /**
        aid
     **/
    public $oaid;

    /**
        隐私号
     **/
    public $privacy_num;

    /**
        隐私号过期时间
     **/
    public $privacy_expire_time;

    /**
        收货地址
     **/
    public $receiver_town;

    /**
        收货地址
     **/
    public $receiver_district;

    /**
        收货地址
     **/
    public $receiver_city;

    /**
        收货地址
     **/
    public $receiver_state;

    /**
        收货地址
     **/
    public $receiver_country;


    public function getPlanId() : int{
        return $this->plan_id;
    }

    public function setPlanId(int $planId){
        $this->plan_id = $planId;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getCurrPhase() : int{
        return $this->curr_phase;
    }

    public function setCurrPhase(int $currPhase){
        $this->curr_phase = $currPhase;
    }

    public function getOutLogisticsId() : string{
        return $this->out_logistics_id;
    }

    public function setOutLogisticsId(string $outLogisticsId){
        $this->out_logistics_id = $outLogisticsId;
    }

    public function getPrepareTimeBegin() : string{
        return $this->prepare_time_begin;
    }

    public function setPrepareTimeBegin(string $prepareTimeBegin){
        $this->prepare_time_begin = $prepareTimeBegin;
    }

    public function getShipTimeBegin() : string{
        return $this->ship_time_begin;
    }

    public function setShipTimeBegin(string $shipTimeBegin){
        $this->ship_time_begin = $shipTimeBegin;
    }

    public function getActualShipTime() : string{
        return $this->actual_ship_time;
    }

    public function setActualShipTime(string $actualShipTime){
        $this->actual_ship_time = $actualShipTime;
    }

    public function getGoodsNum() : int{
        return $this->goods_num;
    }

    public function setGoodsNum(int $goodsNum){
        $this->goods_num = $goodsNum;
    }

    public function getPlanStatus() : int{
        return $this->plan_status;
    }

    public function setPlanStatus(int $planStatus){
        $this->plan_status = $planStatus;
    }

    public function getPlanRefundStatus() : int{
        return $this->plan_refund_status;
    }

    public function setPlanRefundStatus(int $planRefundStatus){
        $this->plan_refund_status = $planRefundStatus;
    }

    public function getReceiverName() : string{
        return $this->receiver_name;
    }

    public function setReceiverName(string $receiverName){
        $this->receiver_name = $receiverName;
    }

    public function getReceiverMobile() : string{
        return $this->receiver_mobile;
    }

    public function setReceiverMobile(string $receiverMobile){
        $this->receiver_mobile = $receiverMobile;
    }

    public function getReceiverPhone() : string{
        return $this->receiver_phone;
    }

    public function setReceiverPhone(string $receiverPhone){
        $this->receiver_phone = $receiverPhone;
    }

    public function getReceiverAddress() : string{
        return $this->receiver_address;
    }

    public function setReceiverAddress(string $receiverAddress){
        $this->receiver_address = $receiverAddress;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }

    public function getPrivacyNum() : string{
        return $this->privacy_num;
    }

    public function setPrivacyNum(string $privacyNum){
        $this->privacy_num = $privacyNum;
    }

    public function getPrivacyExpireTime() : string{
        return $this->privacy_expire_time;
    }

    public function setPrivacyExpireTime(string $privacyExpireTime){
        $this->privacy_expire_time = $privacyExpireTime;
    }

    public function getReceiverTown() : string{
        return $this->receiver_town;
    }

    public function setReceiverTown(string $receiverTown){
        $this->receiver_town = $receiverTown;
    }

    public function getReceiverDistrict() : string{
        return $this->receiver_district;
    }

    public function setReceiverDistrict(string $receiverDistrict){
        $this->receiver_district = $receiverDistrict;
    }

    public function getReceiverCity() : string{
        return $this->receiver_city;
    }

    public function setReceiverCity(string $receiverCity){
        $this->receiver_city = $receiverCity;
    }

    public function getReceiverState() : string{
        return $this->receiver_state;
    }

    public function setReceiverState(string $receiverState){
        $this->receiver_state = $receiverState;
    }

    public function getReceiverCountry() : string{
        return $this->receiver_country;
    }

    public function setReceiverCountry(string $receiverCountry){
        $this->receiver_country = $receiverCountry;
    }


}

