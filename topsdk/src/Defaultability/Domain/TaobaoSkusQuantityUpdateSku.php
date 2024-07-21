<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSkusQuantityUpdateSku {

    /**
        sku的id
     **/
    public $sku_id;

    /**
        sku最后修改日期 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        属于这个sku的商品的数量，
     **/
    public $quantity;


    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }


}

