<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeOrderskuUpdateOrder {

    /**
        子订单编号
     **/
    public $oid;

    /**
        订单修改时间，目前只有taobao.trade.ordersku.update会返回此字段。
     **/
    public $modified;


    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

