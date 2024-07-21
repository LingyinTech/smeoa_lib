<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoWaybillIiQueryByWaybillcodeRequest {

    /**
        系统自动生成
     **/
    private $paramList;


    public function getParamList() : array{
        return $this->paramList;
    }

    public function setParamList(array $paramList){
        $this->paramList = $paramList;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.query.by.waybillcode";
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

