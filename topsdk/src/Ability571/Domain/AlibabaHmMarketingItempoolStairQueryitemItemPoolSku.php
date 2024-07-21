<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolStairQueryitemItemPoolSku {

    /**
        商品名称
     **/
    public $sku_name;

    /**
        商品skucode
     **/
    public $sku_code;

    /**
        换购价格
     **/
    public $exchange_price;

    /**
        换购限量
     **/
    public $exchange_total_limit;


    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

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

