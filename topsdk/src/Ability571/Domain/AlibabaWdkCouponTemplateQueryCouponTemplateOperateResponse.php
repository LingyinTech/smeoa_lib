<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryCouponTemplateOperateResponse {

    /**
        券模版
     **/
    public $coupon_template;


    public function getCouponTemplate() : AlibabaWdkCouponTemplateQueryCouponTemplate{
        return $this->coupon_template;
    }

    public function setCouponTemplate(AlibabaWdkCouponTemplateQueryCouponTemplate $couponTemplate){
        $this->coupon_template = $couponTemplate;
    }


}

