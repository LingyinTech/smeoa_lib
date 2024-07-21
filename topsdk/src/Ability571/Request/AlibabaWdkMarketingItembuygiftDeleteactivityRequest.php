<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingItembuygiftDeleteactivityCommonActivityParam;

class AlibabaWdkMarketingItembuygiftDeleteactivityRequest {

    /**
        要删除的活动信息
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingItembuygiftDeleteactivityCommonActivityParam{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingItembuygiftDeleteactivityCommonActivityParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itembuygift.deleteactivity";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

