<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryCouponTemplateOptionConfig {

    /**
        抵用券是否可贬值使用
     **/
    public $devalue;

    /**
        优惠券logo url
     **/
    public $logo_url;

    /**
        外部优惠券模板id
     **/
    public $out_coupon_template_id;

    /**
        外部优惠券类型
     **/
    public $out_coupon_type;

    /**
        券图片
     **/
    public $picture_url;

    /**
        合同id
     **/
    public $contract_instance_id;

    /**
        采买者id
     **/
    public $purchase_id;


    public function getDevalue() : bool{
        return $this->devalue;
    }

    public function setDevalue(bool $devalue){
        $this->devalue = $devalue;
    }

    public function getLogoUrl() : string{
        return $this->logo_url;
    }

    public function setLogoUrl(string $logoUrl){
        $this->logo_url = $logoUrl;
    }

    public function getOutCouponTemplateId() : string{
        return $this->out_coupon_template_id;
    }

    public function setOutCouponTemplateId(string $outCouponTemplateId){
        $this->out_coupon_template_id = $outCouponTemplateId;
    }

    public function getOutCouponType() : string{
        return $this->out_coupon_type;
    }

    public function setOutCouponType(string $outCouponType){
        $this->out_coupon_type = $outCouponType;
    }

    public function getPictureUrl() : string{
        return $this->picture_url;
    }

    public function setPictureUrl(string $pictureUrl){
        $this->picture_url = $pictureUrl;
    }

    public function getContractInstanceId() : int{
        return $this->contract_instance_id;
    }

    public function setContractInstanceId(int $contractInstanceId){
        $this->contract_instance_id = $contractInstanceId;
    }

    public function getPurchaseId() : int{
        return $this->purchase_id;
    }

    public function setPurchaseId(int $purchaseId){
        $this->purchase_id = $purchaseId;
    }


}

