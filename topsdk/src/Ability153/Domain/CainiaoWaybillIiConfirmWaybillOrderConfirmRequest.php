<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoWaybillIiConfirmWaybillOrderConfirmRequest {

    /**
        预约上门收件
     **/
    public $call_door_pick_up;

    /**
        cpCode
     **/
    public $cp_code;

    /**
        预约上门截止时间
     **/
    public $door_pick_up_end_time;

    /**
        预约上门时间
     **/
    public $door_pick_up_time;

    /**
        扩展信息，json String
     **/
    public $extra_info;

    /**
        物流服务， json String
     **/
    public $logistics_services;

    /**
        快递产品编码
     **/
    public $product_code;

    /**
        客户订单货物总高，单位厘米
     **/
    public $total_height;

    /**
        订单货物总长,单位厘米
     **/
    public $total_length;

    /**
        订单货物总宽，单位厘米
     **/
    public $total_width;

    /**
        物流单号信息
     **/
    public $waybill_info;

    /**
        货物总体积，单位立方厘米
     **/
    public $total_volume;

    /**
        货物总重量，单位g
     **/
    public $total_weight;


    public function getCallDoorPickUp() : bool{
        return $this->call_door_pick_up;
    }

    public function setCallDoorPickUp(bool $callDoorPickUp){
        $this->call_door_pick_up = $callDoorPickUp;
    }

    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getDoorPickUpEndTime() : string{
        return $this->door_pick_up_end_time;
    }

    public function setDoorPickUpEndTime(string $doorPickUpEndTime){
        $this->door_pick_up_end_time = $doorPickUpEndTime;
    }

    public function getDoorPickUpTime() : string{
        return $this->door_pick_up_time;
    }

    public function setDoorPickUpTime(string $doorPickUpTime){
        $this->door_pick_up_time = $doorPickUpTime;
    }

    public function getExtraInfo() : string{
        return $this->extra_info;
    }

    public function setExtraInfo(string $extraInfo){
        $this->extra_info = $extraInfo;
    }

    public function getLogisticsServices() : string{
        return $this->logistics_services;
    }

    public function setLogisticsServices(string $logisticsServices){
        $this->logistics_services = $logisticsServices;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getTotalHeight() : int{
        return $this->total_height;
    }

    public function setTotalHeight(int $totalHeight){
        $this->total_height = $totalHeight;
    }

    public function getTotalLength() : int{
        return $this->total_length;
    }

    public function setTotalLength(int $totalLength){
        $this->total_length = $totalLength;
    }

    public function getTotalWidth() : int{
        return $this->total_width;
    }

    public function setTotalWidth(int $totalWidth){
        $this->total_width = $totalWidth;
    }

    public function getWaybillInfo() : array{
        return $this->waybill_info;
    }

    public function setWaybillInfo(array $waybillInfo){
        $this->waybill_info = $waybillInfo;
    }

    public function getTotalVolume() : int{
        return $this->total_volume;
    }

    public function setTotalVolume(int $totalVolume){
        $this->total_volume = $totalVolume;
    }

    public function getTotalWeight() : int{
        return $this->total_weight;
    }

    public function setTotalWeight(int $totalWeight){
        $this->total_weight = $totalWeight;
    }


}

