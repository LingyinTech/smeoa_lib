<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolActivityCreateCoverAllDiscountRule {

    /**
        每件商品一口价【分】
     **/
    public $each_fix_price;

    /**
        整体打折【600=6折】
     **/
    public $cover_all_discount_rate;

    /**
        整体减钱【分】
     **/
    public $cover_all_decrease_money;

    /**
        整体一口价【分】
     **/
    public $cover_all_fix_price;

    /**
        是否整体一口价
     **/
    public $is_cover_all_fix_price;

    /**
        是否整体减钱
     **/
    public $is_cover_all_decrease_money;

    /**
        是否整体打折
     **/
    public $is_cover_all_discount_rate;

    /**
        是否每件一口价
     **/
    public $is_each_fix_price;


    public function getEachFixPrice() : int{
        return $this->each_fix_price;
    }

    public function setEachFixPrice(int $eachFixPrice){
        $this->each_fix_price = $eachFixPrice;
    }

    public function getCoverAllDiscountRate() : int{
        return $this->cover_all_discount_rate;
    }

    public function setCoverAllDiscountRate(int $coverAllDiscountRate){
        $this->cover_all_discount_rate = $coverAllDiscountRate;
    }

    public function getCoverAllDecreaseMoney() : int{
        return $this->cover_all_decrease_money;
    }

    public function setCoverAllDecreaseMoney(int $coverAllDecreaseMoney){
        $this->cover_all_decrease_money = $coverAllDecreaseMoney;
    }

    public function getCoverAllFixPrice() : int{
        return $this->cover_all_fix_price;
    }

    public function setCoverAllFixPrice(int $coverAllFixPrice){
        $this->cover_all_fix_price = $coverAllFixPrice;
    }

    public function getIsCoverAllFixPrice() : bool{
        return $this->is_cover_all_fix_price;
    }

    public function setIsCoverAllFixPrice(bool $isCoverAllFixPrice){
        $this->is_cover_all_fix_price = $isCoverAllFixPrice;
    }

    public function getIsCoverAllDecreaseMoney() : bool{
        return $this->is_cover_all_decrease_money;
    }

    public function setIsCoverAllDecreaseMoney(bool $isCoverAllDecreaseMoney){
        $this->is_cover_all_decrease_money = $isCoverAllDecreaseMoney;
    }

    public function getIsCoverAllDiscountRate() : bool{
        return $this->is_cover_all_discount_rate;
    }

    public function setIsCoverAllDiscountRate(bool $isCoverAllDiscountRate){
        $this->is_cover_all_discount_rate = $isCoverAllDiscountRate;
    }

    public function getIsEachFixPrice() : bool{
        return $this->is_each_fix_price;
    }

    public function setIsEachFixPrice(bool $isEachFixPrice){
        $this->is_each_fix_price = $isEachFixPrice;
    }


}

