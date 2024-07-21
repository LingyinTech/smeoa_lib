<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradesSoldQueryRequest {

    /**
        查询条件列表，多个条件之间是OR关系，最多支持20个。receiver_name、receiver_mobile、receiver_phone至少有一个值不为空。
     **/
    private $queryList;

    /**
        业务场景编码。不同场景，策略不同。请根据产品功能选择相应的场景编号。可选的场景：1001(客服咨询)、1002(售后服务)，<a href="https://open.taobao.com/doc.htm?docId=120186&docType=1" target="_blank">详情点击</a>
     **/
    private $scene;

    /**
        订单类型，默认值为1，可选值为：交易(1)，分销(2)，换货(3)
     **/
    private $orderType;


    public function getQueryList() : array{
        return $this->queryList;
    }

    public function setQueryList(array $queryList){
        $this->queryList = $queryList;
    }

    public function getScene() : string{
        return $this->scene;
    }

    public function setScene(string $scene){
        $this->scene = $scene;
    }

    public function getOrderType() : string{
        return $this->orderType;
    }

    public function setOrderType(string $orderType){
        $this->orderType = $orderType;
    }


    public function getApiName() : string {
        return "taobao.trades.sold.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->queryList)) {
            $requestParam["query_list"] = TopUtil::convertStructList($this->queryList);
        }

        if (!TopUtil::checkEmpty($this->scene)) {
            $requestParam["scene"] = TopUtil::convertBasic($this->scene);
        }

        if (!TopUtil::checkEmpty($this->orderType)) {
            $requestParam["order_type"] = TopUtil::convertBasic($this->orderType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

