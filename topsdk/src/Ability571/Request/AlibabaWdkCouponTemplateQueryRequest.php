<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkCouponTemplateQueryCouponTemplateQueryRequest;

class AlibabaWdkCouponTemplateQueryRequest {

    /**
        系统自动生成
     **/
    private $paramCouponTemplateQueryRequest;


    public function getParamCouponTemplateQueryRequest() : AlibabaWdkCouponTemplateQueryCouponTemplateQueryRequest{
        return $this->paramCouponTemplateQueryRequest;
    }

    public function setParamCouponTemplateQueryRequest(AlibabaWdkCouponTemplateQueryCouponTemplateQueryRequest $paramCouponTemplateQueryRequest){
        $this->paramCouponTemplateQueryRequest = $paramCouponTemplateQueryRequest;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.template.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramCouponTemplateQueryRequest)) {
            $requestParam["param_coupon_template_query_request"] = TopUtil::convertStruct($this->paramCouponTemplateQueryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

