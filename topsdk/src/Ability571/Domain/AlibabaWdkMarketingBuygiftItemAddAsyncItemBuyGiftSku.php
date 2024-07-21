<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingBuygiftItemAddAsyncItemBuyGiftSku {

    /**
        限购信息
     **/
    public $limit_info;

    /**
        商品的skuCode
     **/
    public $sku_code;

    /**
        买赠门槛数量
     **/
    public $buy_num;

    /**
        赠品的skuCode
     **/
    public $gift_sku_code;


    public function getLimitInfo() : AlibabaWdkMarketingBuygiftItemAddAsyncLimitInfo{
        return $this->limit_info;
    }

    public function setLimitInfo(AlibabaWdkMarketingBuygiftItemAddAsyncLimitInfo $limitInfo){
        $this->limit_info = $limitInfo;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getBuyNum() : int{
        return $this->buy_num;
    }

    public function setBuyNum(int $buyNum){
        $this->buy_num = $buyNum;
    }

    public function getGiftSkuCode() : string{
        return $this->gift_sku_code;
    }

    public function setGiftSkuCode(string $giftSkuCode){
        $this->gift_sku_code = $giftSkuCode;
    }


}

