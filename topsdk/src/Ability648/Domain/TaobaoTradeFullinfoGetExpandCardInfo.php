<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetExpandCardInfo {

    /**
        买卡订单本金
     **/
    public $basic_price;

    /**
        买卡订单权益金
     **/
    public $expand_price;

    /**
        用卡订单使用的本金
     **/
    public $basic_price_used;

    /**
        用卡订单使用的权益金
     **/
    public $expand_price_used;


    public function getBasicPrice() : string{
        return $this->basic_price;
    }

    public function setBasicPrice(string $basicPrice){
        $this->basic_price = $basicPrice;
    }

    public function getExpandPrice() : string{
        return $this->expand_price;
    }

    public function setExpandPrice(string $expandPrice){
        $this->expand_price = $expandPrice;
    }

    public function getBasicPriceUsed() : string{
        return $this->basic_price_used;
    }

    public function setBasicPriceUsed(string $basicPriceUsed){
        $this->basic_price_used = $basicPriceUsed;
    }

    public function getExpandPriceUsed() : string{
        return $this->expand_price_used;
    }

    public function setExpandPriceUsed(string $expandPriceUsed){
        $this->expand_price_used = $expandPriceUsed;
    }


}

