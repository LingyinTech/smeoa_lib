<?php
namespace Topsdk\Topapi\Ability229\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability229\Domain\CainiaoWaybillCloudprintNetprintPrintCloudPrinterPrintRequest;

class CainiaoWaybillCloudprintNetprintPrintRequest {

    /**
        请求
     **/
    private $printerPrintData;


    public function getPrinterPrintData() : CainiaoWaybillCloudprintNetprintPrintCloudPrinterPrintRequest{
        return $this->printerPrintData;
    }

    public function setPrinterPrintData(CainiaoWaybillCloudprintNetprintPrintCloudPrinterPrintRequest $printerPrintData){
        $this->printerPrintData = $printerPrintData;
    }


    public function getApiName() : string {
        return "cainiao.waybill.cloudprint.netprint.print";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->printerPrintData)) {
            $requestParam["printer_print_data"] = TopUtil::convertStruct($this->printerPrintData);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

