<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateCouponTemplateCompatibleConfig {

    /**
        是否要求优惠券在一天的23:59:59失效 1表示最后一秒失效
     **/
    public $valid_till_night;

    /**
        优惠券应用类型 pointCoupon：积分券
     **/
    public $application_type;


    public function getValidTillNight() : int{
        return $this->valid_till_night;
    }

    public function setValidTillNight(int $validTillNight){
        $this->valid_till_night = $validTillNight;
    }

    public function getApplicationType() : string{
        return $this->application_type;
    }

    public function setApplicationType(string $applicationType){
        $this->application_type = $applicationType;
    }


}

