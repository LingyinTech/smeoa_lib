<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsSignnameQueryQuerySmsSignDTO {

    /**
        拒绝
     **/
    public $sign_status;

    /**
        被拒绝的原因
     **/
    public $reason;

    /**
        申请的签名
     **/
    public $sign_name;

    /**
        签名创建时间
     **/
    public $create_date;


    public function getSignStatus() : int{
        return $this->sign_status;
    }

    public function setSignStatus(int $signStatus){
        $this->sign_status = $signStatus;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getSignName() : string{
        return $this->sign_name;
    }

    public function setSignName(string $signName){
        $this->sign_name = $signName;
    }

    public function getCreateDate() : string{
        return $this->create_date;
    }

    public function setCreateDate(string $createDate){
        $this->create_date = $createDate;
    }


}

