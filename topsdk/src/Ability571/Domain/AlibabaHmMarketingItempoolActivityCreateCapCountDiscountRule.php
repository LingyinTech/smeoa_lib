<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolActivityCreateCapCountDiscountRule {

    /**
        指定件数每件一口价【分】
     **/
    public $cap_count_each_fix_price;

    /**
        指定件数整体打几折【600=6折】
     **/
    public $cap_count_discount_rate;

    /**
        指定件数整体减钱【分】
     **/
    public $cap_count_decrease_money;

    /**
        指定件数整体一口价【分】
     **/
    public $cap_count_fix_price;

    /**
        是否指定件数整体一口价
     **/
    public $is_cap_count_fix_price;

    /**
        是否指定件数整体减钱
     **/
    public $is_cap_count_decrease_money;

    /**
        是否指定件数整体打折
     **/
    public $is_cap_count_discount_rate;

    /**
        是否指定件数每件一口价
     **/
    public $is_cap_count_each_fix_price;


    public function getCapCountEachFixPrice() : int{
        return $this->cap_count_each_fix_price;
    }

    public function setCapCountEachFixPrice(int $capCountEachFixPrice){
        $this->cap_count_each_fix_price = $capCountEachFixPrice;
    }

    public function getCapCountDiscountRate() : int{
        return $this->cap_count_discount_rate;
    }

    public function setCapCountDiscountRate(int $capCountDiscountRate){
        $this->cap_count_discount_rate = $capCountDiscountRate;
    }

    public function getCapCountDecreaseMoney() : int{
        return $this->cap_count_decrease_money;
    }

    public function setCapCountDecreaseMoney(int $capCountDecreaseMoney){
        $this->cap_count_decrease_money = $capCountDecreaseMoney;
    }

    public function getCapCountFixPrice() : int{
        return $this->cap_count_fix_price;
    }

    public function setCapCountFixPrice(int $capCountFixPrice){
        $this->cap_count_fix_price = $capCountFixPrice;
    }

    public function getIsCapCountFixPrice() : bool{
        return $this->is_cap_count_fix_price;
    }

    public function setIsCapCountFixPrice(bool $isCapCountFixPrice){
        $this->is_cap_count_fix_price = $isCapCountFixPrice;
    }

    public function getIsCapCountDecreaseMoney() : bool{
        return $this->is_cap_count_decrease_money;
    }

    public function setIsCapCountDecreaseMoney(bool $isCapCountDecreaseMoney){
        $this->is_cap_count_decrease_money = $isCapCountDecreaseMoney;
    }

    public function getIsCapCountDiscountRate() : bool{
        return $this->is_cap_count_discount_rate;
    }

    public function setIsCapCountDiscountRate(bool $isCapCountDiscountRate){
        $this->is_cap_count_discount_rate = $isCapCountDiscountRate;
    }

    public function getIsCapCountEachFixPrice() : bool{
        return $this->is_cap_count_each_fix_price;
    }

    public function setIsCapCountEachFixPrice(bool $isCapCountEachFixPrice){
        $this->is_cap_count_each_fix_price = $isCapCountEachFixPrice;
    }


}

