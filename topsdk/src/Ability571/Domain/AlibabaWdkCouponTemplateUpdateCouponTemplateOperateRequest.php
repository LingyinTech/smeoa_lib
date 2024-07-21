<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateUpdateCouponTemplateOperateRequest {

    /**
        券模版
     **/
    public $coupon_template;

    /**
        用户信息
     **/
    public $user_info;


    public function getCouponTemplate() : AlibabaWdkCouponTemplateUpdateCouponTemplate{
        return $this->coupon_template;
    }

    public function setCouponTemplate(AlibabaWdkCouponTemplateUpdateCouponTemplate $couponTemplate){
        $this->coupon_template = $couponTemplate;
    }

    public function getUserInfo() : AlibabaWdkCouponTemplateUpdateUserInfo{
        return $this->user_info;
    }

    public function setUserInfo(AlibabaWdkCouponTemplateUpdateUserInfo $userInfo){
        $this->user_info = $userInfo;
    }


}

