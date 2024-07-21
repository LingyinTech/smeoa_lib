<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolActivityCreateCountAtDiscountRule {

    /**
        第N件折扣率【600=6折】
     **/
    public $count_at_discount_rate;

    /**
        第N件减钱【分】
     **/
    public $count_at_decrease_money;

    /**
        第N件一口价【分】
     **/
    public $count_at_fix_price;

    /**
        是否第N建一口价
     **/
    public $is_count_at_fix_price;

    /**
        是否第N件减钱
     **/
    public $is_count_at_decrease_money;

    /**
        是否第N件打折
     **/
    public $is_count_at_discount_rate;


    public function getCountAtDiscountRate() : int{
        return $this->count_at_discount_rate;
    }

    public function setCountAtDiscountRate(int $countAtDiscountRate){
        $this->count_at_discount_rate = $countAtDiscountRate;
    }

    public function getCountAtDecreaseMoney() : int{
        return $this->count_at_decrease_money;
    }

    public function setCountAtDecreaseMoney(int $countAtDecreaseMoney){
        $this->count_at_decrease_money = $countAtDecreaseMoney;
    }

    public function getCountAtFixPrice() : int{
        return $this->count_at_fix_price;
    }

    public function setCountAtFixPrice(int $countAtFixPrice){
        $this->count_at_fix_price = $countAtFixPrice;
    }

    public function getIsCountAtFixPrice() : bool{
        return $this->is_count_at_fix_price;
    }

    public function setIsCountAtFixPrice(bool $isCountAtFixPrice){
        $this->is_count_at_fix_price = $isCountAtFixPrice;
    }

    public function getIsCountAtDecreaseMoney() : bool{
        return $this->is_count_at_decrease_money;
    }

    public function setIsCountAtDecreaseMoney(bool $isCountAtDecreaseMoney){
        $this->is_count_at_decrease_money = $isCountAtDecreaseMoney;
    }

    public function getIsCountAtDiscountRate() : bool{
        return $this->is_count_at_discount_rate;
    }

    public function setIsCountAtDiscountRate(bool $isCountAtDiscountRate){
        $this->is_count_at_discount_rate = $isCountAtDiscountRate;
    }


}

