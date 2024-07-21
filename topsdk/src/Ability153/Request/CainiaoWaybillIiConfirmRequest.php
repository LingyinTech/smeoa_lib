<?php
namespace Topsdk\Topapi\Ability153\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability153\Domain\CainiaoWaybillIiConfirmWaybillOrderConfirmRequest;

class CainiaoWaybillIiConfirmRequest {

    /**
        订单确认信息
     **/
    private $paramWaybillOrderConfirmRequest;


    public function getParamWaybillOrderConfirmRequest() : CainiaoWaybillIiConfirmWaybillOrderConfirmRequest{
        return $this->paramWaybillOrderConfirmRequest;
    }

    public function setParamWaybillOrderConfirmRequest(CainiaoWaybillIiConfirmWaybillOrderConfirmRequest $paramWaybillOrderConfirmRequest){
        $this->paramWaybillOrderConfirmRequest = $paramWaybillOrderConfirmRequest;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.confirm";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramWaybillOrderConfirmRequest)) {
            $requestParam["param_waybill_order_confirm_request"] = TopUtil::convertStruct($this->paramWaybillOrderConfirmRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

