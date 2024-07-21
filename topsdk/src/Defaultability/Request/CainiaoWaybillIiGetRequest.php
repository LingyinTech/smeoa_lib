<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\CainiaoWaybillIiGetWaybillCloudPrintApplyNewRequest;

class CainiaoWaybillIiGetRequest {

    /**
        入参信息
     **/
    private $paramWaybillCloudPrintApplyNewRequest;


    public function getParamWaybillCloudPrintApplyNewRequest() : CainiaoWaybillIiGetWaybillCloudPrintApplyNewRequest{
        return $this->paramWaybillCloudPrintApplyNewRequest;
    }

    public function setParamWaybillCloudPrintApplyNewRequest(CainiaoWaybillIiGetWaybillCloudPrintApplyNewRequest $paramWaybillCloudPrintApplyNewRequest){
        $this->paramWaybillCloudPrintApplyNewRequest = $paramWaybillCloudPrintApplyNewRequest;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramWaybillCloudPrintApplyNewRequest)) {
            $requestParam["param_waybill_cloud_print_apply_new_request"] = TopUtil::convertStruct($this->paramWaybillCloudPrintApplyNewRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

