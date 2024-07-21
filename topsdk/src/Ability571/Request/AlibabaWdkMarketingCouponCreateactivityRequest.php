<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingCouponCreateactivityCouponActivity;

class AlibabaWdkMarketingCouponCreateactivityRequest {

    /**
        创建优惠券活动请求入参
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingCouponCreateactivityCouponActivity{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingCouponCreateactivityCouponActivity $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.coupon.createactivity";
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

