<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoCloudprintIsvResourcesGetRequest {

    /**
        isv资源类型，分为：TEMPLATE（表示模板），PRINT_ITEM（打印项），CUSTOM_AREA（预设自定义区）
     **/
    private $isvResourceType;


    public function getIsvResourceType() : string{
        return $this->isvResourceType;
    }

    public function setIsvResourceType(string $isvResourceType){
        $this->isvResourceType = $isvResourceType;
    }


    public function getApiName() : string {
        return "cainiao.cloudprint.isv.resources.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->isvResourceType)) {
            $requestParam["isv_resource_type"] = TopUtil::convertBasic($this->isvResourceType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

