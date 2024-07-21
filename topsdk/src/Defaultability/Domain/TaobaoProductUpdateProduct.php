<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoProductUpdateProduct {

    /**
        产品ID
     **/
    public $product_id;

    /**
        修改时间.格式:yyyy-mm-dd hh:mm:ss
     **/
    public $modified;


    public function getProductId() : int{
        return $this->product_id;
    }

    public function setProductId(int $productId){
        $this->product_id = $productId;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

