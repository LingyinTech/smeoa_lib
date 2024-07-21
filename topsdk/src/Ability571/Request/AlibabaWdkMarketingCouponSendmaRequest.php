<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingCouponSendmaCommonActivityParam;

class AlibabaWdkMarketingCouponSendmaRequest {

    /**
        发放匿名码入参
     **/
    private $param0;


    public function getParam0() : AlibabaWdkMarketingCouponSendmaCommonActivityParam{
        return $this->param0;
    }

    public function setParam0(AlibabaWdkMarketingCouponSendmaCommonActivityParam $param0){
        $this->param0 = $param0;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.coupon.sendma";
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

