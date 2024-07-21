<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingCouponCreateactivityCouponActivity;

class AlibabaHmMarketingCouponCreateactivityRequest {

    /**
        创建优惠券活动请求入参
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingCouponCreateactivityCouponActivity{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingCouponCreateactivityCouponActivity $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.coupon.createactivity";
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

