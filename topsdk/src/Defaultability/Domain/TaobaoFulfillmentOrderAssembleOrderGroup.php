<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFulfillmentOrderAssembleOrderGroup {

    /**
        淘宝交易子订单id
     **/
    public $taobao_sub_order_id;

    /**
        order_id的类型，0:淘宝交易订单,1: 换货单,2:分销单，3:补货单，4:代发单
     **/
    public $order_type;

    /**
        商品类型, 0:下单货品，1:赠品，2:其他
     **/
    public $item_type;

    /**
        淘宝单号可以是交易订单、换货单、补货单、代发单或分销单等，当 order_type=0时，order_id =  taobao_parent_order_id。
     **/
    public $order_id;

    /**
        erp系统内的订单id
     **/
    public $erp_order_id;

    /**
        淘宝交易主订单id
     **/
    public $taobao_parent_order_id;


    public function getTaobaoSubOrderId() : string{
        return $this->taobao_sub_order_id;
    }

    public function setTaobaoSubOrderId(string $taobaoSubOrderId){
        $this->taobao_sub_order_id = $taobaoSubOrderId;
    }

    public function getOrderType() : int{
        return $this->order_type;
    }

    public function setOrderType(int $orderType){
        $this->order_type = $orderType;
    }

    public function getItemType() : int{
        return $this->item_type;
    }

    public function setItemType(int $itemType){
        $this->item_type = $itemType;
    }

    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getErpOrderId() : string{
        return $this->erp_order_id;
    }

    public function setErpOrderId(string $erpOrderId){
        $this->erp_order_id = $erpOrderId;
    }

    public function getTaobaoParentOrderId() : string{
        return $this->taobao_parent_order_id;
    }

    public function setTaobaoParentOrderId(string $taobaoParentOrderId){
        $this->taobao_parent_order_id = $taobaoParentOrderId;
    }


}

