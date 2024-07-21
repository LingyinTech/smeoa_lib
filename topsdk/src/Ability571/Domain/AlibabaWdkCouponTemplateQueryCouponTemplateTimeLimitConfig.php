<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryCouponTemplateTimeLimitConfig {

    /**
        优惠券结束时间
     **/
    public $end_valid_time;

    /**
        优惠券开始时间
     **/
    public $start_valid_time;

    /**
        优惠券有效时间类型
     **/
    public $valid_time_type;

    /**
        优惠券有效时长
     **/
    public $validity_period;

    /**
        优惠券有效开始时长，单位为秒（优惠券领取后X天开始有效）
     **/
    public $validity_start_interval;

    /**
        优惠券有效结束时长，单位为秒（优惠券领取后X-Y天有效的Y）
     **/
    public $validity_end_interval;


    public function getEndValidTime() : string{
        return $this->end_valid_time;
    }

    public function setEndValidTime(string $endValidTime){
        $this->end_valid_time = $endValidTime;
    }

    public function getStartValidTime() : string{
        return $this->start_valid_time;
    }

    public function setStartValidTime(string $startValidTime){
        $this->start_valid_time = $startValidTime;
    }

    public function getValidTimeType() : int{
        return $this->valid_time_type;
    }

    public function setValidTimeType(int $validTimeType){
        $this->valid_time_type = $validTimeType;
    }

    public function getValidityPeriod() : int{
        return $this->validity_period;
    }

    public function setValidityPeriod(int $validityPeriod){
        $this->validity_period = $validityPeriod;
    }

    public function getValidityStartInterval() : int{
        return $this->validity_start_interval;
    }

    public function setValidityStartInterval(int $validityStartInterval){
        $this->validity_start_interval = $validityStartInterval;
    }

    public function getValidityEndInterval() : int{
        return $this->validity_end_interval;
    }

    public function setValidityEndInterval(int $validityEndInterval){
        $this->validity_end_interval = $validityEndInterval;
    }


}

