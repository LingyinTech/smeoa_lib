<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingCouponCreateactivityCouponActivity {

    /**
        优惠券适用范围 [rangeShop:店铺券;rangeItem:商品;rangeCategory:品类券]
     **/
    public $range_type;

    /**
        通用限购信息，-1为不限制，默认为不限制[如果同时设置了(每人活动期间总限领)和(每人每日限领)，则只能生效(每人活动期间总限领)]
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
        优惠券发放方式 [anonymous:匿名券;registered:记名券]
     **/
    public $send_type;

    /**
        优惠券logo url，设置匿名券时为必传参数
     **/
    public $logo_url;

    /**
        参加活动的渠道店ids
     **/
    public $shop_ids;

    /**
        活动结束时间，时间戳[ms单位]
     **/
    public $end_time;

    /**
        适用类目
     **/
    public $applicable_categories;

    /**
        券面额 [单位为分]
     **/
    public $amount;

    /**
        活动开始时间，时间戳[ms单位]
     **/
    public $start_time;

    /**
        优惠券领取渠道 [fullSendCoupon:满额返券;fallingSendCoupon:天降红包;customerService:客服补偿发券;其他渠道请找接口人申请]
     **/
    public $apply_channels;

    /**
        领取后N日有效；如果设置了该值，则不需要设置优惠券的开始时间和结束时间 [有效期截止至领取日期+N天的23:59:59。例券设置有效期领取后5天有效，2018.1.1领取的券，有效期截止至2018.1.6 23:59:59； 例券设置有效期领取后0天有效，2018.1.1领取的券，有效期截止至2018.1.1 23:59:59]
     **/
    public $valid_days;

    /**
        优惠券活动描述，不超过100个中文字符
     **/
    public $description;

    /**
        [满减券特有，券类型为满减券时为必传参数]金额门槛，值为-1代表无门槛 [单位为分]
     **/
    public $start_fee;

    /**
        优惠券活动名称,不超过10个中文字符
     **/
    public $activity_name;

    /**
        自定义的优惠券使用详情(支持多条)
     **/
    public $details;

    /**
        优惠券优惠类型 [fullReduce:满减券;reduceTo:减至券，即一口价券]
     **/
    public $discount_type;

    /**
        [减至券特有]件数门槛，值为-1代表无门槛 [单位为整数]【已下线】
     **/
    public $start_count;

    /**
        [减至券特有]优惠件数，限制最多优惠N件，值为-1代表不限制优惠件数 [单位为整数]【已下线】
     **/
    public $count;


    public function getRangeType() : string{
        return $this->range_type;
    }

    public function setRangeType(string $rangeType){
        $this->range_type = $rangeType;
    }

    public function getLimitInfo() : AlibabaWdkMarketingCouponCreateactivityLimitInfo{
        return $this->limit_info;
    }

    public function setLimitInfo(AlibabaWdkMarketingCouponCreateactivityLimitInfo $limitInfo){
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

    public function getSendType() : string{
        return $this->send_type;
    }

    public function setSendType(string $sendType){
        $this->send_type = $sendType;
    }

    public function getLogoUrl() : string{
        return $this->logo_url;
    }

    public function setLogoUrl(string $logoUrl){
        $this->logo_url = $logoUrl;
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

    public function getApplicableCategories() : array{
        return $this->applicable_categories;
    }

    public function setApplicableCategories(array $applicableCategories){
        $this->applicable_categories = $applicableCategories;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getStartTime() : int{
        return $this->start_time;
    }

    public function setStartTime(int $startTime){
        $this->start_time = $startTime;
    }

    public function getApplyChannels() : array{
        return $this->apply_channels;
    }

    public function setApplyChannels(array $applyChannels){
        $this->apply_channels = $applyChannels;
    }

    public function getValidDays() : int{
        return $this->valid_days;
    }

    public function setValidDays(int $validDays){
        $this->valid_days = $validDays;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getStartFee() : int{
        return $this->start_fee;
    }

    public function setStartFee(int $startFee){
        $this->start_fee = $startFee;
    }

    public function getActivityName() : string{
        return $this->activity_name;
    }

    public function setActivityName(string $activityName){
        $this->activity_name = $activityName;
    }

    public function getDetails() : array{
        return $this->details;
    }

    public function setDetails(array $details){
        $this->details = $details;
    }

    public function getDiscountType() : string{
        return $this->discount_type;
    }

    public function setDiscountType(string $discountType){
        $this->discount_type = $discountType;
    }

    public function getStartCount() : int{
        return $this->start_count;
    }

    public function setStartCount(int $startCount){
        $this->start_count = $startCount;
    }

    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }


}

