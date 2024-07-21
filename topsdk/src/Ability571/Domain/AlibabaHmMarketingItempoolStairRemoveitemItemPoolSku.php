<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolStairRemoveitemItemPoolSku {

    /**
        商品skucode
     **/
    public $sku_code;


    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }


}

