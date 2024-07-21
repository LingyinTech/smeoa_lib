<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateCouponTemplate {

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
        兼容历史逻辑配置
     **/
    public $compatible_config;

    /**
        幂等id，外部透传
     **/
    public $unique_id;


    public function getApplyLimitConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateApplyLimitConfig{
        return $this->apply_limit_config;
    }

    public function setApplyLimitConfig(AlibabaWdkCouponTemplateCreateCouponTemplateApplyLimitConfig $applyLimitConfig){
        $this->apply_limit_config = $applyLimitConfig;
    }

    public function getCommonConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateCommonConfig{
        return $this->common_config;
    }

    public function setCommonConfig(AlibabaWdkCouponTemplateCreateCouponTemplateCommonConfig $commonConfig){
        $this->common_config = $commonConfig;
    }

    public function getConditionConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateConditionConfig{
        return $this->condition_config;
    }

    public function setConditionConfig(AlibabaWdkCouponTemplateCreateCouponTemplateConditionConfig $conditionConfig){
        $this->condition_config = $conditionConfig;
    }

    public function getDiscountConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateDiscountConfig{
        return $this->discount_config;
    }

    public function setDiscountConfig(AlibabaWdkCouponTemplateCreateCouponTemplateDiscountConfig $discountConfig){
        $this->discount_config = $discountConfig;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getInvestmentConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateInvestmentConfig{
        return $this->investment_config;
    }

    public function setInvestmentConfig(AlibabaWdkCouponTemplateCreateCouponTemplateInvestmentConfig $investmentConfig){
        $this->investment_config = $investmentConfig;
    }

    public function getOptionConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateOptionConfig{
        return $this->option_config;
    }

    public function setOptionConfig(AlibabaWdkCouponTemplateCreateCouponTemplateOptionConfig $optionConfig){
        $this->option_config = $optionConfig;
    }

    public function getParticipateConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateParticipateConfig{
        return $this->participate_config;
    }

    public function setParticipateConfig(AlibabaWdkCouponTemplateCreateCouponTemplateParticipateConfig $participateConfig){
        $this->participate_config = $participateConfig;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }

    public function getTimeLimitConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateTimeLimitConfig{
        return $this->time_limit_config;
    }

    public function setTimeLimitConfig(AlibabaWdkCouponTemplateCreateCouponTemplateTimeLimitConfig $timeLimitConfig){
        $this->time_limit_config = $timeLimitConfig;
    }

    public function getUuid() : string{
        return $this->uuid;
    }

    public function setUuid(string $uuid){
        $this->uuid = $uuid;
    }

    public function getCompatibleConfig() : AlibabaWdkCouponTemplateCreateCouponTemplateCompatibleConfig{
        return $this->compatible_config;
    }

    public function setCompatibleConfig(AlibabaWdkCouponTemplateCreateCouponTemplateCompatibleConfig $compatibleConfig){
        $this->compatible_config = $compatibleConfig;
    }

    public function getUniqueId() : string{
        return $this->unique_id;
    }

    public function setUniqueId(string $uniqueId){
        $this->unique_id = $uniqueId;
    }


}

