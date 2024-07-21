<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbWaybillIFullupdateWaybillApplyFullUpdateRequest;

class TaobaoWlbWaybillIFullupdateRequest {

    /**
        更新面单信息请求
     **/
    private $waybillApplyFullUpdateRequest;


    public function getWaybillApplyFullUpdateRequest() : TaobaoWlbWaybillIFullupdateWaybillApplyFullUpdateRequest{
        return $this->waybillApplyFullUpdateRequest;
    }

    public function setWaybillApplyFullUpdateRequest(TaobaoWlbWaybillIFullupdateWaybillApplyFullUpdateRequest $waybillApplyFullUpdateRequest){
        $this->waybillApplyFullUpdateRequest = $waybillApplyFullUpdateRequest;
    }


    public function getApiName() : string {
        return "taobao.wlb.waybill.i.fullupdate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->waybillApplyFullUpdateRequest)) {
            $requestParam["waybill_apply_full_update_request"] = TopUtil::convertStruct($this->waybillApplyFullUpdateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

