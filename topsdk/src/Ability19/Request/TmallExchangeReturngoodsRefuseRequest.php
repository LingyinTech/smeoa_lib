<?php
namespace Topsdk\Topapi\Ability19\Request;
use Topsdk\Topapi\TopUtil;

class TmallExchangeReturngoodsRefuseRequest {

    /**
        凭证图片
     **/
    private $leaveMessagePics;

    /**
        留言说明
     **/
    private $leaveMessage;

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        拒绝原因ID
     **/
    private $sellerRefuseReasonId;


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


    public function getApiName() : string {
        return "tmall.exchange.returngoods.refuse";
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

