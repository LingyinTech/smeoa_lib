<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingCouponQueryitemsItemCouponSku {

    /**
        商品的skuCode
     **/
    public $sku_code;

    /**
        商品名称
     **/
    public $sku_name;

    /**
        淘宝item和shop的对应关系， k-itemId, v-shopId
     **/
    public $item_shop_relation;


    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

    public function getItemShopRelation() : array{
        return $this->item_shop_relation;
    }

    public function setItemShopRelation(array $itemShopRelation){
        $this->item_shop_relation = $itemShopRelation;
    }


}

