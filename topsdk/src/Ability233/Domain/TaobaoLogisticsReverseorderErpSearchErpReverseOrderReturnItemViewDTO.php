<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReverseorderErpSearchErpReverseOrderReturnItemViewDTO {

    /**
        库存类型
     **/
    public $inventory_type;

    /**
        数量
     **/
    public $quantity;

    /**
        扩展字段
     **/
    public $feature_map;


    public function getInventoryType() : int{
        return $this->inventory_type;
    }

    public function setInventoryType(int $inventoryType){
        $this->inventory_type = $inventoryType;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }


}

