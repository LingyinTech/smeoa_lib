<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItemdiscountAdditemLimitInfo {

    /**
        活动每日总限购
     **/
    public $daily_limit_cnt;

    /**
        每人每日限购
     **/
    public $user_daily_limit_cnt;

    /**
        每人活动期间总限购
     **/
    public $user_limit_cnt;

    /**
        活动期间总限购
     **/
    public $total_limit_cnt;

    /**
        活动每日总限购（非标小数）
     **/
    public $daily_limit_cnt_double;

    /**
        每人每日限购（非标小数）
     **/
    public $user_daily_limit_cnt_double;

    /**
        每人活动期间总限购（非标小数）
     **/
    public $user_limit_cnt_double;

    /**
        活动期间总限购（非标小数）
     **/
    public $total_limit_cnt_double;


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

    public function getDailyLimitCntDouble() : string{
        return $this->daily_limit_cnt_double;
    }

    public function setDailyLimitCntDouble(string $dailyLimitCntDouble){
        $this->daily_limit_cnt_double = $dailyLimitCntDouble;
    }

    public function getUserDailyLimitCntDouble() : string{
        return $this->user_daily_limit_cnt_double;
    }

    public function setUserDailyLimitCntDouble(string $userDailyLimitCntDouble){
        $this->user_daily_limit_cnt_double = $userDailyLimitCntDouble;
    }

    public function getUserLimitCntDouble() : string{
        return $this->user_limit_cnt_double;
    }

    public function setUserLimitCntDouble(string $userLimitCntDouble){
        $this->user_limit_cnt_double = $userLimitCntDouble;
    }

    public function getTotalLimitCntDouble() : string{
        return $this->total_limit_cnt_double;
    }

    public function setTotalLimitCntDouble(string $totalLimitCntDouble){
        $this->total_limit_cnt_double = $totalLimitCntDouble;
    }


}

