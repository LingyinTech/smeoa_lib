<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItembuygiftQueryitemsLimitInfo {

    /**
        活动期间总限购
     **/
    public $total_limit_cnt;

    /**
        每人活动期间总限购
     **/
    public $user_limit_cnt;

    /**
        每人每日限购
     **/
    public $user_daily_limit_cnt;


    public function getTotalLimitCnt() : int{
        return $this->total_limit_cnt;
    }

    public function setTotalLimitCnt(int $totalLimitCnt){
        $this->total_limit_cnt = $totalLimitCnt;
    }

    public function getUserLimitCnt() : int{
        return $this->user_limit_cnt;
    }

    public function setUserLimitCnt(int $userLimitCnt){
        $this->user_limit_cnt = $userLimitCnt;
    }

    public function getUserDailyLimitCnt() : int{
        return $this->user_daily_limit_cnt;
    }

    public function setUserDailyLimitCnt(int $userDailyLimitCnt){
        $this->user_daily_limit_cnt = $userDailyLimitCnt;
    }


}

