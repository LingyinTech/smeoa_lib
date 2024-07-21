<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItemdiscountQueryactivityItemDiscountActivity {

    /**
        商品特价优惠方式[itemDecreaseMoney:商品特价减钱;itemFixPrice:商品特价一口价;itemDiscount:商品特价打折]
     **/
    public $discount_type;

    /**
        活动名称,不超过10个英文字符
     **/
    public $activity_name;

    /**
        活动结束时间,时间戳
     **/
    public $end_time;

    /**
        参加活动的渠道店ids
     **/
    public $shop_ids;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        活动详情描述,不超过30个英文字符
     **/
    public $description;

    /**
        优惠适用场景[APP|POS|POS+APP分别对应的值为1|2|1,2]
     **/
    public $terminals;

    /**
        活动开始时间,时间戳
     **/
    public $start_time;

    /**
        五道口活动id
     **/
    public $activity_id;

    /**
        会员维度活动参与人群限制[-1:不限制;1:会员专享;2:非会员专享]
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

    /**
        渠道key
     **/
    public $activity_channel;

    /**
        周期优惠信息
     **/
    public $period_config;

    /**
        活动优先级，值越大表示优先级越高，必须大于0
     **/
    public $priority_value;

    /**
        coverBefore
     **/
    public $cover_before;


    public function getDiscountType() : string{
        return $this->discount_type;
    }

    public function setDiscountType(string $discountType){
        $this->discount_type = $discountType;
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

    public function getShopIds() : array{
        return $this->shop_ids;
    }

    public function setShopIds(array $shopIds){
        $this->shop_ids = $shopIds;
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

    public function getTerminals() : array{
        return $this->terminals;
    }

    public function setTerminals(array $terminals){
        $this->terminals = $terminals;
    }

    public function getStartTime() : int{
        return $this->start_time;
    }

    public function setStartTime(int $startTime){
        $this->start_time = $startTime;
    }

    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
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

    public function getActivityChannel() : string{
        return $this->activity_channel;
    }

    public function setActivityChannel(string $activityChannel){
        $this->activity_channel = $activityChannel;
    }

    public function getPeriodConfig() : AlibabaHmMarketingItemdiscountQueryactivityPeriodConfig{
        return $this->period_config;
    }

    public function setPeriodConfig(AlibabaHmMarketingItemdiscountQueryactivityPeriodConfig $periodConfig){
        $this->period_config = $periodConfig;
    }

    public function getPriorityValue() : int{
        return $this->priority_value;
    }

    public function setPriorityValue(int $priorityValue){
        $this->priority_value = $priorityValue;
    }

    public function getCoverBefore() : bool{
        return $this->cover_before;
    }

    public function setCoverBefore(bool $coverBefore){
        $this->cover_before = $coverBefore;
    }


}

