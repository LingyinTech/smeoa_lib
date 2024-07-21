<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolItemRemoveAsyncItemPoolSku {

    /**
        商品编码
     **/
    public $sku_code;

    /**
        商家阶梯序号
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

