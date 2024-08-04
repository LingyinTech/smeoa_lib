<?php
namespace Topsdk\Topapi\Ability233\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability233\Domain\TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersRequest;
use Topsdk\Topapi\Ability233\Domain\TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersOption;

class TaobaoLogisticsReverseorderErpSearchRequest {

    /**
        搜索请求
     **/
    private $paramErpSearchReverseOrdersRequest;

    /**
        搜索查询选项
     **/
    private $paramErpSearchReverseOrdersOption;


    public function getParamErpSearchReverseOrdersRequest() : TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersRequest{
        return $this->paramErpSearchReverseOrdersRequest;
    }

    public function setParamErpSearchReverseOrdersRequest(TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersRequest $paramErpSearchReverseOrdersRequest){
        $this->paramErpSearchReverseOrdersRequest = $paramErpSearchReverseOrdersRequest;
    }

    public function getParamErpSearchReverseOrdersOption() : TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersOption{
        return $this->paramErpSearchReverseOrdersOption;
    }

    public function setParamErpSearchReverseOrdersOption(TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersOption $paramErpSearchReverseOrdersOption){
        $this->paramErpSearchReverseOrdersOption = $paramErpSearchReverseOrdersOption;
    }


    public function getApiName() : string {
        return "taobao.logistics.reverseorder.erp.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramErpSearchReverseOrdersRequest)) {
            $requestParam["param_erp_search_reverse_orders_request"] = TopUtil::convertStruct($this->paramErpSearchReverseOrdersRequest);
        }

        if (!TopUtil::checkEmpty($this->paramErpSearchReverseOrdersOption)) {
            $requestParam["param_erp_search_reverse_orders_option"] = TopUtil::convertStruct($this->paramErpSearchReverseOrdersOption);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

