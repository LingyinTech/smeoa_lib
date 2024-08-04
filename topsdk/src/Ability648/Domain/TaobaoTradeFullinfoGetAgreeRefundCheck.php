<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetAgreeRefundCheck {

    /**
        提示文案
     **/
    public $delivery_tips;

    /**
        流程状态
     **/
    public $delivery_process;

    /**
        订单id
     **/
    public $detail_order_id;


    public function getDeliveryTips() : string{
        return $this->delivery_tips;
    }

    public function setDeliveryTips(string $deliveryTips){
        $this->delivery_tips = $deliveryTips;
    }

    public function getDeliveryProcess() : string{
        return $this->delivery_process;
    }

    public function setDeliveryProcess(string $deliveryProcess){
        $this->delivery_process = $deliveryProcess;
    }

    public function getDetailOrderId() : string{
        return $this->detail_order_id;
    }

    public function setDetailOrderId(string $detailOrderId){
        $this->detail_order_id = $detailOrderId;
    }


}

