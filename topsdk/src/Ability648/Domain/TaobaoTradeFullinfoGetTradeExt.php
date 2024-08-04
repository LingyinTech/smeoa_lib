<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetTradeExt {

    /**
        enable前扩展标识位
     **/
    public $before_enable_flag;

    /**
        关闭订单前扩展标识位
     **/
    public $before_close_flag;

    /**
        付款前扩展标识位
     **/
    public $before_pay_flag;

    /**
        发货前扩展标识位
     **/
    public $before_ship_flag;

    /**
        确认收货前扩展标识位
     **/
    public $before_confirm_flag;

    /**
        评价前扩展标识位
     **/
    public $before_rate_flag;

    /**
        退款前扩展标识位
     **/
    public $before_refund_flag;

    /**
        修改前扩展标识位
     **/
    public $before_modify_flag;

    /**
        第三方状态，第三方自由定义
     **/
    public $third_party_status;

    /**
        第三方个性化数据
     **/
    public $extra_data;

    /**
        attributes标记
     **/
    public $ext_attributes;


    public function getBeforeEnableFlag() : int{
        return $this->before_enable_flag;
    }

    public function setBeforeEnableFlag(int $beforeEnableFlag){
        $this->before_enable_flag = $beforeEnableFlag;
    }

    public function getBeforeCloseFlag() : int{
        return $this->before_close_flag;
    }

    public function setBeforeCloseFlag(int $beforeCloseFlag){
        $this->before_close_flag = $beforeCloseFlag;
    }

    public function getBeforePayFlag() : int{
        return $this->before_pay_flag;
    }

    public function setBeforePayFlag(int $beforePayFlag){
        $this->before_pay_flag = $beforePayFlag;
    }

    public function getBeforeShipFlag() : int{
        return $this->before_ship_flag;
    }

    public function setBeforeShipFlag(int $beforeShipFlag){
        $this->before_ship_flag = $beforeShipFlag;
    }

    public function getBeforeConfirmFlag() : int{
        return $this->before_confirm_flag;
    }

    public function setBeforeConfirmFlag(int $beforeConfirmFlag){
        $this->before_confirm_flag = $beforeConfirmFlag;
    }

    public function getBeforeRateFlag() : int{
        return $this->before_rate_flag;
    }

    public function setBeforeRateFlag(int $beforeRateFlag){
        $this->before_rate_flag = $beforeRateFlag;
    }

    public function getBeforeRefundFlag() : int{
        return $this->before_refund_flag;
    }

    public function setBeforeRefundFlag(int $beforeRefundFlag){
        $this->before_refund_flag = $beforeRefundFlag;
    }

    public function getBeforeModifyFlag() : int{
        return $this->before_modify_flag;
    }

    public function setBeforeModifyFlag(int $beforeModifyFlag){
        $this->before_modify_flag = $beforeModifyFlag;
    }

    public function getThirdPartyStatus() : int{
        return $this->third_party_status;
    }

    public function setThirdPartyStatus(int $thirdPartyStatus){
        $this->third_party_status = $thirdPartyStatus;
    }

    public function getExtraData() : string{
        return $this->extra_data;
    }

    public function setExtraData(string $extraData){
        $this->extra_data = $extraData;
    }

    public function getExtAttributes() : string{
        return $this->ext_attributes;
    }

    public function setExtAttributes(string $extAttributes){
        $this->ext_attributes = $extAttributes;
    }


}

