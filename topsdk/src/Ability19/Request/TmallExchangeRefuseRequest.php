<?php
namespace Topsdk\Topapi\Ability19\Request;
use Topsdk\Topapi\TopUtil;

class TmallExchangeRefuseRequest {

    /**
        凭证图片
     **/
    private $leaveMessagePics;

    /**
        拒绝换货申请时的留言
     **/
    private $leaveMessage;

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        换货原因对应ID
     **/
    private $sellerRefuseReasonId;

    /**
        返回字段。目前支持dispute_id, bizorder_id, modified, status
     **/
    private $fields;


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

    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getSellerRefuseReasonId() : int{
        return $this->sellerRefuseReasonId;
    }

    public function setSellerRefuseReasonId(int $sellerRefuseReasonId){
        $this->sellerRefuseReasonId = $sellerRefuseReasonId;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "tmall.exchange.refuse";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->leaveMessage)) {
            $requestParam["leave_message"] = TopUtil::convertBasic($this->leaveMessage);
        }

        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->sellerRefuseReasonId)) {
            $requestParam["seller_refuse_reason_id"] = TopUtil::convertBasic($this->sellerRefuseReasonId);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
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

