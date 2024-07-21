<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenPosDiscountCodeCreateUniqueDiscountCodeRequest {

    /**
        折扣率 范围(0,100) 比如78折传78，8折传80。对应 discountType=7时必传
     **/
    public $discount_rate;

    /**
        过期时间。不传默认为当前时间+90天。最大支持有效期为90天后。
     **/
    public $expire_time;

    /**
        一口价。单位分。对应 discountType=8 时必传
     **/
    public $discount_price;

    /**
        折扣码类型, 7为折扣率码，8为一口价码
     **/
    public $discount_type;

    /**
        门店编码
     **/
    public $store_id;

    /**
        商品编码
     **/
    public $sku_code;


    public function getDiscountRate() : int{
        return $this->discount_rate;
    }

    public function setDiscountRate(int $discountRate){
        $this->discount_rate = $discountRate;
    }

    public function getExpireTime() : string{
        return $this->expire_time;
    }

    public function setExpireTime(string $expireTime){
        $this->expire_time = $expireTime;
    }

    public function getDiscountPrice() : int{
        return $this->discount_price;
    }

    public function setDiscountPrice(int $discountPrice){
        $this->discount_price = $discountPrice;
    }

    public function getDiscountType() : int{
        return $this->discount_type;
    }

    public function setDiscountType(int $discountType){
        $this->discount_type = $discountType;
    }

    public function getStoreId() : string{
        return $this->store_id;
    }

    public function setStoreId(string $storeId){
        $this->store_id = $storeId;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }


}

