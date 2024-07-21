<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetItem {

    /**
        数量
     **/
    public $count;

    /**
        名称
     **/
    public $name;


    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}

