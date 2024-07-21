<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeGetOrder {

    /**
        商品标题
     **/
    public $title;

    /**
        商品图片的绝对路径
     **/
    public $pic_path;

    /**
        商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $price;

    /**
        商品数字ID
     **/
    public $num_iid;

    /**
        商品的最小库存单位Sku的id.可以通过taobao.item.sku.get获取详细的Sku信息
     **/
    public $sku_id;

    /**
        退款状态。退款状态。可选值 WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意) WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货) WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货) SELLER_REFUSE_BUYER(卖家拒绝退款) CLOSED(退款关闭) SUCCESS(退款成功)
     **/
    public $refund_status;

    /**
        订单状态（请关注此状态，如果为TRADE_CLOSED_BY_TAOBAO状态，则不要对此订单进行发货，切记啊！）。可选值: <ul><li>TRADE_NO_CREATE_PAY(没有创建支付宝交易) <li>WAIT_BUYER_PAY(等待买家付款) <li>WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) <li>WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) <li>TRADE_BUYER_SIGNED(买家已签收,货到付款专用) <li>TRADE_FINISHED(交易成功) <li>TRADE_CLOSED(付款以后用户退款成功，交易自动关闭) <li>TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)<li>PAY_PENDING(国际信用卡支付付款确认中)
     **/
    public $status;

    /**
        子订单编号
     **/
    public $oid;

    /**
        应付金额（商品价格 * 商品数量 + 手工调整金额 - 子订单级订单优惠金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $total_fee;

    /**
        子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。对于多子订单的交易，计算公式如下：payment = price * num + adjust_fee - discount_fee ；单子订单交易，payment与主订单的payment一致，对于退款成功的子订单，由于主订单的优惠分摊金额，会造成该字段可能不为0.00元。建议使用退款前的实付金额减去退款单中的实际退款金额计算。
     **/
    public $payment;

    /**
        子订单级订单优惠金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $discount_fee;

    /**
        手工调整金额.格式为:1.01;单位:元;精确到小数点后两位.
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
        SKU的值。如：机身颜色:黑色;手机套餐:官方标配
     **/
    public $sku_properties_name;

    /**
        套餐的值。如：M8原装电池:便携支架:M8专用座充:莫凡保护袋
     **/
    public $item_meal_name;

    /**
        购买数量。取值范围:大于零的整数
     **/
    public $num;

    /**
        外部网店自己定义的Sku编号
     **/
    public $outer_sku_id;

    /**
        商家外部编码(可与商家外部系统对接)。外部商家自己定义的商品Item的id，可以通过taobao.items.custom.get获取商品的Item的信息
     **/
    public $outer_iid;

    /**
        买家是否已评价。可选值：true(已评价)，false(未评价)
     **/
    public $buyer_rate;

    /**
        卖家是否已评价。可选值：true(已评价)，false(未评价)
     **/
    public $seller_rate;

    /**
        卖家类型，可选值为：B（商城商家），C（普通卖家）
     **/
    public $seller_type;

    /**
        表示订单交易是否含有对应的代销采购单。如果该订单中存在一个对应的代销采购单，那么该值为true；反之，该值为false。
     **/
    public $is_daixiao;

    /**
        对应门票有效期的外部id
     **/
    public $ticket_outer_id;

    /**
        门票有效期的key
     **/
    public $ticket_expdate_key;

    /**
        子订单是否是www订单
     **/
    public $is_www;

    /**
        发货的仓库编码
     **/
    public $store_code;

    /**
        支持家装类物流的类型
     **/
    public $tmser_spu_code;

    /**
        天猫汽车服务预约时间
     **/
    public $et_ser_time;

    /**
        电子凭证预约门店地址
     **/
    public $et_shop_name;

    /**
        电子凭证核销门店地址
     **/
    public $et_verified_shop_name;

    /**
        车牌号码
     **/
    public $et_plate_number;

    /**
        天猫国际子订单关税税费
     **/
    public $sub_order_tax_fee;

    /**
        天猫国际子订单关税税率
     **/
    public $sub_order_tax_rate;

    /**
        征集预售订单征集状态：1（征集中），2（征集成功），3（征集失败）
     **/
    public $zhengji_status;

    /**
        天猫国际子订单计税优惠金额
     **/
    public $sub_order_tax_promotion_fee;

    /**
        天猫国际子订单是否包税
     **/
    public $tax_free;

    /**
        天猫国际子订单包税金额
     **/
    public $tax_coupon_discount;

    /**
        特殊退款状态
     **/
    public $special_refund_type;

    /**
        子订单是否优惠贬值
     **/
    public $is_devalue_fee;


    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPicPath() : string{
        return $this->pic_path;
    }

    public function setPicPath(string $picPath){
        $this->pic_path = $picPath;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getRefundStatus() : string{
        return $this->refund_status;
    }

    public function setRefundStatus(string $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }

    public function getDiscountFee() : string{
        return $this->discount_fee;
    }

    public function setDiscountFee(string $discountFee){
        $this->discount_fee = $discountFee;
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

    public function getSkuPropertiesName() : string{
        return $this->sku_properties_name;
    }

    public function setSkuPropertiesName(string $skuPropertiesName){
        $this->sku_properties_name = $skuPropertiesName;
    }

    public function getItemMealName() : string{
        return $this->item_meal_name;
    }

    public function setItemMealName(string $itemMealName){
        $this->item_meal_name = $itemMealName;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getOuterSkuId() : string{
        return $this->outer_sku_id;
    }

    public function setOuterSkuId(string $outerSkuId){
        $this->outer_sku_id = $outerSkuId;
    }

    public function getOuterIid() : string{
        return $this->outer_iid;
    }

    public function setOuterIid(string $outerIid){
        $this->outer_iid = $outerIid;
    }

    public function getBuyerRate() : bool{
        return $this->buyer_rate;
    }

    public function setBuyerRate(bool $buyerRate){
        $this->buyer_rate = $buyerRate;
    }

    public function getSellerRate() : bool{
        return $this->seller_rate;
    }

    public function setSellerRate(bool $sellerRate){
        $this->seller_rate = $sellerRate;
    }

    public function getSellerType() : string{
        return $this->seller_type;
    }

    public function setSellerType(string $sellerType){
        $this->seller_type = $sellerType;
    }

    public function getIsDaixiao() : bool{
        return $this->is_daixiao;
    }

    public function setIsDaixiao(bool $isDaixiao){
        $this->is_daixiao = $isDaixiao;
    }

    public function getTicketOuterId() : string{
        return $this->ticket_outer_id;
    }

    public function setTicketOuterId(string $ticketOuterId){
        $this->ticket_outer_id = $ticketOuterId;
    }

    public function getTicketExpdateKey() : string{
        return $this->ticket_expdate_key;
    }

    public function setTicketExpdateKey(string $ticketExpdateKey){
        $this->ticket_expdate_key = $ticketExpdateKey;
    }

    public function getIsWww() : bool{
        return $this->is_www;
    }

    public function setIsWww(bool $isWww){
        $this->is_www = $isWww;
    }

    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }

    public function getTmserSpuCode() : string{
        return $this->tmser_spu_code;
    }

    public function setTmserSpuCode(string $tmserSpuCode){
        $this->tmser_spu_code = $tmserSpuCode;
    }

    public function getEtSerTime() : string{
        return $this->et_ser_time;
    }

    public function setEtSerTime(string $etSerTime){
        $this->et_ser_time = $etSerTime;
    }

    public function getEtShopName() : string{
        return $this->et_shop_name;
    }

    public function setEtShopName(string $etShopName){
        $this->et_shop_name = $etShopName;
    }

    public function getEtVerifiedShopName() : string{
        return $this->et_verified_shop_name;
    }

    public function setEtVerifiedShopName(string $etVerifiedShopName){
        $this->et_verified_shop_name = $etVerifiedShopName;
    }

    public function getEtPlateNumber() : string{
        return $this->et_plate_number;
    }

    public function setEtPlateNumber(string $etPlateNumber){
        $this->et_plate_number = $etPlateNumber;
    }

    public function getSubOrderTaxFee() : string{
        return $this->sub_order_tax_fee;
    }

    public function setSubOrderTaxFee(string $subOrderTaxFee){
        $this->sub_order_tax_fee = $subOrderTaxFee;
    }

    public function getSubOrderTaxRate() : string{
        return $this->sub_order_tax_rate;
    }

    public function setSubOrderTaxRate(string $subOrderTaxRate){
        $this->sub_order_tax_rate = $subOrderTaxRate;
    }

    public function getZhengjiStatus() : string{
        return $this->zhengji_status;
    }

    public function setZhengjiStatus(string $zhengjiStatus){
        $this->zhengji_status = $zhengjiStatus;
    }

    public function getSubOrderTaxPromotionFee() : string{
        return $this->sub_order_tax_promotion_fee;
    }

    public function setSubOrderTaxPromotionFee(string $subOrderTaxPromotionFee){
        $this->sub_order_tax_promotion_fee = $subOrderTaxPromotionFee;
    }

    public function getTaxFree() : bool{
        return $this->tax_free;
    }

    public function setTaxFree(bool $taxFree){
        $this->tax_free = $taxFree;
    }

    public function getTaxCouponDiscount() : string{
        return $this->tax_coupon_discount;
    }

    public function setTaxCouponDiscount(string $taxCouponDiscount){
        $this->tax_coupon_discount = $taxCouponDiscount;
    }

    public function getSpecialRefundType() : string{
        return $this->special_refund_type;
    }

    public function setSpecialRefundType(string $specialRefundType){
        $this->special_refund_type = $specialRefundType;
    }

    public function getIsDevalueFee() : bool{
        return $this->is_devalue_fee;
    }

    public function setIsDevalueFee(bool $isDevalueFee){
        $this->is_devalue_fee = $isDevalueFee;
    }


}

