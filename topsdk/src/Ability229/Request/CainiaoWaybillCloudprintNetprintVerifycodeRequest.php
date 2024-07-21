<?php
namespace Topsdk\Topapi\Ability229\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability229\Domain\CainiaoWaybillCloudprintNetprintVerifycodeCloudPrinterVerifyCodeRequest;

class CainiaoWaybillCloudprintNetprintVerifycodeRequest {

    /**
        请求
     **/
    private $printer;


    public function getPrinter() : CainiaoWaybillCloudprintNetprintVerifycodeCloudPrinterVerifyCodeRequest{
        return $this->printer;
    }

    public function setPrinter(CainiaoWaybillCloudprintNetprintVerifycodeCloudPrinterVerifyCodeRequest $printer){
        $this->printer = $printer;
    }


    public function getApiName() : string {
        return "cainiao.waybill.cloudprint.netprint.verifycode";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->printer)) {
            $requestParam["printer"] = TopUtil::convertStruct($this->printer);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

