<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbWaybillIGetWaybillApplyNewRequest;

class TaobaoWlbWaybillIGetRequest {

    /**
        面单申请
     **/
    private $waybillApplyNewRequest;


    public function getWaybillApplyNewRequest() : TaobaoWlbWaybillIGetWaybillApplyNewRequest{
        return $this->waybillApplyNewRequest;
    }

    public function setWaybillApplyNewRequest(TaobaoWlbWaybillIGetWaybillApplyNewRequest $waybillApplyNewRequest){
        $this->waybillApplyNewRequest = $waybillApplyNewRequest;
    }


    public function getApiName() : string {
        return "taobao.wlb.waybill.i.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->waybillApplyNewRequest)) {
            $requestParam["waybill_apply_new_request"] = TopUtil::convertStruct($this->waybillApplyNewRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

