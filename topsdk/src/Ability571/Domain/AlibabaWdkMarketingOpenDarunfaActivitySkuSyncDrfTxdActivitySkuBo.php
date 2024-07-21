<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenDarunfaActivitySkuSyncDrfTxdActivitySkuBo {

    /**
        商品对应的活动Id，仅当同一次任务有相关活动更新的时候在传入
     **/
    public $activity_version_id;

    /**
        限购权重
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
        状态：0--不可用，1--可用
     **/
    public $status;

    /**
        门槛数量：件/金额（分）
     **/
    public $condition_num;

    /**
        门槛类型：2-累计金额消费，3-累计购买次数消费
     **/
    public $condition_type;

    /**
        赠品skuCode
     **/
    public $gift_sku_code;

    /**
        买赠门槛
     **/
    public $buy_num;

    /**
        活动每日限购
     **/
    public $total_day_limit;

    /**
        用户每日限购
     **/
    public $user_day_limit;

    /**
        总限购数量
     **/
    public $total_limit;

    /**
        用户限购
     **/
    public $user_limit;

    /**
        打折
     **/
    public $discount_rate;

    /**
        减钱
     **/
    public $decrease_money;

    /**
        一口价
     **/
    public $fix_price;

    /**
        商品编码
     **/
    public $sku_code;

    /**
        商品池ID
     **/
    public $pool_id;

    /**
        所属活动ID
     **/
    public $promotion_id;

    /**
        大润发活动类型
     **/
    public $activity_type;

    /**
        淘鲜达活动Id
     **/
    public $txd_activity_id;

    /**
        对应单品积分活动。对应需要扣除的积分数
     **/
    public $deduct_point;


    public function getActivityVersionId() : int{
        return $this->activity_version_id;
    }

    public function setActivityVersionId(int $activityVersionId){
        $this->activity_version_id = $activityVersionId;
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

    public function getConditionNum() : int{
        return $this->condition_num;
    }

    public function setConditionNum(int $conditionNum){
        $this->condition_num = $conditionNum;
    }

    public function getConditionType() : int{
        return $this->condition_type;
    }

    public function setConditionType(int $conditionType){
        $this->condition_type = $conditionType;
    }

    public function getGiftSkuCode() : string{
        return $this->gift_sku_code;
    }

    public function setGiftSkuCode(string $giftSkuCode){
        $this->gift_sku_code = $giftSkuCode;
    }

    public function getBuyNum() : int{
        return $this->buy_num;
    }

    public function setBuyNum(int $buyNum){
        $this->buy_num = $buyNum;
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

    public function getDiscountRate() : int{
        return $this->discount_rate;
    }

    public function setDiscountRate(int $discountRate){
        $this->discount_rate = $discountRate;
    }

    public function getDecreaseMoney() : int{
        return $this->decrease_money;
    }

    public function setDecreaseMoney(int $decreaseMoney){
        $this->decrease_money = $decreaseMoney;
    }

    public function getFixPrice() : int{
        return $this->fix_price;
    }

    public function setFixPrice(int $fixPrice){
        $this->fix_price = $fixPrice;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getPoolId() : int{
        return $this->pool_id;
    }

    public function setPoolId(int $poolId){
        $this->pool_id = $poolId;
    }

    public function getPromotionId() : string{
        return $this->promotion_id;
    }

    public function setPromotionId(string $promotionId){
        $this->promotion_id = $promotionId;
    }

    public function getActivityType() : int{
        return $this->activity_type;
    }

    public function setActivityType(int $activityType){
        $this->activity_type = $activityType;
    }

    public function getTxdActivityId() : int{
        return $this->txd_activity_id;
    }

    public function setTxdActivityId(int $txdActivityId){
        $this->txd_activity_id = $txdActivityId;
    }

    public function getDeductPoint() : int{
        return $this->deduct_point;
    }

    public function setDeductPoint(int $deductPoint){
        $this->deduct_point = $deductPoint;
    }


}

