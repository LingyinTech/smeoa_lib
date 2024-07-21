<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoItemSkuUpdateSku {

    /**
        sku所属商品id(注意：iid近期即将废弃，请用num_iid参数)
     **/
    public $iid;

    /**
        sku所属商品数字id
     **/
    public $num_iid;

    /**
        sku最后修改日期 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        sku的id
     **/
    public $sku_id;


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

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }


}

