<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TmallItemOuteridUpdateUpdateSkuOuterId {

    /**
        被更新的Sku的商家外部id
     **/
    public $outer_id;

    /**
        Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充；如果填写将以属性对形式查找被更新SKU
     **/
    public $properties;

    /**
        SkuID，如果填写，将以SKUID查找被更新的SKU
     **/
    public $sku_id;


    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }


}

