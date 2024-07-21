<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoWaybillIiQueryByTradecodeRequest {

    /**
        订单号列表
     **/
    private $paramList;


    public function getParamList() : array{
        return $this->paramList;
    }

    public function setParamList(array $paramList){
        $this->paramList = $paramList;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.query.by.tradecode";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramList)) {
            $requestParam["param_list"] = TopUtil::convertStructList($this->paramList);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

