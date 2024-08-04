<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoLogisticsOrdersDetailGetLocation {

    /**
        邮政编码
     **/
    public $zip;

    /**
        详细地址，最大256个字节（128个中文）
     **/
    public $address;

    /**
        所在城市（中文名称）
     **/
    public $city;

    /**
        所在省份（中文名称）
     **/
    public $state;

    /**
        国家名称
     **/
    public $country;

    /**
        区/县（只适用于物流API）
     **/
    public $district;


    public function getZip() : string{
        return $this->zip;
    }

    public function setZip(string $zip){
        $this->zip = $zip;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getState() : string{
        return $this->state;
    }

    public function setState(string $state){
        $this->state = $state;
    }

    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getDistrict() : string{
        return $this->district;
    }

    public function setDistrict(string $district){
        $this->district = $district;
    }


}

