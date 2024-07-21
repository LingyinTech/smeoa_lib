<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenDarunfaActivitySyncDrfTxdActivityBo {

    /**
        换购机台
     **/
    public $activity_channel;

    /**
        封顶金额，单位：分
     **/
    public $celling_amount;

    /**
        是否多阶梯可叠加，0--否，1--是
     **/
    public $is_multi_mix;

    /**
        是否单商品累计，0--否，1--是
     **/
    public $item_overlay;

    /**
        是否可贬值；0--否，1--是
     **/
    public $discount_fee_model;

    /**
        是否上不封顶；0--否，1--是
     **/
    public $enable_multiple;

    /**
        商品池规则
     **/
    public $pool_rules;

    /**
        商品池数量
     **/
    public $pool_num;

    /**
        商家人群编码
     **/
    public $merchant_crowd_code;

    /**
        活动每日限购
     **/
    public $total_day_limit;

    /**
        用户每日限购
     **/
    public $user_day_limit;

    /**
        活动总限购
     **/
    public $total_limit;

    /**
        用户数量总限购
     **/
    public $user_limit;

    /**
        一口价【分】
     **/
    public $fix_price;

    /**
        第N件活动规则
     **/
    public $count_at;

    /**
        单品特价类型；1-一口价；2-打折；3-减钱
     **/
    public $discount_type;

    /**
        ?营销中台活动类型
     **/
    public $activity_type;

    /**
        1--pos,2--App;1,2--pos&App
     **/
    public $terminals;

    /**
        门店Id
     **/
    public $store_ids;

    /**
        活动描述
     **/
    public $activity_content;

    /**
        活动名称
     **/
    public $activity_name;

    /**
        中台活动Id（全局唯一）
     **/
    public $promotion_id;

    /**
        限购权重，实际限购=限购值/限购权重
     **/
    public $limit_weight;

    /**
        更新时间
     **/
    public $update_time;

    /**
        插入时间
     **/
    public $insert_time;

    /**
        0--不可用；1--可用
     **/
    public $status;

    /**
        活动结束时间
     **/
    public $end_date;

    /**
        活动开始时间
     **/
    public $start_date;

    /**
        商品池阶梯规则
     **/
    public $stair_rules;

    /**
        是否叠加逻辑分组与阶梯条件；0-否，1-是
     **/
    public $is_check_all_cond;

    /**
        淘鲜达活动Id
     **/
    public $txd_activity_id;

    /**
        周期生效配置，weekdays：星期几搞活动 [1:Mon;2:Tues;3:Wed;4:Thur;5:Fri;6:Sat;7:Sun]；every_day_periods：每天的什么时间阶段搞活动,精确到秒单位,最多支持5段 例如:03:00:00_05:00:00，示例：{"weekdays":[1,2,3,4,5,6,7],"every_day_periods":["03:00:00_05:00:00","18:00:00_21:00:00"]}
     **/
    public $period_config;

    /**
        是否针对单个商品使用优惠
     **/
    public $is_alone;


    public function getActivityChannel() : string{
        return $this->activity_channel;
    }

    public function setActivityChannel(string $activityChannel){
        $this->activity_channel = $activityChannel;
    }

    public function getCellingAmount() : int{
        return $this->celling_amount;
    }

    public function setCellingAmount(int $cellingAmount){
        $this->celling_amount = $cellingAmount;
    }

    public function getIsMultiMix() : int{
        return $this->is_multi_mix;
    }

    public function setIsMultiMix(int $isMultiMix){
        $this->is_multi_mix = $isMultiMix;
    }

    public function getItemOverlay() : int{
        return $this->item_overlay;
    }

    public function setItemOverlay(int $itemOverlay){
        $this->item_overlay = $itemOverlay;
    }

    public function getDiscountFeeModel() : int{
        return $this->discount_fee_model;
    }

    public function setDiscountFeeModel(int $discountFeeModel){
        $this->discount_fee_model = $discountFeeModel;
    }

    public function getEnableMultiple() : int{
        return $this->enable_multiple;
    }

    public function setEnableMultiple(int $enableMultiple){
        $this->enable_multiple = $enableMultiple;
    }

    public function getPoolRules() : string{
        return $this->pool_rules;
    }

    public function setPoolRules(string $poolRules){
        $this->pool_rules = $poolRules;
    }

    public function getPoolNum() : int{
        return $this->pool_num;
    }

    public function setPoolNum(int $poolNum){
        $this->pool_num = $poolNum;
    }

    public function getMerchantCrowdCode() : string{
        return $this->merchant_crowd_code;
    }

    public function setMerchantCrowdCode(string $merchantCrowdCode){
        $this->merchant_crowd_code = $merchantCrowdCode;
    }

    public function getTotalDayLimit() : int{
        return $this->total_day_limit;
    }

    public function setTotalDayLimit(int $totalDayLimit){
        $this->total_day_limit = $totalDayLimit;
    }

    public function getUserDayLimit() : int{
        return $this->user_day_limit;
    }

    public function setUserDayLimit(int $userDayLimit){
        $this->user_day_limit = $userDayLimit;
    }

    public function getTotalLimit() : int{
        return $this->total_limit;
    }

    public function setTotalLimit(int $totalLimit){
        $this->total_limit = $totalLimit;
    }

    public function getUserLimit() : int{
        return $this->user_limit;
    }

    public function setUserLimit(int $userLimit){
        $this->user_limit = $userLimit;
    }

    public function getFixPrice() : int{
        return $this->fix_price;
    }

    public function setFixPrice(int $fixPrice){
        $this->fix_price = $fixPrice;
    }

    public function getCountAt() : int{
        return $this->count_at;
    }

    public function setCountAt(int $countAt){
        $this->count_at = $countAt;
    }

    public function getDiscountType() : int{
        return $this->discount_type;
    }

    public function setDiscountType(int $discountType){
        $this->discount_type = $discountType;
    }

    public function getActivityType() : int{
        return $this->activity_type;
    }

    public function setActivityType(int $activityType){
        $this->activity_type = $activityType;
    }

    public function getTerminals() : string{
        return $this->terminals;
    }

    public function setTerminals(string $terminals){
        $this->terminals = $terminals;
    }

    public function getStoreIds() : string{
        return $this->store_ids;
    }

    public function setStoreIds(string $storeIds){
        $this->store_ids = $storeIds;
    }

    public function getActivityContent() : string{
        return $this->activity_content;
    }

    public function setActivityContent(string $activityContent){
        $this->activity_content = $activityContent;
    }

    public function getActivityName() : string{
        return $this->activity_name;
    }

    public function setActivityName(string $activityName){
        $this->activity_name = $activityName;
    }

    public function getPromotionId() : string{
        return $this->promotion_id;
    }

    public function setPromotionId(string $promotionId){
        $this->promotion_id = $promotionId;
    }

    public function getLimitWeight() : int{
        return $this->limit_weight;
    }

    public function setLimitWeight(int $limitWeight){
        $this->limit_weight = $limitWeight;
    }

    public function getUpdateTime() : int{
        return $this->update_time;
    }

    public function setUpdateTime(int $updateTime){
        $this->update_time = $updateTime;
    }

    public function getInsertTime() : int{
        return $this->insert_time;
    }

    public function setInsertTime(int $insertTime){
        $this->insert_time = $insertTime;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getEndDate() : int{
        return $this->end_date;
    }

    public function setEndDate(int $endDate){
        $this->end_date = $endDate;
    }

    public function getStartDate() : int{
        return $this->start_date;
    }

    public function setStartDate(int $startDate){
        $this->start_date = $startDate;
    }

    public function getStairRules() : string{
        return $this->stair_rules;
    }

    public function setStairRules(string $stairRules){
        $this->stair_rules = $stairRules;
    }

    public function getIsCheckAllCond() : int{
        return $this->is_check_all_cond;
    }

    public function setIsCheckAllCond(int $isCheckAllCond){
        $this->is_check_all_cond = $isCheckAllCond;
    }

    public function getTxdActivityId() : int{
        return $this->txd_activity_id;
    }

    public function setTxdActivityId(int $txdActivityId){
        $this->txd_activity_id = $txdActivityId;
    }

    public function getPeriodConfig() : string{
        return $this->period_config;
    }

    public function setPeriodConfig(string $periodConfig){
        $this->period_config = $periodConfig;
    }

    public function getIsAlone() : int{
        return $this->is_alone;
    }

    public function setIsAlone(int $isAlone){
        $this->is_alone = $isAlone;
    }


}

