<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaWdkMarketingExpirePromotionQueryRequest {

    /**
        店铺id
     **/
    private $shopId;

    /**
        商品skucode
     **/
    private $skuCode;


    public function getShopId() : string{
        return $this->shopId;
    }

    public function setShopId(string $shopId){
        $this->shopId = $shopId;
    }

    public function getSkuCode() : string{
        return $this->skuCode;
    }

    public function setSkuCode(string $skuCode){
        $this->skuCode = $skuCode;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.expire.promotion.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->shopId)) {
            $requestParam["shop_id"] = TopUtil::convertBasic($this->shopId);
        }

        if (!TopUtil::checkEmpty($this->skuCode)) {
            $requestParam["sku_code"] = TopUtil::convertBasic($this->skuCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

