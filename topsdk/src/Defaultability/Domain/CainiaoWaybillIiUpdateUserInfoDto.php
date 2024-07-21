<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiUpdateUserInfoDto {

    /**
        地址
     **/
    public $address;

    /**
        手机号码
     **/
    public $mobile;

    /**
        姓名
     **/
    public $name;

    /**
        固定电话
     **/
    public $phone;

    /**
        开放地址ID
     **/
    public $oaid;

    /**
        菜鸟地址ID，针对电商平台加密订单场景使用，淘系订单使用oaid，非淘使用caid。
     **/
    public $caid;


    public function getAddress() : CainiaoWaybillIiUpdateAddressDto{
        return $this->address;
    }

    public function setAddress(CainiaoWaybillIiUpdateAddressDto $address){
        $this->address = $address;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPhone() : string{
        return $this->phone;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }

    public function getCaid() : string{
        return $this->caid;
    }

    public function setCaid(string $caid){
        $this->caid = $caid;
    }


}

