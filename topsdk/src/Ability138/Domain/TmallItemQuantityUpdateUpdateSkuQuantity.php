<?php
namespace Topsdk\Topapi\Ability138\Domain;

class TmallItemQuantityUpdateUpdateSkuQuantity {

    /**
        Sku的商家外部id，用于指定被修改库存的SKU
     **/
    public $outer_id;

    /**
        Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充，用于指定被修改库存的SKU
     **/
    public $properties;

    /**
        SKU属于这个sku的商品的库存；增量编辑方式支持正数、负数
     **/
    public $quantity;

    /**
        SkuID，用于指定被修改库存的
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

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }


}

