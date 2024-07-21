<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsAddressModifyRequest {

    /**
        地址库ID
     **/
    private $contactId;

    /**
        联系人姓名
<font color='red'>长度不可超过20个字节</font>
     **/
    private $contactName;

    /**
        所在省
     **/
    private $province;

    /**
        所在市
     **/
    private $city;

    /**
        区、县
<br><font color='red'>如果所在地区是海外的可以为空，否则为必参</font>
     **/
    private $country;

    /**
        详细街道地址，不需要重复填写省/市/区
     **/
    private $addr;

    /**
        地区邮政编码
<br><font color='red'>如果所在地区是海外的可以为空，否则为必参</font>
     **/
    private $zipCode;

    /**
        电话号码,手机与电话必需有一个
     **/
    private $phone;

    /**
        手机号码，手机与电话必需有一个 <br><font color='red'>手机号码不能超过20位</font>
     **/
    private $mobilePhone;

    /**
        公司名称,
<br><font color='red'>公司名称长能不能超过20字节</font>
     **/
    private $sellerCompany;

    /**
        备注,<br><font color='red'>备注不能超过256字节</font>
     **/
    private $memo;

    /**
        默认发货地址。<br>
<font color='red'>选择此项(true)，将当前地址设为默认发货地址，撤消原默认发货地址</font>
     **/
    private $sendDef;

    /**
        默认取货地址。<br>
<font color='red'>选择此项(true)，将当前地址设为默认取货地址，撤消原默认取货地址</font>
     **/
    private $getDef;

    /**
        默认退货地址。<br>
<font color='red'>选择此项(true)，将当前地址设为默认退货地址，撤消原默认退货地址</font>
     **/
    private $cancelDef;


    public function getContactId() : int{
        return $this->contactId;
    }

    public function setContactId(int $contactId){
        $this->contactId = $contactId;
    }

    public function getContactName() : string{
        return $this->contactName;
    }

    public function setContactName(string $contactName){
        $this->contactName = $contactName;
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
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode){
        $this->zipCode = $zipCode;
    }

    public function getPhone() : string{
        return $this->phone;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function getMobilePhone() : string{
        return $this->mobilePhone;
    }

    public function setMobilePhone(string $mobilePhone){
        $this->mobilePhone = $mobilePhone;
    }

    public function getSellerCompany() : string{
        return $this->sellerCompany;
    }

    public function setSellerCompany(string $sellerCompany){
        $this->sellerCompany = $sellerCompany;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getSendDef() : bool{
        return $this->sendDef;
    }

    public function setSendDef(bool $sendDef){
        $this->sendDef = $sendDef;
    }

    public function getGetDef() : bool{
        return $this->getDef;
    }

    public function setGetDef(bool $getDef){
        $this->getDef = $getDef;
    }

    public function getCancelDef() : bool{
        return $this->cancelDef;
    }

    public function setCancelDef(bool $cancelDef){
        $this->cancelDef = $cancelDef;
    }


    public function getApiName() : string {
        return "taobao.logistics.address.modify";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->contactId)) {
            $requestParam["contact_id"] = TopUtil::convertBasic($this->contactId);
        }

        if (!TopUtil::checkEmpty($this->contactName)) {
            $requestParam["contact_name"] = TopUtil::convertBasic($this->contactName);
        }

        if (!TopUtil::checkEmpty($this->province)) {
            $requestParam["province"] = TopUtil::convertBasic($this->province);
        }

        if (!TopUtil::checkEmpty($this->city)) {
            $requestParam["city"] = TopUtil::convertBasic($this->city);
        }

        if (!TopUtil::checkEmpty($this->country)) {
            $requestParam["country"] = TopUtil::convertBasic($this->country);
        }

        if (!TopUtil::checkEmpty($this->addr)) {
            $requestParam["addr"] = TopUtil::convertBasic($this->addr);
        }

        if (!TopUtil::checkEmpty($this->zipCode)) {
            $requestParam["zip_code"] = TopUtil::convertBasic($this->zipCode);
        }

        if (!TopUtil::checkEmpty($this->phone)) {
            $requestParam["phone"] = TopUtil::convertBasic($this->phone);
        }

        if (!TopUtil::checkEmpty($this->mobilePhone)) {
            $requestParam["mobile_phone"] = TopUtil::convertBasic($this->mobilePhone);
        }

        if (!TopUtil::checkEmpty($this->sellerCompany)) {
            $requestParam["seller_company"] = TopUtil::convertBasic($this->sellerCompany);
        }

        if (!TopUtil::checkEmpty($this->memo)) {
            $requestParam["memo"] = TopUtil::convertBasic($this->memo);
        }

        if (!TopUtil::checkEmpty($this->sendDef)) {
            $requestParam["send_def"] = TopUtil::convertBasic($this->sendDef);
        }

        if (!TopUtil::checkEmpty($this->getDef)) {
            $requestParam["get_def"] = TopUtil::convertBasic($this->getDef);
        }

        if (!TopUtil::checkEmpty($this->cancelDef)) {
            $requestParam["cancel_def"] = TopUtil::convertBasic($this->cancelDef);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

