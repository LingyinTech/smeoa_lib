<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingCouponEndactivityCommonActivityParam;

class AlibabaWdkMarketingCouponEndactivityRequest {

    /**
        需要删除的活动的信息
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingCouponEndactivityCommonActivityParam{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingCouponEndactivityCommonActivityParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.coupon.endactivity";
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

