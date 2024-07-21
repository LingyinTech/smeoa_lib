<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFulfillmentOrderAssembleOrderAssembleResponse {

    /**
        回传结果List
     **/
    public $order_group_responses;


    public function getOrderGroupResponses() : array{
        return $this->order_group_responses;
    }

    public function setOrderGroupResponses(array $orderGroupResponses){
        $this->order_group_responses = $orderGroupResponses;
    }


}

