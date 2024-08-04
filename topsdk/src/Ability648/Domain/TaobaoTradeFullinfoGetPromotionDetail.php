<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetPromotionDetail {

    /**
        交易的主订单或子订单号
     **/
    public $id;

    /**
        优惠信息的名称
     **/
    public $promotion_name;

    /**
        优惠金额（免运费、限时打折时为空）,单位：元
     **/
    public $discount_fee;

    /**
        满就送商品时，所送商品的名称
     **/
    public $gift_item_name;

    /**
        赠品的宝贝id
     **/
    public $gift_item_id;

    /**
        满就送礼物的礼物数量
     **/
    public $gift_item_num;

    /**
        优惠活动的描述
     **/
    public $promotion_desc;

    /**
        优惠id，(由营销工具id、优惠活动id和优惠详情id组成，结构为：营销工具id-优惠活动id_优惠详情id，如mjs-123024_211143）
     **/
    public $promotion_id;

    /**
        分摊优惠金额（免运费、限时打折时为空）,单位：元
     **/
    public $kd_discount_fee;

    /**
        若优惠项在主订单上，返回子订单的分摊信息
     **/
    public $kd_child_discount_fee;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPromotionName() : string{
        return $this->promotion_name;
    }

    public function setPromotionName(string $promotionName){
        $this->promotion_name = $promotionName;
    }

    public function getDiscountFee() : string{
        return $this->discount_fee;
    }

    public function setDiscountFee(string $discountFee){
        $this->discount_fee = $discountFee;
    }

    public function getGiftItemName() : string{
        return $this->gift_item_name;
    }

    public function setGiftItemName(string $giftItemName){
        $this->gift_item_name = $giftItemName;
    }

    public function getGiftItemId() : string{
        return $this->gift_item_id;
    }

    public function setGiftItemId(string $giftItemId){
        $this->gift_item_id = $giftItemId;
    }

    public function getGiftItemNum() : string{
        return $this->gift_item_num;
    }

    public function setGiftItemNum(string $giftItemNum){
        $this->gift_item_num = $giftItemNum;
    }

    public function getPromotionDesc() : string{
        return $this->promotion_desc;
    }

    public function setPromotionDesc(string $promotionDesc){
        $this->promotion_desc = $promotionDesc;
    }

    public function getPromotionId() : string{
        return $this->promotion_id;
    }

    public function setPromotionId(string $promotionId){
        $this->promotion_id = $promotionId;
    }

    public function getKdDiscountFee() : string{
        return $this->kd_discount_fee;
    }

    public function setKdDiscountFee(string $kdDiscountFee){
        $this->kd_discount_fee = $kdDiscountFee;
    }

    public function getKdChildDiscountFee() : string{
        return $this->kd_child_discount_fee;
    }

    public function setKdChildDiscountFee(string $kdChildDiscountFee){
        $this->kd_child_discount_fee = $kdChildDiscountFee;
    }


}

