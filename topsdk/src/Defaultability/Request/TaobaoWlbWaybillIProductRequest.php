<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbWaybillIProductWaybillProductTypeRequest;

class TaobaoWlbWaybillIProductRequest {

    /**
        查询物流商电子面单产品类型入参
     **/
    private $waybillProductTypeRequest;


    public function getWaybillProductTypeRequest() : TaobaoWlbWaybillIProductWaybillProductTypeRequest{
        return $this->waybillProductTypeRequest;
    }

    public function setWaybillProductTypeRequest(TaobaoWlbWaybillIProductWaybillProductTypeRequest $waybillProductTypeRequest){
        $this->waybillProductTypeRequest = $waybillProductTypeRequest;
    }


    public function getApiName() : string {
        return "taobao.wlb.waybill.i.product";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->waybillProductTypeRequest)) {
            $requestParam["waybill_product_type_request"] = TopUtil::convertStruct($this->waybillProductTypeRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

