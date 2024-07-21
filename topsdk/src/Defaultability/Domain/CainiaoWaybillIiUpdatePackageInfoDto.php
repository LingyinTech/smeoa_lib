<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiUpdatePackageInfoDto {

    /**
        商品
     **/
    public $items;

    /**
        体积
     **/
    public $volume;

    /**
        重量
     **/
    public $weight;


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


}

