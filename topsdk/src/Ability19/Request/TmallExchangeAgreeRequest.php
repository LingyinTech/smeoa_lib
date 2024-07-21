<?php
namespace Topsdk\Topapi\Ability19\Request;
use Topsdk\Topapi\TopUtil;

class TmallExchangeAgreeRequest {

    /**
        邮政编码
     **/
    private $post;

    /**
        上传图片举证
     **/
    private $leaveMessagePics;

    /**
        卖家留言
     **/
    private $leaveMessage;

    /**
        收货地址id，如需获取请调用该top接口：taobao.logistics.address.search，对应属性为contact_id
     **/
    private $addressId;

    /**
        详细收货地址
     **/
    private $completeAddress;

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        返回字段。当前支持的有 dispute_id, bizorder_id, modified, status
     **/
    private $fields;

    /**
        收货人手机号
     **/
    private $mobile;


    public function getPost() : string{
        return $this->post;
    }

    public function setPost(string $post){
        $this->post = $post;
    }

    public function getLeaveMessagePics() : string{
        return $this->leaveMessagePics;
    }

    public function setLeaveMessagePics(string $leaveMessagePics){
        $this->leaveMessagePics = $leaveMessagePics;
    }

    public function getLeaveMessage() : string{
        return $this->leaveMessage;
    }

    public function setLeaveMessage(string $leaveMessage){
        $this->leaveMessage = $leaveMessage;
    }

    public function getAddressId() : int{
        return $this->addressId;
    }

    public function setAddressId(int $addressId){
        $this->addressId = $addressId;
    }

    public function getCompleteAddress() : string{
        return $this->completeAddress;
    }

    public function setCompleteAddress(string $completeAddress){
        $this->completeAddress = $completeAddress;
    }

    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }


    public function getApiName() : string {
        return "tmall.exchange.agree";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->post)) {
            $requestParam["post"] = TopUtil::convertBasic($this->post);
        }

        if (!TopUtil::checkEmpty($this->leaveMessage)) {
            $requestParam["leave_message"] = TopUtil::convertBasic($this->leaveMessage);
        }

        if (!TopUtil::checkEmpty($this->addressId)) {
            $requestParam["address_id"] = TopUtil::convertBasic($this->addressId);
        }

        if (!TopUtil::checkEmpty($this->completeAddress)) {
            $requestParam["complete_address"] = TopUtil::convertBasic($this->completeAddress);
        }

        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->mobile)) {
            $requestParam["mobile"] = TopUtil::convertBasic($this->mobile);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->leaveMessagePics)){
            $fileParam["leave_message_pics"] = TopUtil::convertBasic($this->leaveMessagePics);
        }
        return $fileParam;
    }

}

