<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradeShippingaddressUpdateRequest {

    /**
        交易编号。
     **/
    private $tid;

    /**
        收货人全名。最大长度为50个字节。
     **/
    private $receiverName;

    /**
        座机号码。最大长度为30个字节。传-1表示删除
     **/
    private $receiverPhone;

    /**
        移动电话。最大长度为11个字节。传-1表示删除
     **/
    private $receiverMobile;

    /**
        省份。最大长度为32个字节。如：浙江
     **/
    private $receiverState;

    /**
        城市。最大长度为32个字节。如：杭州
     **/
    private $receiverCity;

    /**
        区/县。最大长度为32个字节。如：西湖区
     **/
    private $receiverDistrict;

    /**
        收货地址。最大长度为228个字节。
     **/
    private $receiverAddress;

    /**
        邮政编码。必须由6个数字组成。注：邮政编码根据地址信息自动填入，不可单独修改
     **/
    private $receiverZip;

    /**
        四级地址。最大长度为32个字节。如：五常街道
     **/
    private $receiverTown;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getReceiverName() : string{
        return $this->receiverName;
    }

    public function setReceiverName(string $receiverName){
        $this->receiverName = $receiverName;
    }

    public function getReceiverPhone() : string{
        return $this->receiverPhone;
    }

    public function setReceiverPhone(string $receiverPhone){
        $this->receiverPhone = $receiverPhone;
    }

    public function getReceiverMobile() : string{
        return $this->receiverMobile;
    }

    public function setReceiverMobile(string $receiverMobile){
        $this->receiverMobile = $receiverMobile;
    }

    public function getReceiverState() : string{
        return $this->receiverState;
    }

    public function setReceiverState(string $receiverState){
        $this->receiverState = $receiverState;
    }

    public function getReceiverCity() : string{
        return $this->receiverCity;
    }

    public function setReceiverCity(string $receiverCity){
        $this->receiverCity = $receiverCity;
    }

    public function getReceiverDistrict() : string{
        return $this->receiverDistrict;
    }

    public function setReceiverDistrict(string $receiverDistrict){
        $this->receiverDistrict = $receiverDistrict;
    }

    public function getReceiverAddress() : string{
        return $this->receiverAddress;
    }

    public function setReceiverAddress(string $receiverAddress){
        $this->receiverAddress = $receiverAddress;
    }

    public function getReceiverZip() : string{
        return $this->receiverZip;
    }

    public function setReceiverZip(string $receiverZip){
        $this->receiverZip = $receiverZip;
    }

    public function getReceiverTown() : string{
        return $this->receiverTown;
    }

    public function setReceiverTown(string $receiverTown){
        $this->receiverTown = $receiverTown;
    }


    public function getApiName() : string {
        return "taobao.trade.shippingaddress.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->receiverName)) {
            $requestParam["receiver_name"] = TopUtil::convertBasic($this->receiverName);
        }

        if (!TopUtil::checkEmpty($this->receiverPhone)) {
            $requestParam["receiver_phone"] = TopUtil::convertBasic($this->receiverPhone);
        }

        if (!TopUtil::checkEmpty($this->receiverMobile)) {
            $requestParam["receiver_mobile"] = TopUtil::convertBasic($this->receiverMobile);
        }

        if (!TopUtil::checkEmpty($this->receiverState)) {
            $requestParam["receiver_state"] = TopUtil::convertBasic($this->receiverState);
        }

        if (!TopUtil::checkEmpty($this->receiverCity)) {
            $requestParam["receiver_city"] = TopUtil::convertBasic($this->receiverCity);
        }

        if (!TopUtil::checkEmpty($this->receiverDistrict)) {
            $requestParam["receiver_district"] = TopUtil::convertBasic($this->receiverDistrict);
        }

        if (!TopUtil::checkEmpty($this->receiverAddress)) {
            $requestParam["receiver_address"] = TopUtil::convertBasic($this->receiverAddress);
        }

        if (!TopUtil::checkEmpty($this->receiverZip)) {
            $requestParam["receiver_zip"] = TopUtil::convertBasic($this->receiverZip);
        }

        if (!TopUtil::checkEmpty($this->receiverTown)) {
            $requestParam["receiver_town"] = TopUtil::convertBasic($this->receiverTown);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

