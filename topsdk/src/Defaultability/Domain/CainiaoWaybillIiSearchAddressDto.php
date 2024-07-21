<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiSearchAddressDto {

    /**
        详细地址
     **/
    public $detail;

    /**
        区名称（三级地址）
     **/
    public $district;

    /**
        市名称（二级地址）
     **/
    public $city;

    /**
        省名称（一级地址）
     **/
    public $province;

    /**
        街道\镇名称（四级地址）
     **/
    public $town;

    /**
        订购关系id
     **/
    public $waybill_address_id;


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

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
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

    public function getWaybillAddressId() : string{
        return $this->waybill_address_id;
    }

    public function setWaybillAddressId(string $waybillAddressId){
        $this->waybill_address_id = $waybillAddressId;
    }


}

