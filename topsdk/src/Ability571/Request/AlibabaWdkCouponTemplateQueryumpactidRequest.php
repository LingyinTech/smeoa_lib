<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaWdkCouponTemplateQueryumpactidRequest {

    /**
        券模版id列表
     **/
    private $sourceIds;

    /**
        优惠券类型
     **/
    private $wdkCouponType;


    public function getSourceIds() : array{
        return $this->sourceIds;
    }

    public function setSourceIds(array $sourceIds){
        $this->sourceIds = $sourceIds;
    }

    public function getWdkCouponType() : int{
        return $this->wdkCouponType;
    }

    public function setWdkCouponType(int $wdkCouponType){
        $this->wdkCouponType = $wdkCouponType;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.template.queryumpactid";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->sourceIds)) {
            $requestParam["source_ids"] = TopUtil::convertBasicList($this->sourceIds);
        }

        if (!TopUtil::checkEmpty($this->wdkCouponType)) {
            $requestParam["wdk_coupon_type"] = TopUtil::convertBasic($this->wdkCouponType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

