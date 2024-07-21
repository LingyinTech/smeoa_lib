<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetUserInfoDto {

    /**
        发货地址需要通过<a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.3OFCPk&treeId=17&articleId=104860&docType=1">search接口</a>
     **/
    public $address;

    /**
        手机号码（手机号和固定电话不能同时为空），长度小于20
     **/
    public $mobile;

    /**
        姓名，长度小于40
     **/
    public $name;

    /**
        固定电话（手机号和固定电话不能同时为空），长度小于20
     **/
    public $phone;


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


}

