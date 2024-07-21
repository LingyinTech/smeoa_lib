<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkCouponSkuQueryCouponTemplateItemQueryRequest;

class AlibabaWdkCouponSkuQueryRequest {

    /**
        请求
     **/
    private $paramCouponTemplateItemQueryRequest;


    public function getParamCouponTemplateItemQueryRequest() : AlibabaWdkCouponSkuQueryCouponTemplateItemQueryRequest{
        return $this->paramCouponTemplateItemQueryRequest;
    }

    public function setParamCouponTemplateItemQueryRequest(AlibabaWdkCouponSkuQueryCouponTemplateItemQueryRequest $paramCouponTemplateItemQueryRequest){
        $this->paramCouponTemplateItemQueryRequest = $paramCouponTemplateItemQueryRequest;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.sku.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramCouponTemplateItemQueryRequest)) {
            $requestParam["param_coupon_template_item_query_request"] = TopUtil::convertStruct($this->paramCouponTemplateItemQueryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

