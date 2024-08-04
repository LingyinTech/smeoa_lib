<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetStepPayDetail {

    /**
        分阶段支付单Id
     **/
    public $id;

    /**
        支付状态
     **/
    public $pay_status;

    /**
        支付顺序
     **/
    public $step_no;

    /**
        支付宝交易号
     **/
    public $step_channel_no;

    /**
        支付方式
     **/
    public $step_instrument_code;

    /**
        支付金额
     **/
    public $step_actual_pay_fee;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPayStatus() : int{
        return $this->pay_status;
    }

    public function setPayStatus(int $payStatus){
        $this->pay_status = $payStatus;
    }

    public function getStepNo() : int{
        return $this->step_no;
    }

    public function setStepNo(int $stepNo){
        $this->step_no = $stepNo;
    }

    public function getStepChannelNo() : string{
        return $this->step_channel_no;
    }

    public function setStepChannelNo(string $stepChannelNo){
        $this->step_channel_no = $stepChannelNo;
    }

    public function getStepInstrumentCode() : string{
        return $this->step_instrument_code;
    }

    public function setStepInstrumentCode(string $stepInstrumentCode){
        $this->step_instrument_code = $stepInstrumentCode;
    }

    public function getStepActualPayFee() : string{
        return $this->step_actual_pay_fee;
    }

    public function setStepActualPayFee(string $stepActualPayFee){
        $this->step_actual_pay_fee = $stepActualPayFee;
    }


}

