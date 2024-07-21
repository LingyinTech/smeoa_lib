<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingFullrangeQueryactivityItemPoolActivity {

    /**
        通用限购信息，-1为不限制，默认为不限制
     **/
    public $limit_info;

    /**
        活动的梯度列表
     **/
    public $rule_stairs;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        报名活动Id
     **/
    public $activity_id;

    /**
        活动名称
     **/
    public $activity_name;

    /**
        活动描述
     **/
    public $description;

    /**
        startTime
     **/
    public $start_time;

    /**
        endTime
     **/
    public $end_time;

    /**
        优惠适用场景:APP|POS|POS+APP 分别对应的值为1|2|1,2
     **/
    public $terminals;

    /**
        会员维度活动参与人群限制：-1:不限制 1:会员专享 2:非会员专享
     **/
    public $member_limit;

    /**
        shopIds
     **/
    public $shop_ids;

    /**
        merchantCrowdCode
     **/
    public $merchant_crowd_code;

    /**
        txdCrowdCode
     **/
    public $txd_crowd_code;


    public function getLimitInfo() : AlibabaHmMarketingFullrangeQueryactivityLimitInfo{
        return $this->limit_info;
    }

    public function setLimitInfo(AlibabaHmMarketingFullrangeQueryactivityLimitInfo $limitInfo){
        $this->limit_info = $limitInfo;
    }

    public function getRuleStairs() : array{
        return $this->rule_stairs;
    }

    public function setRuleStairs(array $ruleStairs){
        $this->rule_stairs = $ruleStairs;
    }

    public function getOutActId() : string{
        return $this->out_act_id;
    }

    public function setOutActId(string $outActId){
        $this->out_act_id = $outActId;
    }

    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }

    public function getActivityName() : string{
        return $this->activity_name;
    }

    public function setActivityName(string $activityName){
        $this->activity_name = $activityName;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getStartTime() : int{
        return $this->start_time;
    }

    public function setStartTime(int $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : int{
        return $this->end_time;
    }

    public function setEndTime(int $endTime){
        $this->end_time = $endTime;
    }

    public function getTerminals() : array{
        return $this->terminals;
    }

    public function setTerminals(array $terminals){
        $this->terminals = $terminals;
    }

    public function getMemberLimit() : int{
        return $this->member_limit;
    }

    public function setMemberLimit(int $memberLimit){
        $this->member_limit = $memberLimit;
    }

    public function getShopIds() : array{
        return $this->shop_ids;
    }

    public function setShopIds(array $shopIds){
        $this->shop_ids = $shopIds;
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

