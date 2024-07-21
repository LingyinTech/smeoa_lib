<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbWaybillIQuerydetailWaybillDetailQueryRequest;

class TaobaoWlbWaybillIQuerydetailRequest {

    /**
        面单查询请求
     **/
    private $waybillDetailQueryRequest;


    public function getWaybillDetailQueryRequest() : TaobaoWlbWaybillIQuerydetailWaybillDetailQueryRequest{
        return $this->waybillDetailQueryRequest;
    }

    public function setWaybillDetailQueryRequest(TaobaoWlbWaybillIQuerydetailWaybillDetailQueryRequest $waybillDetailQueryRequest){
        $this->waybillDetailQueryRequest = $waybillDetailQueryRequest;
    }


    public function getApiName() : string {
        return "taobao.wlb.waybill.i.querydetail";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->waybillDetailQueryRequest)) {
            $requestParam["waybill_detail_query_request"] = TopUtil::convertStruct($this->waybillDetailQueryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

