<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryCouponTemplate {

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
        模板表主键
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


    public function getApplyLimitConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateApplyLimitConfig{
        return $this->apply_limit_config;
    }

    public function setApplyLimitConfig(AlibabaWdkCouponTemplateQueryCouponTemplateApplyLimitConfig $applyLimitConfig){
        $this->apply_limit_config = $applyLimitConfig;
    }

    public function getCommonConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateCommonConfig{
        return $this->common_config;
    }

    public function setCommonConfig(AlibabaWdkCouponTemplateQueryCouponTemplateCommonConfig $commonConfig){
        $this->common_config = $commonConfig;
    }

    public function getConditionConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateConditionConfig{
        return $this->condition_config;
    }

    public function setConditionConfig(AlibabaWdkCouponTemplateQueryCouponTemplateConditionConfig $conditionConfig){
        $this->condition_config = $conditionConfig;
    }

    public function getDiscountConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateDiscountConfig{
        return $this->discount_config;
    }

    public function setDiscountConfig(AlibabaWdkCouponTemplateQueryCouponTemplateDiscountConfig $discountConfig){
        $this->discount_config = $discountConfig;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getInvestmentConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateInvestmentConfig{
        return $this->investment_config;
    }

    public function setInvestmentConfig(AlibabaWdkCouponTemplateQueryCouponTemplateInvestmentConfig $investmentConfig){
        $this->investment_config = $investmentConfig;
    }

    public function getOptionConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateOptionConfig{
        return $this->option_config;
    }

    public function setOptionConfig(AlibabaWdkCouponTemplateQueryCouponTemplateOptionConfig $optionConfig){
        $this->option_config = $optionConfig;
    }

    public function getParticipateConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateParticipateConfig{
        return $this->participate_config;
    }

    public function setParticipateConfig(AlibabaWdkCouponTemplateQueryCouponTemplateParticipateConfig $participateConfig){
        $this->participate_config = $participateConfig;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }

    public function getTimeLimitConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateTimeLimitConfig{
        return $this->time_limit_config;
    }

    public function setTimeLimitConfig(AlibabaWdkCouponTemplateQueryCouponTemplateTimeLimitConfig $timeLimitConfig){
        $this->time_limit_config = $timeLimitConfig;
    }

    public function getUuid() : string{
        return $this->uuid;
    }

    public function setUuid(string $uuid){
        $this->uuid = $uuid;
    }

    public function getCompatibleConfig() : AlibabaWdkCouponTemplateQueryCouponTemplateCompatibleConfig{
        return $this->compatible_config;
    }

    public function setCompatibleConfig(AlibabaWdkCouponTemplateQueryCouponTemplateCompatibleConfig $compatibleConfig){
        $this->compatible_config = $compatibleConfig;
    }


}

