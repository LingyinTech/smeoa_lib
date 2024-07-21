<?php
namespace Topsdk\Topapi\Ability153\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability153\Domain\CainiaoReachableBatchjudgeClientInfoDto;
use Topsdk\Topapi\Ability153\Domain\CainiaoReachableBatchjudgeRoutingReachableBatchRequestDto;

class CainiaoReachableBatchjudgeRequest {

    /**
        1:快递 2:快运
     **/
    private $addressType;

    /**
        收发信息
     **/
    private $data;

    /**
        调用方对象
     **/
    private $clientInfo;


    public function getAddressType() : int{
        return $this->addressType;
    }

    public function setAddressType(int $addressType){
        $this->addressType = $addressType;
    }

    public function getData() : CainiaoReachableBatchjudgeRoutingReachableBatchRequestDto{
        return $this->data;
    }

    public function setData(CainiaoReachableBatchjudgeRoutingReachableBatchRequestDto $data){
        $this->data = $data;
    }

    public function getClientInfo() : CainiaoReachableBatchjudgeClientInfoDto{
        return $this->clientInfo;
    }

    public function setClientInfo(CainiaoReachableBatchjudgeClientInfoDto $clientInfo){
        $this->clientInfo = $clientInfo;
    }


    public function getApiName() : string {
        return "cainiao.reachable.batchjudge";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->addressType)) {
            $requestParam["address_type"] = TopUtil::convertBasic($this->addressType);
        }

        if (!TopUtil::checkEmpty($this->data)) {
            $requestParam["data"] = TopUtil::convertStruct($this->data);
        }

        if (!TopUtil::checkEmpty($this->clientInfo)) {
            $requestParam["client_info"] = TopUtil::convertStruct($this->clientInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

