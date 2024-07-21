<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoProductAddProduct {

    /**
        产品ID
     **/
    public $product_id;

    /**
        创建时间.格式:yyyy-mm-dd hh:mm:ss
     **/
    public $created;


    public function getProductId() : int{
        return $this->product_id;
    }

    public function setProductId(int $productId){
        $this->product_id = $productId;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

