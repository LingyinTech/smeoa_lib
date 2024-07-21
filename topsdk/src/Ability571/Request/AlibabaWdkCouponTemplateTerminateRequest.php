<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkCouponTemplateTerminateCouponTemplateTerminateRequest;

class AlibabaWdkCouponTemplateTerminateRequest {

    /**
        参数
     **/
    private $paramCouponTemplateTerminateRequest;


    public function getParamCouponTemplateTerminateRequest() : AlibabaWdkCouponTemplateTerminateCouponTemplateTerminateRequest{
        return $this->paramCouponTemplateTerminateRequest;
    }

    public function setParamCouponTemplateTerminateRequest(AlibabaWdkCouponTemplateTerminateCouponTemplateTerminateRequest $paramCouponTemplateTerminateRequest){
        $this->paramCouponTemplateTerminateRequest = $paramCouponTemplateTerminateRequest;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.template.terminate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramCouponTemplateTerminateRequest)) {
            $requestParam["param_coupon_template_terminate_request"] = TopUtil::convertStruct($this->paramCouponTemplateTerminateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

