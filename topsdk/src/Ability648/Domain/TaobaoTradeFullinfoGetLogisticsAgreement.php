<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetLogisticsAgreement {

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

    /**
        ERP应推单时间(主单)
     **/
    public $push_time;

    /**
        1：不支持子单部分发货
     **/
    public $no_detail_part_consign;

    /**
        1：代表该订单是预售下沉订单类型为前置表达
     **/
    public $sink_type;


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

    public function getPushTime() : string{
        return $this->push_time;
    }

    public function setPushTime(string $pushTime){
        $this->push_time = $pushTime;
    }

    public function getNoDetailPartConsign() : string{
        return $this->no_detail_part_consign;
    }

    public function setNoDetailPartConsign(string $noDetailPartConsign){
        $this->no_detail_part_consign = $noDetailPartConsign;
    }

    public function getSinkType() : string{
        return $this->sink_type;
    }

    public function setSinkType(string $sinkType){
        $this->sink_type = $sinkType;
    }


}

