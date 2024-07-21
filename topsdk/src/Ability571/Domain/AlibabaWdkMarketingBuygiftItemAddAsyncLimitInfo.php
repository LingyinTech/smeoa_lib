<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingBuygiftItemAddAsyncLimitInfo {

    /**
        用户总限购
     **/
    public $user_limit_cnt;

    /**
        用户每日限购
     **/
    public $user_daily_limit_cnt;

    /**
        每日总限购
     **/
    public $daily_limit_cnt;

    /**
        总限购
     **/
    public $total_limit_cnt;


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

    public function getDailyLimitCnt() : int{
        return $this->daily_limit_cnt;
    }

    public function setDailyLimitCnt(int $dailyLimitCnt){
        $this->daily_limit_cnt = $dailyLimitCnt;
    }

    public function getTotalLimitCnt() : int{
        return $this->total_limit_cnt;
    }

    public function setTotalLimitCnt(int $totalLimitCnt){
        $this->total_limit_cnt = $totalLimitCnt;
    }


}

