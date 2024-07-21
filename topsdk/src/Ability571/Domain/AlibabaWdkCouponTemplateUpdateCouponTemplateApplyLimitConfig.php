<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateUpdateCouponTemplateApplyLimitConfig {

    /**
        优惠券最后能领取时间(超过这个时间，优惠券不能领取)
     **/
    public $apply_end_time;

    /**
        优惠券每日限领数（-1表示不限制）
     **/
    public $coupon_daily_lmt;

    /**
        优惠券总数（-1表示不限制）
     **/
    public $coupon_total_lmt;

    /**
        每人每日限领（-1表示不限制）
     **/
    public $personal_daily_lmt;

    /**
        个人总领取限制数量（-1表示不限制）
     **/
    public $personal_lmt;

    /**
        优惠券最早能领取时间(在这时间之前，优惠券不能领取)
     **/
    public $apply_start_time;


    public function getApplyEndTime() : string{
        return $this->apply_end_time;
    }

    public function setApplyEndTime(string $applyEndTime){
        $this->apply_end_time = $applyEndTime;
    }

    public function getCouponDailyLmt() : int{
        return $this->coupon_daily_lmt;
    }

    public function setCouponDailyLmt(int $couponDailyLmt){
        $this->coupon_daily_lmt = $couponDailyLmt;
    }

    public function getCouponTotalLmt() : int{
        return $this->coupon_total_lmt;
    }

    public function setCouponTotalLmt(int $couponTotalLmt){
        $this->coupon_total_lmt = $couponTotalLmt;
    }

    public function getPersonalDailyLmt() : int{
        return $this->personal_daily_lmt;
    }

    public function setPersonalDailyLmt(int $personalDailyLmt){
        $this->personal_daily_lmt = $personalDailyLmt;
    }

    public function getPersonalLmt() : int{
        return $this->personal_lmt;
    }

    public function setPersonalLmt(int $personalLmt){
        $this->personal_lmt = $personalLmt;
    }

    public function getApplyStartTime() : string{
        return $this->apply_start_time;
    }

    public function setApplyStartTime(string $applyStartTime){
        $this->apply_start_time = $applyStartTime;
    }


}

