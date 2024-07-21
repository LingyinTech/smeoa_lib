<?php
namespace Topsdk\Topapi\Ability138\Domain;

class TmallItemShiptimeUpdateUpdateSkuShipTime {

    /**
        被更新发货时间；格式和具体设置的发货时间格式相关。绝对发货时间填写yyyy-MM-dd;相对发货时间填写数字。
     **/
    public $ship_time;

    /**
        SKU的ID
     **/
    public $sku_id;

    /**
        Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充
     **/
    public $properties;

    /**
        Sku的商家外部id；如：2015_07_23_D_123
     **/
    public $outer_id;


    public function getShipTime() : string{
        return $this->ship_time;
    }

    public function setShipTime(string $shipTime){
        $this->ship_time = $shipTime;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}

