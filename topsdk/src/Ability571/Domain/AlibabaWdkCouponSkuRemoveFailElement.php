<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuRemoveFailElement {

    /**
        错误信息
     **/
    public $error_msg;

    /**
        参与者id
     **/
    public $participate_id;

    /**
        参与者名称
     **/
    public $participate_name;


    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getParticipateId() : string{
        return $this->participate_id;
    }

    public function setParticipateId(string $participateId){
        $this->participate_id = $participateId;
    }

    public function getParticipateName() : string{
        return $this->participate_name;
    }

    public function setParticipateName(string $participateName){
        $this->participate_name = $participateName;
    }


}

