<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingExpirePromotionCreateExpirePromotionBo {

    /**
        短保时间段信息
     **/
    public $period_infos;

    /**
        门店id
     **/
    public $shop_ids;

    /**
        商品skucode
     **/
    public $sku_code;


    public function getPeriodInfos() : array{
        return $this->period_infos;
    }

    public function setPeriodInfos(array $periodInfos){
        $this->period_infos = $periodInfos;
    }

    public function getShopIds() : array{
        return $this->shop_ids;
    }

    public function setShopIds(array $shopIds){
        $this->shop_ids = $shopIds;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }


}

