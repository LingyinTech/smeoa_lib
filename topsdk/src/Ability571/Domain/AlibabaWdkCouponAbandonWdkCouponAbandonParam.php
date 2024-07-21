<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponAbandonWdkCouponAbandonParam {

    /**
        券涞源 写死
     **/
    public $coupon_source;

    /**
        优惠券模版id
     **/
    public $template_id;

    /**
        用户id 写死
     **/
    public $user_id;

    /**
        卡券实例id
     **/
    public $voucher_id;

    /**
        匿名码
     **/
    public $ma_code;


    public function getCouponSource() : string{
        return $this->coupon_source;
    }

    public function setCouponSource(string $couponSource){
        $this->coupon_source = $couponSource;
    }

    public function getTemplateId() : string{
        return $this->template_id;
    }

    public function setTemplateId(string $templateId){
        $this->template_id = $templateId;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getVoucherId() : int{
        return $this->voucher_id;
    }

    public function setVoucherId(int $voucherId){
        $this->voucher_id = $voucherId;
    }

    public function getMaCode() : string{
        return $this->ma_code;
    }

    public function setMaCode(string $maCode){
        $this->ma_code = $maCode;
    }


}

