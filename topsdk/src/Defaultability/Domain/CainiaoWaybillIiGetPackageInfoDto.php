<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetPackageInfoDto {

    /**
        包裹id，用于拆合单场景（只能传入数字、字母和下划线；批量请求时值不得重复，大小写敏感，即123A,123a 不可当做不同ID，否则存在一定可能取号失败）
     **/
    public $id;

    /**
        商品信息,数量限制为100
     **/
    public $items;

    /**
        体积, 单位 ml
     **/
    public $volume;

    /**
        重量,单位 g
     **/
    public $weight;

    /**
        子母件模式中的总包裹数/总件数，用于打印当前包裹处于总件数的位置比如5-2，可以表示总包裹数为5，当前为第2个包裹，只有快运公司需要传入，其他的可以不用传入
     **/
    public $total_packages_count;

    /**
        大件快运中的包装方式描述
     **/
    public $packaging_description;

    /**
        大件快运中的货品描述，比如服装，家具。 顺丰取号必须传此参数
     **/
    public $goods_description;

    /**
        包裹长，单位厘米
     **/
    public $length;

    /**
        包裹宽，单位厘米
     **/
    public $width;

    /**
        包裹高，单位厘米
     **/
    public $height;

    /**
        物品价值，单位元
     **/
    public $good_value;


    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getItems() : array{
        return $this->items;
    }

    public function setItems(array $items){
        $this->items = $items;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }

    public function getTotalPackagesCount() : int{
        return $this->total_packages_count;
    }

    public function setTotalPackagesCount(int $totalPackagesCount){
        $this->total_packages_count = $totalPackagesCount;
    }

    public function getPackagingDescription() : string{
        return $this->packaging_description;
    }

    public function setPackagingDescription(string $packagingDescription){
        $this->packaging_description = $packagingDescription;
    }

    public function getGoodsDescription() : string{
        return $this->goods_description;
    }

    public function setGoodsDescription(string $goodsDescription){
        $this->goods_description = $goodsDescription;
    }

    public function getLength() : int{
        return $this->length;
    }

    public function setLength(int $length){
        $this->length = $length;
    }

    public function getWidth() : int{
        return $this->width;
    }

    public function setWidth(int $width){
        $this->width = $width;
    }

    public function getHeight() : int{
        return $this->height;
    }

    public function setHeight(int $height){
        $this->height = $height;
    }

    public function getGoodValue() : string{
        return $this->good_value;
    }

    public function setGoodValue(string $goodValue){
        $this->good_value = $goodValue;
    }


}

