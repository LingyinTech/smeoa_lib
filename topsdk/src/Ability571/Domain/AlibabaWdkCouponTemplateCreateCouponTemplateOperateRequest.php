<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateCouponTemplateOperateRequest {

    /**
        券模版
     **/
    public $coupon_template;

    /**
        用户信息
     **/
    public $user_info;


    public function getCouponTemplate() : AlibabaWdkCouponTemplateCreateCouponTemplate{
        return $this->coupon_template;
    }

    public function setCouponTemplate(AlibabaWdkCouponTemplateCreateCouponTemplate $couponTemplate){
        $this->coupon_template = $couponTemplate;
    }

    public function getUserInfo() : AlibabaWdkCouponTemplateCreateUserInfo{
        return $this->user_info;
    }

    public function setUserInfo(AlibabaWdkCouponTemplateCreateUserInfo $userInfo){
        $this->user_info = $userInfo;
    }


}

