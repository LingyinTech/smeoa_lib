<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolCreateactivityRulestairs {

    /**
        活动是否上不封顶
     **/
    public $enable_multiple;

    /**
        是否使用满元条件，不能与满件、N件Y折同时使用。此选项为true时，countAt和countBegin必须为false
     **/
    public $amount_at;

    /**
        满多少元[单位为分，传入700，代表满7元]，amountAt为true时，必须设置
     **/
    public $amount;

    /**
        是否使用满件条件，不能与满元、N件Y折同时使用。此选项为true时，countBegin和amountAt必须为false
     **/
    public $count_at;

    /**
        是否使用N件Y折或N件Y元，不能与满元、满件同时使用。此选项为true时，countAt和amountAt必须为false
     **/
    public $count_begin;

    /**
        满多少件或者第多少件开始参与活动[传入4，代表满4件打折或者第4件打折]。该值与countBegin和countAt相关，如果countBegin为true，则为N件Y折活动，如果countAt为true，则为满件活动
     **/
    public $count;

    /**
        是否使用减钱功能，不能与打折功能同时使用，此选项为true时，discount必须为false
     **/
    public $decrease;

    /**
        减多少元[单位为分，传入700，代表减7元]，decrease为true时，必须设置
     **/
    public $decrease_money;

    /**
        是否使用打折功能，不能与减钱功能同时使用，此选项为true时，decrease必须为false
     **/
    public $discount;

    /**
        打几折[单位为分，传入900，代表打9折]，discount为true时，必须设置
     **/
    public $discount_rate;

    /**
        是否为换购活动
     **/
    public $is_exchange;

    /**
        可换购的数量
     **/
    public $can_extra_item_num;

    /**
        是否一口价
     **/
    public $fix_price;

    /**
        一口价[单位为分]
     **/
    public $fix_price_amount;


    public function getEnableMultiple() : bool{
        return $this->enable_multiple;
    }

    public function setEnableMultiple(bool $enableMultiple){
        $this->enable_multiple = $enableMultiple;
    }

    public function getAmountAt() : bool{
        return $this->amount_at;
    }

    public function setAmountAt(bool $amountAt){
        $this->amount_at = $amountAt;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getCountAt() : bool{
        return $this->count_at;
    }

    public function setCountAt(bool $countAt){
        $this->count_at = $countAt;
    }

    public function getCountBegin() : bool{
        return $this->count_begin;
    }

    public function setCountBegin(bool $countBegin){
        $this->count_begin = $countBegin;
    }

    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getDecrease() : bool{
        return $this->decrease;
    }

    public function setDecrease(bool $decrease){
        $this->decrease = $decrease;
    }

    public function getDecreaseMoney() : int{
        return $this->decrease_money;
    }

    public function setDecreaseMoney(int $decreaseMoney){
        $this->decrease_money = $decreaseMoney;
    }

    public function getDiscount() : bool{
        return $this->discount;
    }

    public function setDiscount(bool $discount){
        $this->discount = $discount;
    }

    public function getDiscountRate() : int{
        return $this->discount_rate;
    }

    public function setDiscountRate(int $discountRate){
        $this->discount_rate = $discountRate;
    }

    public function getIsExchange() : bool{
        return $this->is_exchange;
    }

    public function setIsExchange(bool $isExchange){
        $this->is_exchange = $isExchange;
    }

    public function getCanExtraItemNum() : int{
        return $this->can_extra_item_num;
    }

    public function setCanExtraItemNum(int $canExtraItemNum){
        $this->can_extra_item_num = $canExtraItemNum;
    }

    public function getFixPrice() : bool{
        return $this->fix_price;
    }

    public function setFixPrice(bool $fixPrice){
        $this->fix_price = $fixPrice;
    }

    public function getFixPriceAmount() : int{
        return $this->fix_price_amount;
    }

    public function setFixPriceAmount(int $fixPriceAmount){
        $this->fix_price_amount = $fixPriceAmount;
    }


}

