<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIQuerydetailWaybillAddress {

    /**
        详细地址
     **/
    public $address_detail;

    /**
        区名称（三级地址）
     **/
    public $area;

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


    public function getAddressDetail() : string{
        return $this->address_detail;
    }

    public function setAddressDetail(string $addressDetail){
        $this->address_detail = $addressDetail;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
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


}

