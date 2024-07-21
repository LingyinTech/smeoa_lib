<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeGetLogisticsTag {

    /**
        主订单或子订单的订单号
     **/
    public $order_id;

    /**
        服务标签
     **/
    public $logistic_service_tag_list;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getLogisticServiceTagList() : array{
        return $this->logistic_service_tag_list;
    }

    public function setLogisticServiceTagList(array $logisticServiceTagList){
        $this->logistic_service_tag_list = $logisticServiceTagList;
    }


}

