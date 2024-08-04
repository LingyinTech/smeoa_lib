<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetAddressDetail {

    /**
        详细地址
     **/
    public $detailed_address;

    /**
        行政区编码
     **/
    public $division_code;

    /**
        区
     **/
    public $area;

    /**
        电话号码
     **/
    public $telephone;

    /**
        城市
     **/
    public $city;

    /**
        省份
     **/
    public $prov;

    /**
        国家
     **/
    public $country;

    /**
        国家
     **/
    public $contact_name;

    /**
        业务类型
     **/
    public $biz_type;


    public function getDetailedAddress() : string{
        return $this->detailed_address;
    }

    public function setDetailedAddress(string $detailedAddress){
        $this->detailed_address = $detailedAddress;
    }

    public function getDivisionCode() : string{
        return $this->division_code;
    }

    public function setDivisionCode(string $divisionCode){
        $this->division_code = $divisionCode;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getTelephone() : string{
        return $this->telephone;
    }

    public function setTelephone(string $telephone){
        $this->telephone = $telephone;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getProv() : string{
        return $this->prov;
    }

    public function setProv(string $prov){
        $this->prov = $prov;
    }

    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getContactName() : string{
        return $this->contact_name;
    }

    public function setContactName(string $contactName){
        $this->contact_name = $contactName;
    }

    public function getBizType() : string{
        return $this->biz_type;
    }

    public function setBizType(string $bizType){
        $this->biz_type = $bizType;
    }


}

