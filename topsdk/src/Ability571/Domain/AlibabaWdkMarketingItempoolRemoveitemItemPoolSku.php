<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolRemoveitemItemPoolSku {

    /**
        商品skuCode
     **/
    public $sku_code;

    /**
        逻辑分组ID
     **/
    public $logic_group_number;


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


}

