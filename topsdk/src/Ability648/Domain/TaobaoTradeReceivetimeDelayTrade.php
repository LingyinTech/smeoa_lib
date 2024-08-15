<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeReceivetimeDelayTrade {

    /**
        交易编号 (父订单的交易编号)
     **/
    public $tid;

    /**
        交易修改时间(用户对订单的任何修改都会更新此字段)。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $modified;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

