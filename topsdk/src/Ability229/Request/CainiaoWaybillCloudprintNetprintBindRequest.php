<?php
namespace Topsdk\Topapi\Ability229\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability229\Domain\CainiaoWaybillCloudprintNetprintBindCloudPrinterBindRequest;

class CainiaoWaybillCloudprintNetprintBindRequest {

    /**
        req
     **/
    private $params;


    public function getParams() : CainiaoWaybillCloudprintNetprintBindCloudPrinterBindRequest{
        return $this->params;
    }

    public function setParams(CainiaoWaybillCloudprintNetprintBindCloudPrinterBindRequest $params){
        $this->params = $params;
    }


    public function getApiName() : string {
        return "cainiao.waybill.cloudprint.netprint.bind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->params)) {
            $requestParam["params"] = TopUtil::convertStruct($this->params);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

