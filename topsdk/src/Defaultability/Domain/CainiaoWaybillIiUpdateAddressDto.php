<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiUpdateAddressDto {

    /**
        城市
     **/
    public $city;

    /**
        详细地址
     **/
    public $detail;

    /**
        区地址
     **/
    public $district;

    /**
        省
     **/
    public $province;

    /**
        街道
     **/
    public $town;


    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getDetail() : string{
        return $this->detail;
    }

    public function setDetail(string $detail){
        $this->detail = $detail;
    }

    public function getDistrict() : string{
        return $this->district;
    }

    public function setDistrict(string $district){
        $this->district = $district;
    }

    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }


}

