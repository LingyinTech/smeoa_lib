<?php
namespace Topsdk\Topapi\Ability153\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoWaybillIiDeliveryRequest {

    /**
        物流供应商编码
     **/
    private $cpCode;

    /**
        派送类型，1:通知派送； -1: 通知退回
     **/
    private $deliveryAction;

    /**
        面单号
     **/
    private $waybillCode;


    public function getCpCode() : string{
        return $this->cpCode;
    }

    public function setCpCode(string $cpCode){
        $this->cpCode = $cpCode;
    }

    public function getDeliveryAction() : int{
        return $this->deliveryAction;
    }

    public function setDeliveryAction(int $deliveryAction){
        $this->deliveryAction = $deliveryAction;
    }

    public function getWaybillCode() : string{
        return $this->waybillCode;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybillCode = $waybillCode;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.delivery";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cpCode)) {
            $requestParam["cp_code"] = TopUtil::convertBasic($this->cpCode);
        }

        if (!TopUtil::checkEmpty($this->deliveryAction)) {
            $requestParam["delivery_action"] = TopUtil::convertBasic($this->deliveryAction);
        }

        if (!TopUtil::checkEmpty($this->waybillCode)) {
            $requestParam["waybill_code"] = TopUtil::convertBasic($this->waybillCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

