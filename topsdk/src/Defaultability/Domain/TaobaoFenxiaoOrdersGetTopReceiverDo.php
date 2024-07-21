<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFenxiaoOrdersGetTopReceiverDo {

    /**
        收货人全名
     **/
    public $name;

    /**
        收货人的详细地址信息
     **/
    public $address;

    /**
        邮政编码
     **/
    public $zip;

    /**
        固定电话
     **/
    public $phone;

    /**
        移动电话
     **/
    public $mobile_phone;

    /**
        收货人所在省份
     **/
    public $state;

    /**
        收货人的城市
     **/
    public $city;

    /**
        区/县
     **/
    public $district;

    /**
        收件人ID (Open Addressee ID)，长度在128个字符之内。
     **/
    public $oaid;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getZip() : string{
        return $this->zip;
    }

    public function setZip(string $zip){
        $this->zip = $zip;
    }

    public function getPhone() : string{
        return $this->phone;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function getMobilePhone() : string{
        return $this->mobile_phone;
    }

    public function setMobilePhone(string $mobilePhone){
        $this->mobile_phone = $mobilePhone;
    }

    public function getState() : string{
        return $this->state;
    }

    public function setState(string $state){
        $this->state = $state;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getDistrict() : string{
        return $this->district;
    }

    public function setDistrict(string $district){
        $this->district = $district;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }


}

