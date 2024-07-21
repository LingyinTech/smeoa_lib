<?php
namespace Topsdk\Topapi\Ability230\Domain;

class TaobaoWmsOrderWarehouseRouteGetOrderWarehouseRouteGetItem {

    /**
        仓库编码 当订单路由到菜鸟仓发货时输出菜鸟仓编码。等待路由仓或由商家仓发货的订单，此内容为空。
     **/
    public $store_code;

    /**
        订单路由状态 状态值： WAIT_ROUTE 待路由仓 ROUTE_TO_CN 路由到菜鸟仓发货 ROUTE_TO_ERP 路由到商家仓发货。 STOP_ROUTE 终止分仓，如订单已取消时，不再发货。 注：待路由仓状态表示未做路由，不确定由哪个仓库发货，可与5分钟后再次查询
     **/
    public $rout_status;

    /**
        菜鸟订单编码 当订单路由到菜鸟仓发货时，生成此单号。等待路由仓或由商家仓发货的订单，此单号为空。格式LBX+数字
     **/
    public $cn_order_code;

    /**
        通知仓库此订单明细的商品应发数量
     **/
    public $item_qty;

    /**
        ERP订单明细编码或者子交易单号
     **/
    public $order_item_id;


    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }

    public function getRoutStatus() : string{
        return $this->rout_status;
    }

    public function setRoutStatus(string $routStatus){
        $this->rout_status = $routStatus;
    }

    public function getCnOrderCode() : string{
        return $this->cn_order_code;
    }

    public function setCnOrderCode(string $cnOrderCode){
        $this->cn_order_code = $cnOrderCode;
    }

    public function getItemQty() : int{
        return $this->item_qty;
    }

    public function setItemQty(int $itemQty){
        $this->item_qty = $itemQty;
    }

    public function getOrderItemId() : array{
        return $this->order_item_id;
    }

    public function setOrderItemId(array $orderItemId){
        $this->order_item_id = $orderItemId;
    }


}

