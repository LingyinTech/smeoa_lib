<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoWaybillIiProductRequest {

    /**
        快递公司code
     **/
    private $cpCode;


    public function getCpCode() : string{
        return $this->cpCode;
    }

    public function setCpCode(string $cpCode){
        $this->cpCode = $cpCode;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.product";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cpCode)) {
            $requestParam["cp_code"] = TopUtil::convertBasic($this->cpCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

