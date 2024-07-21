<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingExpirePromotionQueryExpirePromotionBo {

    /**
        优惠详情
     **/
    public $period_infos;

    /**
        商品
     **/
    public $sku_code;

    /**
        门店
     **/
    public $shop_ids;

    /**
        商家code
     **/
    public $merchant_code;


    public function getPeriodInfos() : array{
        return $this->period_infos;
    }

    public function setPeriodInfos(array $periodInfos){
        $this->period_infos = $periodInfos;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getShopIds() : array{
        return $this->shop_ids;
    }

    public function setShopIds(array $shopIds){
        $this->shop_ids = $shopIds;
    }

    public function getMerchantCode() : string{
        return $this->merchant_code;
    }

    public function setMerchantCode(string $merchantCode){
        $this->merchant_code = $merchantCode;
    }


}

