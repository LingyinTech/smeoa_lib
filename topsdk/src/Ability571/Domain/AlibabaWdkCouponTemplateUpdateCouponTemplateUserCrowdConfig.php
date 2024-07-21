<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateUpdateCouponTemplateUserCrowdConfig {

    /**
        商家自定义人群
     **/
    public $merchant_customize_crowd_name;

    /**
        平台人群
     **/
    public $platform_crowd_name;


    public function getMerchantCustomizeCrowdName() : string{
        return $this->merchant_customize_crowd_name;
    }

    public function setMerchantCustomizeCrowdName(string $merchantCustomizeCrowdName){
        $this->merchant_customize_crowd_name = $merchantCustomizeCrowdName;
    }

    public function getPlatformCrowdName() : string{
        return $this->platform_crowd_name;
    }

    public function setPlatformCrowdName(string $platformCrowdName){
        $this->platform_crowd_name = $platformCrowdName;
    }


}

