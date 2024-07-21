<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingFullrangeCreateactivityFullRangeActivity {

    /**
        通用限购信息，-1为不限制，默认为不限制
     **/
    public $limit_info;

    /**
        优惠适用场景[APP|POS|POS+APP分别对应的值为1|2|1,2]
     **/
    public $terminals;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        参加活动的渠道店ids
     **/
    public $shop_ids;

    /**
        活动结束时间，时间戳
     **/
    public $end_time;

    /**
        活动的梯度列表
     **/
    public $rule_stairs;

    /**
        活动开始时间，时间戳
     **/
    public $start_time;

    /**
        活动详情描述,不超过30个英文字符
     **/
    public $description;

    /**
        活动名称,不超过10个英文字符
     **/
    public $activity_name;

    /**
        商家人群编码
     **/
    public $merchant_crowd_code;

    /**
        淘鲜达人群编码
     **/
    public $txd_crowd_code;


    public function getLimitInfo() : AlibabaWdkMarketingFullrangeCreateactivityLimitInfo{
        return $this->limit_info;
    }

    public function setLimitInfo(AlibabaWdkMarketingFullrangeCreateactivityLimitInfo $limitInfo){
        $this->limit_info = $limitInfo;
    }

    public function getTerminals() : array{
        return $this->terminals;
    }

    public function setTerminals(array $terminals){
        $this->terminals = $terminals;
    }

    public function getOutActId() : string{
        return $this->out_act_id;
    }

    public function setOutActId(string $outActId){
        $this->out_act_id = $outActId;
    }

    public function getShopIds() : array{
        return $this->shop_ids;
    }

    public function setShopIds(array $shopIds){
        $this->shop_ids = $shopIds;
    }

    public function getEndTime() : int{
        return $this->end_time;
    }

    public function setEndTime(int $endTime){
        $this->end_time = $endTime;
    }

    public function getRuleStairs() : array{
        return $this->rule_stairs;
    }

    public function setRuleStairs(array $ruleStairs){
        $this->rule_stairs = $ruleStairs;
    }

    public function getStartTime() : int{
        return $this->start_time;
    }

    public function setStartTime(int $startTime){
        $this->start_time = $startTime;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getActivityName() : string{
        return $this->activity_name;
    }

    public function setActivityName(string $activityName){
        $this->activity_name = $activityName;
    }

    public function getMerchantCrowdCode() : string{
        return $this->merchant_crowd_code;
    }

    public function setMerchantCrowdCode(string $merchantCrowdCode){
        $this->merchant_crowd_code = $merchantCrowdCode;
    }

    public function getTxdCrowdCode() : string{
        return $this->txd_crowd_code;
    }

    public function setTxdCrowdCode(string $txdCrowdCode){
        $this->txd_crowd_code = $txdCrowdCode;
    }


}

