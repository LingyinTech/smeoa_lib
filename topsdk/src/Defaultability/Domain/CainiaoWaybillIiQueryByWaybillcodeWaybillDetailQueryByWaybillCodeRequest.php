<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiQueryByWaybillcodeWaybillDetailQueryByWaybillCodeRequest {

    /**
        快递公司code
     **/
    public $cp_code;

    /**
        请求id
     **/
    public $object_id;

    /**
        电子面单号
     **/
    public $waybill_code;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }


}

