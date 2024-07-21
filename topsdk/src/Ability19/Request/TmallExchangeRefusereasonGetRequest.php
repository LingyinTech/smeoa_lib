<?php
namespace Topsdk\Topapi\Ability19\Request;
use Topsdk\Topapi\TopUtil;

class TmallExchangeRefusereasonGetRequest {

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        换货申请类型：0-任意类型；1-售中；2-售后
     **/
    private $disputeType;

    /**
        返回字段
     **/
    private $fields;


    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getDisputeType() : int{
        return $this->disputeType;
    }

    public function setDisputeType(int $disputeType){
        $this->disputeType = $disputeType;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "tmall.exchange.refusereason.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->disputeType)) {
            $requestParam["dispute_type"] = TopUtil::convertBasic($this->disputeType);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

