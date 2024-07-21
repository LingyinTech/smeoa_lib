<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItemdiscountCreateactivityItemDiscountActivityRequest {

    /**
        活动开始时间,时间戳
     **/
    public $start_time;

    /**
        优惠适用场景[APP|POS|POS+APP分别对应的值为1|2|1,2]
     **/
    public $terminals;

    /**
        商品特价优惠方式[itemDecreaseMoney:商品特价减钱;itemFixPrice:商品特价一口价;itemDiscount:商品特价打折]
     **/
    public $discount_type;

    /**
        活动详情描述,不超过30个英文字符
     **/
    public $description;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        参加活动的渠道店ids
     **/
    public $shop_ids;

    /**
        活动结束时间,时间戳
     **/
    public $end_time;

    /**
        活动名称,不超过10个英文字符
     **/
    public $activity_name;

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
        渠道编码
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
        是否参加后单压前单，默认不参加
     **/
    public $cover_before;

    /**
        是否自定义渠道同步
     **/
    public $by_channel;

    /**
        自定义同步的渠道配置
     **/
    public $channel_config_list;


    public function getStartTime() : int{
        return $this->start_time;
    }

    public function setStartTime(int $startTime){
        $this->start_time = $startTime;
    }

    public function getTerminals() : array{
        return $this->terminals;
    }

    public function setTerminals(array $terminals){
        $this->terminals = $terminals;
    }

    public function getDiscountType() : string{
        return $this->discount_type;
    }

    public function setDiscountType(string $discountType){
        $this->discount_type = $discountType;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
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

    public function getActivityName() : string{
        return $this->activity_name;
    }

    public function setActivityName(string $activityName){
        $this->activity_name = $activityName;
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

    public function getPeriodConfig() : AlibabaWdkMarketingItemdiscountCreateactivityPeriodConfig{
        return $this->period_config;
    }

    public function setPeriodConfig(AlibabaWdkMarketingItemdiscountCreateactivityPeriodConfig $periodConfig){
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

    public function getByChannel() : bool{
        return $this->by_channel;
    }

    public function setByChannel(bool $byChannel){
        $this->by_channel = $byChannel;
    }

    public function getChannelConfigList() : array{
        return $this->channel_config_list;
    }

    public function setChannelConfigList(array $channelConfigList){
        $this->channel_config_list = $channelConfigList;
    }


}

