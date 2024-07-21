<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolAdditemItemPoolSku {

    /**
        商品的skuCode
     **/
    public $sku_code;

    /**
        逻辑分组ID
     **/
    public $logic_group_number;

    /**
        是否为一口价
     **/
    public $is_fix_price;

    /**
        一口价金额【分】
     **/
    public $fix_price;

    /**
        是否为商品折扣
     **/
    public $is_discount_rate;

    /**
        折扣率，300=3折
     **/
    public $discount_rate;

    /**
        是否为减钱
     **/
    public $is_decrease_money;

    /**
        减钱【元】
     **/
    public $decrease_money;


    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getLogicGroupNumber() : int{
        return $this->logic_group_number;
    }

    public function setLogicGroupNumber(int $logicGroupNumber){
        $this->logic_group_number = $logicGroupNumber;
    }

    public function getIsFixPrice() : bool{
        return $this->is_fix_price;
    }

    public function setIsFixPrice(bool $isFixPrice){
        $this->is_fix_price = $isFixPrice;
    }

    public function getFixPrice() : int{
        return $this->fix_price;
    }

    public function setFixPrice(int $fixPrice){
        $this->fix_price = $fixPrice;
    }

    public function getIsDiscountRate() : bool{
        return $this->is_discount_rate;
    }

    public function setIsDiscountRate(bool $isDiscountRate){
        $this->is_discount_rate = $isDiscountRate;
    }

    public function getDiscountRate() : int{
        return $this->discount_rate;
    }

    public function setDiscountRate(int $discountRate){
        $this->discount_rate = $discountRate;
    }

    public function getIsDecreaseMoney() : bool{
        return $this->is_decrease_money;
    }

    public function setIsDecreaseMoney(bool $isDecreaseMoney){
        $this->is_decrease_money = $isDecreaseMoney;
    }

    public function getDecreaseMoney() : int{
        return $this->decrease_money;
    }

    public function setDecreaseMoney(int $decreaseMoney){
        $this->decrease_money = $decreaseMoney;
    }


}

