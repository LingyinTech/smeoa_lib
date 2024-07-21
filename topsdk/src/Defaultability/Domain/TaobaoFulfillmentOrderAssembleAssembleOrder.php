<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFulfillmentOrderAssembleAssembleOrder {

    /**
        组合id，服务商内部的合单操作id，取消合单会根据group_id进行删除操作。
     **/
    public $group_id;

    /**
        合单订单列表，一个列表最多200
     **/
    public $order_list;


    public function getGroupId() : string{
        return $this->group_id;
    }

    public function setGroupId(string $groupId){
        $this->group_id = $groupId;
    }

    public function getOrderList() : array{
        return $this->order_list;
    }

    public function setOrderList(array $orderList){
        $this->order_list = $orderList;
    }


}

