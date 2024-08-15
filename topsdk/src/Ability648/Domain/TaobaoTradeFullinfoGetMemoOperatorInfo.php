<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetMemoOperatorInfo {

    /**
        备注创建者ID
     **/
    public $operator_id;

    /**
        备注创建者昵称
     **/
    public $operator_nick;


    public function getOperatorId() : int{
        return $this->operator_id;
    }

    public function setOperatorId(int $operatorId){
        $this->operator_id = $operatorId;
    }

    public function getOperatorNick() : string{
        return $this->operator_nick;
    }

    public function setOperatorNick(string $operatorNick){
        $this->operator_nick = $operatorNick;
    }


}

