<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoWaybillIiCancelRequest {

    /**
        快递公司code
     **/
    private $cpCode;

    /**
        电子面单号
     **/
    private $waybillCode;


    public function getCpCode() : string{
        return $this->cpCode;
    }

    public function setCpCode(string $cpCode){
        $this->cpCode = $cpCode;
    }

    public function getWaybillCode() : string{
        return $this->waybillCode;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybillCode = $waybillCode;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.cancel";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cpCode)) {
            $requestParam["cp_code"] = TopUtil::convertBasic($this->cpCode);
        }

        if (!TopUtil::checkEmpty($this->waybillCode)) {
            $requestParam["waybill_code"] = TopUtil::convertBasic($this->waybillCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

