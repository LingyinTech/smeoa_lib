<?php
namespace Topsdk\Topapi\Ability19\Request;
use Topsdk\Topapi\TopUtil;

class TmallExchangeConsigngoodsRequest {

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        卖家发货的物流单号
     **/
    private $logisticsNo;

    /**
        卖家发货的物流类型，100表示平邮，200表示快递
     **/
    private $logisticsType;

    /**
        卖家发货的快递公司
     **/
    private $logisticsCompanyName;

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

    public function getLogisticsNo() : string{
        return $this->logisticsNo;
    }

    public function setLogisticsNo(string $logisticsNo){
        $this->logisticsNo = $logisticsNo;
    }

    public function getLogisticsType() : int{
        return $this->logisticsType;
    }

    public function setLogisticsType(int $logisticsType){
        $this->logisticsType = $logisticsType;
    }

    public function getLogisticsCompanyName() : string{
        return $this->logisticsCompanyName;
    }

    public function setLogisticsCompanyName(string $logisticsCompanyName){
        $this->logisticsCompanyName = $logisticsCompanyName;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "tmall.exchange.consigngoods";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->logisticsNo)) {
            $requestParam["logistics_no"] = TopUtil::convertBasic($this->logisticsNo);
        }

        if (!TopUtil::checkEmpty($this->logisticsType)) {
            $requestParam["logistics_type"] = TopUtil::convertBasic($this->logisticsType);
        }

        if (!TopUtil::checkEmpty($this->logisticsCompanyName)) {
            $requestParam["logistics_company_name"] = TopUtil::convertBasic($this->logisticsCompanyName);
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

