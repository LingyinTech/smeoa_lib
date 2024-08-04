<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeAmountGetOrderAmount {

    /**
        子交易订单编号
     **/
    public $oid;

    /**
        商品标题
     **/
    public $title;

    /**
        子订单对应的商品数字id
     **/
    public $num_iid;

    /**
        子订单对应的商品的sku_id
     **/
    public $sku_id;

    /**
        SKU的值。如：机身颜色:黑色;手机套餐:官方标配
     **/
    public $sku_properties_name;

    /**
        子交易订单中购买商品的数量
     **/
    public $num;

    /**
        商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $price;

    /**
        子订单的系统优惠金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $discount_fee;

    /**
        子订单的系统优惠的名称，对应于discount_fee的名称
     **/
    public $promotion_name;

    /**
        卖家手工调整的子订单的优惠金额.格式为:1.01;单位:元;精确到小数点后两位.
     **/
    public $adjust_fee;

    /**
        分摊之后的实付金额
     **/
    public $divide_order_fee;

    /**
        优惠分摊
     **/
    public $part_mjz_discount;

    /**
        子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。计算公式如下：payment = price * num + adjust_fee - discount_fee + post_fee(邮费，单笔子订单时子订单实付金额包含邮费，多笔子订单时不包含邮费)；对于退款成功的子订单，由于主订单的优惠分摊金额，会造成该字段可能不为0.00元。建议使用退款前的实付金额减去退款单中的实际退款金额计算。
     **/
    public $payment;


    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getSkuPropertiesName() : string{
        return $this->sku_properties_name;
    }

    public function setSkuPropertiesName(string $skuPropertiesName){
        $this->sku_properties_name = $skuPropertiesName;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getDiscountFee() : string{
        return $this->discount_fee;
    }

    public function setDiscountFee(string $discountFee){
        $this->discount_fee = $discountFee;
    }

    public function getPromotionName() : string{
        return $this->promotion_name;
    }

    public function setPromotionName(string $promotionName){
        $this->promotion_name = $promotionName;
    }

    public function getAdjustFee() : string{
        return $this->adjust_fee;
    }

    public function setAdjustFee(string $adjustFee){
        $this->adjust_fee = $adjustFee;
    }

    public function getDivideOrderFee() : string{
        return $this->divide_order_fee;
    }

    public function setDivideOrderFee(string $divideOrderFee){
        $this->divide_order_fee = $divideOrderFee;
    }

    public function getPartMjzDiscount() : string{
        return $this->part_mjz_discount;
    }

    public function setPartMjzDiscount(string $partMjzDiscount){
        $this->part_mjz_discount = $partMjzDiscount;
    }

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }


}

