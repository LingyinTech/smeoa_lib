<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbOrderJzConsignJzReceiverTO {

    /**
        详细地址
     **/
    public $address;

    /**
        市
     **/
    public $city;

    /**
        收货人名称
     **/
    public $contact_name;

    /**
        国家
     **/
    public $country;

    /**
        区
     **/
    public $district;

    /**
        手机号
     **/
    public $mobile_phone;

    /**
        省
     **/
    public $province;

    /**
        街道
     **/
    public $street;

    /**
        座机号
     **/
    public $tele_phone;

    /**
        邮编
     **/
    public $zip_code;


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

    public function getContactName() : string{
        return $this->contact_name;
    }

    public function setContactName(string $contactName){
        $this->contact_name = $contactName;
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

    public function getMobilePhone() : string{
        return $this->mobile_phone;
    }

    public function setMobilePhone(string $mobilePhone){
        $this->mobile_phone = $mobilePhone;
    }

    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getStreet() : string{
        return $this->street;
    }

    public function setStreet(string $street){
        $this->street = $street;
    }

    public function getTelePhone() : string{
        return $this->tele_phone;
    }

    public function setTelePhone(string $telePhone){
        $this->tele_phone = $telePhone;
    }

    public function getZipCode() : string{
        return $this->zip_code;
    }

    public function setZipCode(string $zipCode){
        $this->zip_code = $zipCode;
    }


}

