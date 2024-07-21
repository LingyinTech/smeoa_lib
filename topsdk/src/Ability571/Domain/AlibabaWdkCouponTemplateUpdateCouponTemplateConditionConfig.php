<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateUpdateCouponTemplateConditionConfig {

    /**
        门槛金额
     **/
    public $amount;

    /**
        是否生效满元条件
     **/
    public $amount_at;

    /**
        生效类目
     **/
    public $categories;

    /**
        门槛件数
     **/
    public $count;

    /**
        是否生效满件条件
     **/
    public $count_at;

    /**
        是否限制本人使用
     **/
    public $only_member_self;

    /**
        券的使用范围 COUPON_RANGE_STORE(1, "rangeShop", "店铺券"), COUPON_RANGE_ITEM(2, "rangeItem", "商品券"), COUPON_RANGE_CATEGORY(3, "rangeCategory", "品类券"), COUPON_RANGE_SELLER(307,"rangeSeller", "卖家券"),
     **/
    public $range_type;

    /**
        生效门店
     **/
    public $shop_ids;

    /**
        生效终端:  1.app 2.pos
     **/
    public $terminals;

    /**
        人群信息
     **/
    public $user_crowd_config;

    /**
        单笔订单最大可用张数
     **/
    public $max_use_count_per_order;

    /**
        生效商家类目
     **/
    public $merchant_categories;


    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getAmountAt() : bool{
        return $this->amount_at;
    }

    public function setAmountAt(bool $amountAt){
        $this->amount_at = $amountAt;
    }

    public function getCategories() : array{
        return $this->categories;
    }

    public function setCategories(array $categories){
        $this->categories = $categories;
    }

    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getCountAt() : bool{
        return $this->count_at;
    }

    public function setCountAt(bool $countAt){
        $this->count_at = $countAt;
    }

    public function getOnlyMemberSelf() : bool{
        return $this->only_member_self;
    }

    public function setOnlyMemberSelf(bool $onlyMemberSelf){
        $this->only_member_self = $onlyMemberSelf;
    }

    public function getRangeType() : int{
        return $this->range_type;
    }

    public function setRangeType(int $rangeType){
        $this->range_type = $rangeType;
    }

    public function getShopIds() : array{
        return $this->shop_ids;
    }

    public function setShopIds(array $shopIds){
        $this->shop_ids = $shopIds;
    }

    public function getTerminals() : array{
        return $this->terminals;
    }

    public function setTerminals(array $terminals){
        $this->terminals = $terminals;
    }

    public function getUserCrowdConfig() : AlibabaWdkCouponTemplateUpdateCouponTemplateUserCrowdConfig{
        return $this->user_crowd_config;
    }

    public function setUserCrowdConfig(AlibabaWdkCouponTemplateUpdateCouponTemplateUserCrowdConfig $userCrowdConfig){
        $this->user_crowd_config = $userCrowdConfig;
    }

    public function getMaxUseCountPerOrder() : int{
        return $this->max_use_count_per_order;
    }

    public function setMaxUseCountPerOrder(int $maxUseCountPerOrder){
        $this->max_use_count_per_order = $maxUseCountPerOrder;
    }

    public function getMerchantCategories() : array{
        return $this->merchant_categories;
    }

    public function setMerchantCategories(array $merchantCategories){
        $this->merchant_categories = $merchantCategories;
    }


}

