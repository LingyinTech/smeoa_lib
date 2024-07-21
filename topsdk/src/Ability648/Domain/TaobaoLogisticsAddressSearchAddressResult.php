<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoLogisticsAddressSearchAddressResult {

    /**
        地址库ID
     **/
    public $contact_id;

    /**
        联系人姓名
     **/
    public $contact_name;

    /**
        省
     **/
    public $province;

    /**
        市
     **/
    public $city;

    /**
        区、县
     **/
    public $country;

    /**
        详细街道地址，不需要重复填写省/市/区
     **/
    public $addr;

    /**
        地区邮政编码
     **/
    public $zip_code;

    /**
        电话号码,手机与电话必需有一个
     **/
    public $phone;

    /**
        手机号码，手机与电话必需有一个 
手机号码不能超过20位
     **/
    public $mobile_phone;

    /**
        公司名称,
     **/
    public $seller_company;

    /**
        备注
     **/
    public $memo;

    /**
        区域ID
     **/
    public $area_id;

    /**
        是否默认发货地址
     **/
    public $send_def;

    /**
        是否默认取货地址
     **/
    public $get_def;

    /**
        是否默认退货地址
     **/
    public $cancel_def;

    /**
        修改日期时间
     **/
    public $modify_date;


    public function getContactId() : int{
        return $this->contact_id;
    }

    public function setContactId(int $contactId){
        $this->contact_id = $contactId;
    }

    public function getContactName() : string{
        return $this->contact_name;
    }

    public function setContactName(string $contactName){
        $this->contact_name = $contactName;
    }

    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getAddr() : string{
        return $this->addr;
    }

    public function setAddr(string $addr){
        $this->addr = $addr;
    }

    public function getZipCode() : string{
        return $this->zip_code;
    }

    public function setZipCode(string $zipCode){
        $this->zip_code = $zipCode;
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

    public function getSellerCompany() : string{
        return $this->seller_company;
    }

    public function setSellerCompany(string $sellerCompany){
        $this->seller_company = $sellerCompany;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getAreaId() : int{
        return $this->area_id;
    }

    public function setAreaId(int $areaId){
        $this->area_id = $areaId;
    }

    public function getSendDef() : bool{
        return $this->send_def;
    }

    public function setSendDef(bool $sendDef){
        $this->send_def = $sendDef;
    }

    public function getGetDef() : bool{
        return $this->get_def;
    }

    public function setGetDef(bool $getDef){
        $this->get_def = $getDef;
    }

    public function getCancelDef() : bool{
        return $this->cancel_def;
    }

    public function setCancelDef(bool $cancelDef){
        $this->cancel_def = $cancelDef;
    }

    public function getModifyDate() : string{
        return $this->modify_date;
    }

    public function setModifyDate(string $modifyDate){
        $this->modify_date = $modifyDate;
    }


}

