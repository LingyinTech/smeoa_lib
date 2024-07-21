<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItemdiscountCreateactivityPeriodConfig {

    /**
        每天的那些时间段生效
     **/
    public $every_day_periods;

    /**
        一周的哪几天生效
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

