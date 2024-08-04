<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeAmountGetPromotionDetail {

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


}

