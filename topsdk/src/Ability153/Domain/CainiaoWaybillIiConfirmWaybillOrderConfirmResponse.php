<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoWaybillIiConfirmWaybillOrderConfirmResponse {

    /**
        面单号
     **/
    public $waybill_code;


    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }


}

