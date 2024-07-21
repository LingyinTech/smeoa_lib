<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbWaybillICancelWaybillApplyCancelRequest;

class TaobaoWlbWaybillICancelRequest {

    /**
        取消接口入参
     **/
    private $waybillApplyCancelRequest;


    public function getWaybillApplyCancelRequest() : TaobaoWlbWaybillICancelWaybillApplyCancelRequest{
        return $this->waybillApplyCancelRequest;
    }

    public function setWaybillApplyCancelRequest(TaobaoWlbWaybillICancelWaybillApplyCancelRequest $waybillApplyCancelRequest){
        $this->waybillApplyCancelRequest = $waybillApplyCancelRequest;
    }


    public function getApiName() : string {
        return "taobao.wlb.waybill.i.cancel";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->waybillApplyCancelRequest)) {
            $requestParam["waybill_apply_cancel_request"] = TopUtil::convertStruct($this->waybillApplyCancelRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

