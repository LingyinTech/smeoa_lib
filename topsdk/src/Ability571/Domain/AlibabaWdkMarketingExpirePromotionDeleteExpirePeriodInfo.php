<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingExpirePromotionDeleteExpirePeriodInfo {

    /**
        0到24，小时数值
     **/
    public $end_hour;

    /**
        0到24，小时数值
     **/
    public $start_hour;

    /**
        外部活动id
     **/
    public $out_id;

    /**
        优惠具体折扣，1到1000
     **/
    public $promotion_value;


    public function getEndHour() : int{
        return $this->end_hour;
    }

    public function setEndHour(int $endHour){
        $this->end_hour = $endHour;
    }

    public function getStartHour() : int{
        return $this->start_hour;
    }

    public function setStartHour(int $startHour){
        $this->start_hour = $startHour;
    }

    public function getOutId() : int{
        return $this->out_id;
    }

    public function setOutId(int $outId){
        $this->out_id = $outId;
    }

    public function getPromotionValue() : int{
        return $this->promotion_value;
    }

    public function setPromotionValue(int $promotionValue){
        $this->promotion_value = $promotionValue;
    }


}

