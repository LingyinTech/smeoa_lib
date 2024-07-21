<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemAddItem {

    /**
        商品iid
     **/
    public $iid;

    /**
        商品数字id
     **/
    public $num_iid;

    /**
        Item的发布时间，目前仅供taobao.item.add和taobao.item.get可用
     **/
    public $created;


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

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

