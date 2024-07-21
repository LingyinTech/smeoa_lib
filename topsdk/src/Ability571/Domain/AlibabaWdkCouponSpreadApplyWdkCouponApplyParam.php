<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSpreadApplyWdkCouponApplyParam {

    /**
        申请渠道
     **/
    public $apply_channel;

    /**
        券领取来源，非必填，用于区分不同的业务来源，默认传空为领取普通优惠券
     **/
    public $apply_source;

    /**
        卡券来源  [ump:ump卡券; koubei:口碑券]
     **/
    public $coupon_source;

    /**
        拓展属性
     **/
    public $features;

    /**
        外部业务id
     **/
    public $out_biz_no;

    /**
        优惠券模版id
     **/
    public $template_id;

    /**
        领取淘系id
     **/
    public $user_id;

    /**
        优惠券模版uuid
     **/
    public $uuid;

    /**
        幂等键
     **/
    public $idempotent_key;


    public function getApplyChannel() : string{
        return $this->apply_channel;
    }

    public function setApplyChannel(string $applyChannel){
        $this->apply_channel = $applyChannel;
    }

    public function getApplySource() : string{
        return $this->apply_source;
    }

    public function setApplySource(string $applySource){
        $this->apply_source = $applySource;
    }

    public function getCouponSource() : string{
        return $this->coupon_source;
    }

    public function setCouponSource(string $couponSource){
        $this->coupon_source = $couponSource;
    }

    public function getFeatures() : array{
        return $this->features;
    }

    public function setFeatures(array $features){
        $this->features = $features;
    }

    public function getOutBizNo() : string{
        return $this->out_biz_no;
    }

    public function setOutBizNo(string $outBizNo){
        $this->out_biz_no = $outBizNo;
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

    public function getUuid() : string{
        return $this->uuid;
    }

    public function setUuid(string $uuid){
        $this->uuid = $uuid;
    }

    public function getIdempotentKey() : string{
        return $this->idempotent_key;
    }

    public function setIdempotentKey(string $idempotentKey){
        $this->idempotent_key = $idempotentKey;
    }


}

