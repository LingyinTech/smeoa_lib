<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersOption {

    /**
        是否过滤废弃单据
     **/
    public $filter_discard_status;

    /**
        是否查询对应的明细
     **/
    public $query_order_item;

    /**
        是否查询对应的二级明细
     **/
    public $query_order_return_item;


    public function getFilterDiscardStatus() : bool{
        return $this->filter_discard_status;
    }

    public function setFilterDiscardStatus(bool $filterDiscardStatus){
        $this->filter_discard_status = $filterDiscardStatus;
    }

    public function getQueryOrderItem() : bool{
        return $this->query_order_item;
    }

    public function setQueryOrderItem(bool $queryOrderItem){
        $this->query_order_item = $queryOrderItem;
    }

    public function getQueryOrderReturnItem() : bool{
        return $this->query_order_return_item;
    }

    public function setQueryOrderReturnItem(bool $queryOrderReturnItem){
        $this->query_order_return_item = $queryOrderReturnItem;
    }


}

