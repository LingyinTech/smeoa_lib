<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbWaybillIPrintWaybillApplyPrintCheckRequest;

class TaobaoWlbWaybillIPrintRequest {

    /**
        打印请求
     **/
    private $waybillApplyPrintCheckRequest;


    public function getWaybillApplyPrintCheckRequest() : TaobaoWlbWaybillIPrintWaybillApplyPrintCheckRequest{
        return $this->waybillApplyPrintCheckRequest;
    }

    public function setWaybillApplyPrintCheckRequest(TaobaoWlbWaybillIPrintWaybillApplyPrintCheckRequest $waybillApplyPrintCheckRequest){
        $this->waybillApplyPrintCheckRequest = $waybillApplyPrintCheckRequest;
    }


    public function getApiName() : string {
        return "taobao.wlb.waybill.i.print";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->waybillApplyPrintCheckRequest)) {
            $requestParam["waybill_apply_print_check_request"] = TopUtil::convertStruct($this->waybillApplyPrintCheckRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

