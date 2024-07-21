<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingDiscountItemRemoveAsyncItemDiscountSku {

    /**
        商品的skuCode
     **/
    public $sku_code;


    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }


}

