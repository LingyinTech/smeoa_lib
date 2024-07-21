<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolStairAdditemItemPoolSku {

    /**
        商品skucode
     **/
    public $sku_code;

    /**
        单位为分
     **/
    public $exchange_price;

    /**
        换购商品总数限制
     **/
    public $exchange_total_limit;


    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getExchangePrice() : int{
        return $this->exchange_price;
    }

    public function setExchangePrice(int $exchangePrice){
        $this->exchange_price = $exchangePrice;
    }

    public function getExchangeTotalLimit() : int{
        return $this->exchange_total_limit;
    }

    public function setExchangeTotalLimit(int $exchangeTotalLimit){
        $this->exchange_total_limit = $exchangeTotalLimit;
    }


}

