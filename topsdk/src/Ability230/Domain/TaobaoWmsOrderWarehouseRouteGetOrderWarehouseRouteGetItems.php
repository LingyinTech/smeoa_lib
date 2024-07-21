<?php
namespace Topsdk\Topapi\Ability230\Domain;

class TaobaoWmsOrderWarehouseRouteGetOrderWarehouseRouteGetItems {

    /**
        商品信息
     **/
    public $item;


    public function getItem() : TaobaoWmsOrderWarehouseRouteGetOrderWarehouseRouteGetItem{
        return $this->item;
    }

    public function setItem(TaobaoWmsOrderWarehouseRouteGetOrderWarehouseRouteGetItem $item){
        $this->item = $item;
    }


}

