<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetRecipientInfoDto {

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
        淘宝订单收件人ID (Open Addressee ID)，长度不超过128个字符，淘宝订单加密情况用于解密。
     **/
    public $oaid;

    /**
        电商平台真实交易订单号，针对电商平台订单隐私加密场景使用，非必填，如果填写则必须是电商平台真实的交易订单ID
     **/
    public $tid;

    /**
        菜鸟解密地址ID，用于电商平台收件人信息加密的场景使用，非订单加密场景请勿使用。
     **/
    public $caid;


    public function getAddress() : CainiaoWaybillIiGetAddressDto{
        return $this->address;
    }

    public function setAddress(CainiaoWaybillIiGetAddressDto $address){
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

    public function getTid() : string{
        return $this->tid;
    }

    public function setTid(string $tid){
        $this->tid = $tid;
    }

    public function getCaid() : string{
        return $this->caid;
    }

    public function setCaid(string $caid){
        $this->caid = $caid;
    }


}

