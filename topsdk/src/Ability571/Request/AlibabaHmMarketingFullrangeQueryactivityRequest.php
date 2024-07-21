<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingFullrangeQueryactivityCommonActivityParam;

class AlibabaHmMarketingFullrangeQueryactivityRequest {

    /**
        查询活动入参
     **/
    private $param0;


    public function getParam0() : AlibabaHmMarketingFullrangeQueryactivityCommonActivityParam{
        return $this->param0;
    }

    public function setParam0(AlibabaHmMarketingFullrangeQueryactivityCommonActivityParam $param0){
        $this->param0 = $param0;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.fullrange.queryactivity";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

