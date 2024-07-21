<?php
namespace Topsdk\Topapi\Ability198\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaAscpLogisticsIdentcodeUploadRequest {

    /**
        订单id
     **/
    private $orderId;

    /**
        sn码列表，多个用逗号分隔
     **/
    private $codeList;


    public function getOrderId() : int{
        return $this->orderId;
    }

    public function setOrderId(int $orderId){
        $this->orderId = $orderId;
    }

    public function getCodeList() : array{
        return $this->codeList;
    }

    public function setCodeList(array $codeList){
        $this->codeList = $codeList;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.identcode.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->codeList)) {
            $requestParam["code_list"] = TopUtil::convertBasicList($this->codeList);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

