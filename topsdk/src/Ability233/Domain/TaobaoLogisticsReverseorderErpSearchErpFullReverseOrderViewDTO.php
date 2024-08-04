<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReverseorderErpSearchErpFullReverseOrderViewDTO {

    /**
        销退单主单
     **/
    public $reverse_order;

    /**
        销退单明细
     **/
    public $reverse_order_item_list;


    public function getReverseOrder() : TaobaoLogisticsReverseorderErpSearchErpReverseOrderViewDTO{
        return $this->reverse_order;
    }

    public function setReverseOrder(TaobaoLogisticsReverseorderErpSearchErpReverseOrderViewDTO $reverseOrder){
        $this->reverse_order = $reverseOrder;
    }

    public function getReverseOrderItemList() : array{
        return $this->reverse_order_item_list;
    }

    public function setReverseOrderItemList(array $reverseOrderItemList){
        $this->reverse_order_item_list = $reverseOrderItemList;
    }


}

