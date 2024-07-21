<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingExpirePromotionQueryExpirePeriodInfo {

    /**
        优惠值
     **/
    public $promotion_value;

    /**
        优惠结束时间（距离过期时间）
     **/
    public $end_hour;

    /**
        优惠开始时间（距离过期时间）
     **/
    public $start_hour;

    /**
        外部优惠id
     **/
    public $out_id;


    public function getPromotionValue() : int{
        return $this->promotion_value;
    }

    public function setPromotionValue(int $promotionValue){
        $this->promotion_value = $promotionValue;
    }

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


}

