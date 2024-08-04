<?php
namespace Topsdk\Topapi\Ability233\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability233\Domain\TaobaoLogisticsFulfilorderSearchErpSearchFulfilOrdersRequest;

class TaobaoLogisticsFulfilorderSearchRequest {

    /**
        搜索入参
     **/
    private $searchRequest;


    public function getSearchRequest() : TaobaoLogisticsFulfilorderSearchErpSearchFulfilOrdersRequest{
        return $this->searchRequest;
    }

    public function setSearchRequest(TaobaoLogisticsFulfilorderSearchErpSearchFulfilOrdersRequest $searchRequest){
        $this->searchRequest = $searchRequest;
    }


    public function getApiName() : string {
        return "taobao.logistics.fulfilorder.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->searchRequest)) {
            $requestParam["search_request"] = TopUtil::convertStruct($this->searchRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

