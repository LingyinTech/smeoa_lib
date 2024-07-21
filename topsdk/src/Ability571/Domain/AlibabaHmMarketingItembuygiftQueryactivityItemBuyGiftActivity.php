<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItembuygiftQueryactivityItemBuyGiftActivity {

    /**
        五道口活动id
     **/
    public $activity_id;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        买赠活动详情描述,不超过30个英文字符
     **/
    public $description;

    /**
        买赠活动名称，不超过10个英文字符
     **/
    public $activity_name;

    /**
        结束时间，时间戳
     **/
    public $end_time;

    /**
        开始时间，时间戳
     **/
    public $start_time;

    /**
        参加活动的渠道店ids
     **/
    public $shop_ids;

    /**
        优惠适用场景:APP|POS|POS+APP 分别对应的值为1|2|1,2
     **/
    public $terminals;

    /**
        会员维度活动参与人群限制：-1:不限制 1:会员专享 2:非会员专享
     **/
    public $member_limit;

    /**
        商家人群编码
     **/
    public $merchant_crowd_code;

    /**
        淘鲜达人群编码
     **/
    public $txd_crowd_code;


    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }

    public function getOutActId() : string{
        return $this->out_act_id;
    }

    public function setOutActId(string $outActId){
        $this->out_act_id = $outActId;
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

    public function getEndTime() : int{
        return $this->end_time;
    }

    public function setEndTime(int $endTime){
        $this->end_time = $endTime;
    }

    public function getStartTime() : int{
        return $this->start_time;
    }

    public function setStartTime(int $startTime){
        $this->start_time = $startTime;
    }

    public function getShopIds() : string{
        return $this->shop_ids;
    }

    public function setShopIds(string $shopIds){
        $this->shop_ids = $shopIds;
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

