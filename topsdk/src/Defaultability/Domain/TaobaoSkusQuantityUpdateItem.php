<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSkusQuantityUpdateItem {

    /**
        商品id(注意：iid近期即将废弃，请用num_iid参数)
     **/
    public $iid;

    /**
        商品数字id
     **/
    public $num_iid;

    /**
        商品修改时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    public $modified;

    /**
        商品数量
     **/
    public $num;

    /**
        Sku列表。fields中只设置sku可以返回Sku结构体中所有字段，如果设置为sku.sku_id、sku.properties、sku.quantity等形式就只会返回相应的字段
     **/
    public $skus;


    public function getIid() : string{
        return $this->iid;
    }

    public function setIid(string $iid){
        $this->iid = $iid;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getSkus() : array{
        return $this->skus;
    }

    public function setSkus(array $skus){
        $this->skus = $skus;
    }


}

