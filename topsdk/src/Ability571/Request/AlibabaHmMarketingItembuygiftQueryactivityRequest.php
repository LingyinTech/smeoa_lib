<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingItembuygiftQueryactivityCommonActivityParam;

class AlibabaHmMarketingItembuygiftQueryactivityRequest {

    /**
        查询入参
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingItembuygiftQueryactivityCommonActivityParam{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingItembuygiftQueryactivityCommonActivityParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itembuygift.queryactivity";
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

