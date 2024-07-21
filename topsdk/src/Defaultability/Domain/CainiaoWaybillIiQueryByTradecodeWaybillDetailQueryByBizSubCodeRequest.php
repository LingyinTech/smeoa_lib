<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiQueryByTradecodeWaybillDetailQueryByBizSubCodeRequest {

    /**
        订单号
     **/
    public $biz_sub_code;

    /**
        请求id
     **/
    public $object_id;


    public function getBizSubCode() : string{
        return $this->biz_sub_code;
    }

    public function setBizSubCode(string $bizSubCode){
        $this->biz_sub_code = $bizSubCode;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }


}

