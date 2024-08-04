<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetSortInfo {

    /**
        daySortVal
     **/
    public $day_sort_val;

    /**
        hourSortVal
     **/
    public $hour_sort_val;


    public function getDaySortVal() : int{
        return $this->day_sort_val;
    }

    public function setDaySortVal(int $daySortVal){
        $this->day_sort_val = $daySortVal;
    }

    public function getHourSortVal() : int{
        return $this->hour_sort_val;
    }

    public function setHourSortVal(int $hourSortVal){
        $this->hour_sort_val = $hourSortVal;
    }


}

