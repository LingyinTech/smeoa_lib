<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolItemAddAsyncItemPoolSku {

    /**
        一口价【分】
     **/
    public $fix_price;

    /**
        打折【如700,表示打7折】
     **/
    public $discount_rate;

    /**
        减钱【分】
     **/
    public $decrease_money;

    /**
        商家阶梯下分组序号
     **/
    public $logic_group_number;

    /**
        商品编码
     **/
    public $sku_code;

    /**
        是否减钱
     **/
    public $is_decrease_money;

    /**
        是否打折
     **/
    public $is_discount_rate;

    /**
        是否一口价
     **/
    public $is_fix_price;


    public function getFixPrice() : int{
        return $this->fix_price;
    }

    public function setFixPrice(int $fixPrice){
        $this->fix_price = $fixPrice;
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

    public function getLogicGroupNumber() : int{
        return $this->logic_group_number;
    }

    public function setLogicGroupNumber(int $logicGroupNumber){
        $this->logic_group_number = $logicGroupNumber;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getIsDecreaseMoney() : bool{
        return $this->is_decrease_money;
    }

    public function setIsDecreaseMoney(bool $isDecreaseMoney){
        $this->is_decrease_money = $isDecreaseMoney;
    }

    public function getIsDiscountRate() : bool{
        return $this->is_discount_rate;
    }

    public function setIsDiscountRate(bool $isDiscountRate){
        $this->is_discount_rate = $isDiscountRate;
    }

    public function getIsFixPrice() : bool{
        return $this->is_fix_price;
    }

    public function setIsFixPrice(bool $isFixPrice){
        $this->is_fix_price = $isFixPrice;
    }


}

