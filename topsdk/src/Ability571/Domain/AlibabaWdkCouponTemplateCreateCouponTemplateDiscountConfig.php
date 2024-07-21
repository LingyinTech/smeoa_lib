<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateCouponTemplateDiscountConfig {

    /**
        是否减钱
     **/
    public $decrease;

    /**
        减钱金额
     **/
    public $decrease_money;

    /**
        是否打折
     **/
    public $discount;

    /**
        打折额度
     **/
    public $discount_rate;

    /**
        优惠后的固定价格
     **/
    public $fix_price_amount;

    /**
        是否固定价格
     **/
    public $fix_price;


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

    public function getFixPriceAmount() : int{
        return $this->fix_price_amount;
    }

    public function setFixPriceAmount(int $fixPriceAmount){
        $this->fix_price_amount = $fixPriceAmount;
    }

    public function getFixPrice() : bool{
        return $this->fix_price;
    }

    public function setFixPrice(bool $fixPrice){
        $this->fix_price = $fixPrice;
    }


}

