<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolActivityCreatePeriodConfig {

    /**
        每天的什么时间阶段搞活动,精确到秒单位 例如:03:00:00_05:00:00
     **/
    public $every_day_periods;

    /**
        星期几搞活动 [1:Mon;2:Tues;3:Wed;4:Thur;5:Fri;6:Sat;7:Sun]
     **/
    public $weekdays;


    public function getEveryDayPeriods() : array{
        return $this->every_day_periods;
    }

    public function setEveryDayPeriods(array $everyDayPeriods){
        $this->every_day_periods = $everyDayPeriods;
    }

    public function getWeekdays() : array{
        return $this->weekdays;
    }

    public function setWeekdays(array $weekdays){
        $this->weekdays = $weekdays;
    }


}

