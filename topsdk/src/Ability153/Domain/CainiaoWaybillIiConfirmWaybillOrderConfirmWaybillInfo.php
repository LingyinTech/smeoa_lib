<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoWaybillIiConfirmWaybillOrderConfirmWaybillInfo {

    /**
        包裹高，单位厘米
     **/
    public $height;

    /**
        包裹长，单位厘米
     **/
    public $length;

    /**
        体积, 单位 ml
     **/
    public $volume;

    /**
        面单号
     **/
    public $waybill_code;

    /**
        重量,单位 g
     **/
    public $weight;

    /**
        包裹宽，单位厘米
     **/
    public $width;


    public function getHeight() : int{
        return $this->height;
    }

    public function setHeight(int $height){
        $this->height = $height;
    }

    public function getLength() : int{
        return $this->length;
    }

    public function setLength(int $length){
        $this->length = $length;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }

    public function getWidth() : int{
        return $this->width;
    }

    public function setWidth(int $width){
        $this->width = $width;
    }


}

