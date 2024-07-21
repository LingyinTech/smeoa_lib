<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolActivityCreateSeparatePricingDiscountRule {

    /**
        是否为打折类型
     **/
    public $is_discount_rate;

    /**
        是否为减钱类型
     **/
    public $is_decrease;

    /**
        是否为一口价类型
     **/
    public $is_fix_price;


    public function getIsDiscountRate() : bool{
        return $this->is_discount_rate;
    }

    public function setIsDiscountRate(bool $isDiscountRate){
        $this->is_discount_rate = $isDiscountRate;
    }

    public function getIsDecrease() : bool{
        return $this->is_decrease;
    }

    public function setIsDecrease(bool $isDecrease){
        $this->is_decrease = $isDecrease;
    }

    public function getIsFixPrice() : bool{
        return $this->is_fix_price;
    }

    public function setIsFixPrice(bool $isFixPrice){
        $this->is_fix_price = $isFixPrice;
    }


}

