<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsFulfilorderSearchFullOrderViewDTO {

    /**
        物流履约单商品明细
     **/
    public $fulfilorder_item_list;

    /**
        物流履约单信息
     **/
    public $fulfilorder;


    public function getFulfilorderItemList() : array{
        return $this->fulfilorder_item_list;
    }

    public function setFulfilorderItemList(array $fulfilorderItemList){
        $this->fulfilorder_item_list = $fulfilorderItemList;
    }

    public function getFulfilorder() : TaobaoLogisticsFulfilorderSearchFulfilOrderDTO{
        return $this->fulfilorder;
    }

    public function setFulfilorder(TaobaoLogisticsFulfilorderSearchFulfilOrderDTO $fulfilorder){
        $this->fulfilorder = $fulfilorder;
    }


}

