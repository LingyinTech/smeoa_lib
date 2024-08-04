<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradesSoldGetLogisticsAgreement {

    /**
        服务承诺/异常文案
     **/
    public $logistics_service_msg;

    /**
        物流服务业务身份
     **/
    public $asdp_biz_type;

    /**
        物流信息，多个值时用英文逗号隔开
     **/
    public $asdp_ads;

    /**
        计划送达时间
     **/
    public $sign_time;

    /**
        承诺/最晚送达时间
     **/
    public $promise_sign_time;


    public function getLogisticsServiceMsg() : string{
        return $this->logistics_service_msg;
    }

    public function setLogisticsServiceMsg(string $logisticsServiceMsg){
        $this->logistics_service_msg = $logisticsServiceMsg;
    }

    public function getAsdpBizType() : string{
        return $this->asdp_biz_type;
    }

    public function setAsdpBizType(string $asdpBizType){
        $this->asdp_biz_type = $asdpBizType;
    }

    public function getAsdpAds() : string{
        return $this->asdp_ads;
    }

    public function setAsdpAds(string $asdpAds){
        $this->asdp_ads = $asdpAds;
    }

    public function getSignTime() : string{
        return $this->sign_time;
    }

    public function setSignTime(string $signTime){
        $this->sign_time = $signTime;
    }

    public function getPromiseSignTime() : string{
        return $this->promise_sign_time;
    }

    public function setPromiseSignTime(string $promiseSignTime){
        $this->promise_sign_time = $promiseSignTime;
    }


}

