<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingCouponCreateactivityLimitInfo {

    /**
        活动每日总限领
     **/
    public $daily_limit_cnt;

    /**
        每人每日限领
     **/
    public $user_daily_limit_cnt;

    /**
        每人活动期间总限领
     **/
    public $user_limit_cnt;

    /**
        必须指定且值为正数，活动期间总限领
     **/
    public $total_limit_cnt;


    public function getDailyLimitCnt() : int{
        return $this->daily_limit_cnt;
    }

    public function setDailyLimitCnt(int $dailyLimitCnt){
        $this->daily_limit_cnt = $dailyLimitCnt;
    }

    public function getUserDailyLimitCnt() : int{
        return $this->user_daily_limit_cnt;
    }

    public function setUserDailyLimitCnt(int $userDailyLimitCnt){
        $this->user_daily_limit_cnt = $userDailyLimitCnt;
    }

    public function getUserLimitCnt() : int{
        return $this->user_limit_cnt;
    }

    public function setUserLimitCnt(int $userLimitCnt){
        $this->user_limit_cnt = $userLimitCnt;
    }

    public function getTotalLimitCnt() : int{
        return $this->total_limit_cnt;
    }

    public function setTotalLimitCnt(int $totalLimitCnt){
        $this->total_limit_cnt = $totalLimitCnt;
    }


}

