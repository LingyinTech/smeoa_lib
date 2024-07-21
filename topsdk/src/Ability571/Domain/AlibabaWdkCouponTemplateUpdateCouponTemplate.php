<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateUpdateCouponTemplate {

    /**
        领取限制
     **/
    public $apply_limit_config;

    /**
        基础信息
     **/
    public $common_config;

    /**
        生效条件
     **/
    public $condition_config;

    /**
        优惠效果
     **/
    public $discount_config;

    /**
        模板表主键 创建时为空
     **/
    public $id;

    /**
        出资人配置
     **/
    public $investment_config;

    /**
        其他配置--拓展信息
     **/
    public $option_config;

    /**
        参与者
     **/
    public $participate_config;

    /**
        ump模板ID
     **/
    public $source_id;

    /**
        实例有效时间配置
     **/
    public $time_limit_config;

    /**
        优惠券模版uuid
     **/
    public $uuid;

    /**
        幂等id
     **/
    public $unique_id;

    /**
        兼容历史逻辑配置
     **/
    public $compatible_config;


    public function getApplyLimitConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateApplyLimitConfig{
        return $this->apply_limit_config;
    }

    public function setApplyLimitConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateApplyLimitConfig $applyLimitConfig){
        $this->apply_limit_config = $applyLimitConfig;
    }

    public function getCommonConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateCommonConfig{
        return $this->common_config;
    }

    public function setCommonConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateCommonConfig $commonConfig){
        $this->common_config = $commonConfig;
    }

    public function getConditionConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateConditionConfig{
        return $this->condition_config;
    }

    public function setConditionConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateConditionConfig $conditionConfig){
        $this->condition_config = $conditionConfig;
    }

    public function getDiscountConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateDiscountConfig{
        return $this->discount_config;
    }

    public function setDiscountConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateDiscountConfig $discountConfig){
        $this->discount_config = $discountConfig;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getInvestmentConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateInvestmentConfig{
        return $this->investment_config;
    }

    public function setInvestmentConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateInvestmentConfig $investmentConfig){
        $this->investment_config = $investmentConfig;
    }

    public function getOptionConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateOptionConfig{
        return $this->option_config;
    }

    public function setOptionConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateOptionConfig $optionConfig){
        $this->option_config = $optionConfig;
    }

    public function getParticipateConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateParticipateConfig{
        return $this->participate_config;
    }

    public function setParticipateConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateParticipateConfig $participateConfig){
        $this->participate_config = $participateConfig;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }

    public function getTimeLimitConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateTimeLimitConfig{
        return $this->time_limit_config;
    }

    public function setTimeLimitConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateTimeLimitConfig $timeLimitConfig){
        $this->time_limit_config = $timeLimitConfig;
    }

    public function getUuid() : string{
        return $this->uuid;
    }

    public function setUuid(string $uuid){
        $this->uuid = $uuid;
    }

    public function getUniqueId() : string{
        return $this->unique_id;
    }

    public function setUniqueId(string $uniqueId){
        $this->unique_id = $uniqueId;
    }

    public function getCompatibleConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateCompatibleConfig{
        return $this->compatible_config;
    }

    public function setCompatibleConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateCompatibleConfig $compatibleConfig){
        $this->compatible_config = $compatibleConfig;
    }


}

