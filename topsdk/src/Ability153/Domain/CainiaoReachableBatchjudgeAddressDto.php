<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoReachableBatchjudgeAddressDto {

    /**
        镇/街道
     **/
    public $town_name;

    /**
        详细地址
     **/
    public $address_detail;

    /**
        市
     **/
    public $city_name;

    /**
        区
     **/
    public $area_name;

    /**
        省
     **/
    public $province_name;


    public function getTownName() : string{
        return $this->town_name;
    }

    public function setTownName(string $townName){
        $this->town_name = $townName;
    }

    public function getAddressDetail() : string{
        return $this->address_detail;
    }

    public function setAddressDetail(string $addressDetail){
        $this->address_detail = $addressDetail;
    }

    public function getCityName() : string{
        return $this->city_name;
    }

    public function setCityName(string $cityName){
        $this->city_name = $cityName;
    }

    public function getAreaName() : string{
        return $this->area_name;
    }

    public function setAreaName(string $areaName){
        $this->area_name = $areaName;
    }

    public function getProvinceName() : string{
        return $this->province_name;
    }

    public function setProvinceName(string $provinceName){
        $this->province_name = $provinceName;
    }


}

