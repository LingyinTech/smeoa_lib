<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingPricePromotionPriceDO {

    /**
        促销说明
     **/
    public $promotion_reason;

    /**
        记录标识
     **/
    public $id;

    /**
        店铺编码
     **/
    public $shop_code;

    /**
        促销类型
     **/
    public $promotion_type;

    /**
        店铺标识
     **/
    public $shop_id;

    /**
        促销开始时间
     **/
    public $promotion_start;

    /**
        促销赠品信息
     **/
    public $promotion_gift_info;

    /**
        促销结束时间
     **/
    public $promotion_end;

    /**
        商家编码
     **/
    public $merchant_code;

    /**
        促销价格
     **/
    public $promotion_price;

    /**
        商品编码
     **/
    public $sku_code;

    /**
        是否参加了促销
     **/
    public $if_promotion;

    /**
        会员促销价结束时间
     **/
    public $member_promotion_end_time;

    /**
        会员促销价开始时间
     **/
    public $member_promotion_start_time;

    /**
        会员促销价
     **/
    public $member_promotion_price;

    /**
        会员促销活动类型
     **/
    public $member_promotion_type;


    public function getPromotionReason() : string{
        return $this->promotion_reason;
    }

    public function setPromotionReason(string $promotionReason){
        $this->promotion_reason = $promotionReason;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getShopCode() : string{
        return $this->shop_code;
    }

    public function setShopCode(string $shopCode){
        $this->shop_code = $shopCode;
    }

    public function getPromotionType() : string{
        return $this->promotion_type;
    }

    public function setPromotionType(string $promotionType){
        $this->promotion_type = $promotionType;
    }

    public function getShopId() : int{
        return $this->shop_id;
    }

    public function setShopId(int $shopId){
        $this->shop_id = $shopId;
    }

    public function getPromotionStart() : string{
        return $this->promotion_start;
    }

    public function setPromotionStart(string $promotionStart){
        $this->promotion_start = $promotionStart;
    }

    public function getPromotionGiftInfo() : string{
        return $this->promotion_gift_info;
    }

    public function setPromotionGiftInfo(string $promotionGiftInfo){
        $this->promotion_gift_info = $promotionGiftInfo;
    }

    public function getPromotionEnd() : string{
        return $this->promotion_end;
    }

    public function setPromotionEnd(string $promotionEnd){
        $this->promotion_end = $promotionEnd;
    }

    public function getMerchantCode() : string{
        return $this->merchant_code;
    }

    public function setMerchantCode(string $merchantCode){
        $this->merchant_code = $merchantCode;
    }

    public function getPromotionPrice() : int{
        return $this->promotion_price;
    }

    public function setPromotionPrice(int $promotionPrice){
        $this->promotion_price = $promotionPrice;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getIfPromotion() : int{
        return $this->if_promotion;
    }

    public function setIfPromotion(int $ifPromotion){
        $this->if_promotion = $ifPromotion;
    }

    public function getMemberPromotionEndTime() : string{
        return $this->member_promotion_end_time;
    }

    public function setMemberPromotionEndTime(string $memberPromotionEndTime){
        $this->member_promotion_end_time = $memberPromotionEndTime;
    }

    public function getMemberPromotionStartTime() : string{
        return $this->member_promotion_start_time;
    }

    public function setMemberPromotionStartTime(string $memberPromotionStartTime){
        $this->member_promotion_start_time = $memberPromotionStartTime;
    }

    public function getMemberPromotionPrice() : int{
        return $this->member_promotion_price;
    }

    public function setMemberPromotionPrice(int $memberPromotionPrice){
        $this->member_promotion_price = $memberPromotionPrice;
    }

    public function getMemberPromotionType() : string{
        return $this->member_promotion_type;
    }

    public function setMemberPromotionType(string $memberPromotionType){
        $this->member_promotion_type = $memberPromotionType;
    }


}

