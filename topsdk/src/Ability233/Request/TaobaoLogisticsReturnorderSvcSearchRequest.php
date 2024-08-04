<?php
namespace Topsdk\Topapi\Ability233\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability233\Domain\TaobaoLogisticsReturnorderSvcSearchReturnLogisticsInfoQueryReq;

class TaobaoLogisticsReturnorderSvcSearchRequest {

    /**
        查询请求
     **/
    private $returnOrderQueryReq;


    public function getReturnOrderQueryReq() : TaobaoLogisticsReturnorderSvcSearchReturnLogisticsInfoQueryReq{
        return $this->returnOrderQueryReq;
    }

    public function setReturnOrderQueryReq(TaobaoLogisticsReturnorderSvcSearchReturnLogisticsInfoQueryReq $returnOrderQueryReq){
        $this->returnOrderQueryReq = $returnOrderQueryReq;
    }


    public function getApiName() : string {
        return "taobao.logistics.returnorder.svc.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->returnOrderQueryReq)) {
            $requestParam["return_order_query_req"] = TopUtil::convertStruct($this->returnOrderQueryReq);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

