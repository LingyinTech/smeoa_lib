<?php
namespace Topsdk\Topapi\Ability229\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoCloudprintClientinfoPutRequest {

    /**
        客户端上传json数据
     **/
    private $jsonData;


    public function getJsonData() : string{
        return $this->jsonData;
    }

    public function setJsonData(string $jsonData){
        $this->jsonData = $jsonData;
    }


    public function getApiName() : string {
        return "cainiao.cloudprint.clientinfo.put";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->jsonData)) {
            $requestParam["json_data"] = TopUtil::convertBasic($this->jsonData);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

