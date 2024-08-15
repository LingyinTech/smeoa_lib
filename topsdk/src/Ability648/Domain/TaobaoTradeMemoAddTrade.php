<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeMemoAddTrade {

    /**
        交易编号 (父订单的交易编号)
     **/
    public $tid;

    /**
        交易创建时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $created;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

