<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFenxiaoOrdersGetSubOrderDetail {

    /**
        消费者订单子订单ID（经销模式下不存在该值）
     **/
    public $tc_order_id;

    /**
        子采购单编号
     **/
    public $fenxiao_id;

    /**
        分销平台上的产品id
     **/
    public $item_id;

    /**
        商品商家编码，供应商发布产品是定义的产品编码
     **/
    public $item_outer_id;

    /**
        分销产品的SKU ID。 当存在时才会有值，建议使用sku_outer_id，sku_properties这两个值
     **/
    public $sku_id;

    /**
        消费者购买宝贝ID，不存在时为0。 2015年4月15日之前创建的采购单该字段都是0。
     **/
    public $auction_id;

    /**
        消费者购买宝贝SKU ID，不存在时为0。 2015年3月15日之前创建的采购单该字段都是0。
     **/
    public $auction_sku_id;

    /**
        SKU商家编码，供应商发布产品SKU是定义的编码
     **/
    public $sku_outer_id;

    /**
        SKU属性值。如: 颜色:红色:别名;尺码:L:别名
     **/
    public $sku_properties;

    /**
        老的SKU属性值。如: 颜色:红色:别名;尺码:L:别名
     **/
    public $old_sku_properties;

    /**
        产品的采购数量。取值范围:大于零的整数
     **/
    public $num;

    /**
        采购的产品标题。
     **/
    public $title;

    /**
        产品的采购价格。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
     **/
    public $price;

    /**
        废弃： 产品快照地址
     **/
    public $snapshot_url;

    /**
        子单创建时间。格式 yyyy-MM-dd HH:mm:ss 。
     **/
    public $created;

    /**
        采购单交易状态，耦合了退款状态，废弃。  可选值：  	WAIT_BUYER_PAY(等待付款)  	WAIT_SELLER_CONFIRM(付款信息待确认，待发货) 	WAIT_SELLER_SEND_GOODS(已付款，待发货） 	WAIT_BUYER_CONFIRM_GOODS(已付款，已发货) 	TRADE_FINISHED(交易成功) 	TRADE_CLOSED(交易关闭) 	TRADE_REFUNDING(退款中) 	TRADE_REFUNDED(已退款) 	PAID_FORBID_CONSIGN(已付款, 禁止发货(大快消行业)) WAIT_BUYER_CONFIRM_GOODS_ACOUNTED(已付款（已分账），已发货。只对代销分账支持) PAY_ACOUNTED_GOODS_CONFIRM （已分账发货成功） PAY_WAIT_ACOUNT_GOODS_CONFIRM（已付款，确认收货）
     **/
    public $status;

    /**
        建议废弃：只有当担保交易支付时存在，为TP800的订单编号 子采购单id，淘宝交易主键，采购单未付款时为0.（只有支付宝 付款才有这个id，其余付款形式该字段为0）
     **/
    public $id;

    /**
        分销商应付金额。 计算公式：num(采购数量)*price(采购价) - 折扣。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
     **/
    public $total_fee;

    /**
        分销商实付金额。 total_fee（分销商应付金额）+ 改价。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
     **/
    public $distributor_payment;

    /**
        买家订单上对应的子单零售金额。 计算公式：消费者订单的成交价 * 购买数量 + 调整金额 - 优惠折扣（精确到2位小数;单位:元。如:200.07，表示:200元7分）
     **/
    public $buyer_payment;

    /**
        退款金额，单位元。（精确到2位小数;单位:元。如:12.23，表示:12元2角3分）
     **/
    public $refund_fee;

    /**
        消费者的交易订单状态（代销采购单对应下游200订单状态）。 可选值： WAIT_SELLER_SEND_GOODS(已付款，待发货) WAIT_BUYER_CONFIRM_GOODS(已付款，已发货) TRADE_CLOSED(已退款成功) TRADE_REFUNDING(退款中) TRADE_FINISHED(交易成功) TRADE_CLOSED_BY_TAOBAO(交易关闭)
     **/
    public $order_200_status;

    /**
        分销商店铺中宝贝一口价，消费者看见的宝贝价格。单位元 代销场景下存在，此价格不是实付款的价格。
     **/
    public $auction_price;

    /**
        发票应开金额。 子单的消费者实付分摊金额。根据买家实际付款去除邮费后，按各个子单(商品)金额比例进行分摊后的金额，仅供开发票时做票面金额参考。
     **/
    public $bill_fee;

    /**
        后端商品id
     **/
    public $sc_item_id;

    /**
        商品优惠类型：聚划算、秒杀或其他
     **/
    public $tc_preferential_type;

    /**
        优惠金额，始终为正数，单位是分，不带小数
     **/
    public $tc_discount_fee;

    /**
        商品的卖出金额调整，金额增加时为正数，金额减少时为负数，单位是分，不带小数
     **/
    public $tc_adjust_fee;

    /**
        消费者订单优惠金额，始终为正数，单位是分，不带小数
     **/
    public $discount_fee;

    /**
        采购子订单优惠活动类型。0=无优惠；1=限时折
     **/
    public $promotion_type;

    /**
        建议废弃 Feature对象列表目前已有的属性： attr_key为 www，attr_value为1 表示是www子订单； attr_key为 wwwStoreCode，attr_value是www子订单发货的仓库编码； attr_key为 isWt，attr_value为1 表示是网厅子订单； attr_key为wtInfo,attr_value为网厅相关合约信息；  attr_key为 storeCode，attr_value为仓库信息；  attr_key为 erpHold，attr_value为1表示强管控中， attr_value为2表示分单完成；
     **/
    public $features;

    /**
        子订单留言信息
     **/
    public $top_memo;

    /**
        真正的采购单交易状态。  可选值：  LOCKED(交易hold单中) WAIT_FOR_PAY(等待付款)  	PAID_WAIT_FOR_CONFIRM(付款信息待确认，待发货) 	PAID(已付款待发货）CONSIGNED(已发货待确认收货) 	ORDER_SUCCESS(交易成功) 	ORDER_CLOSE(交易关闭) 
     **/
    public $order_status;

    /**
        采购单售中退款状态。  可选值：  RF_STATUS_NO_REFUND(子单无退款) RF_STATUS_REFUNDING(子单退款中)  	RF_STATUS_END_REFUND(子单退款结束)
     **/
    public $refund_status;

    /**
        采购单售后维权状态。可选值：ORDER_RF_NO_SUIT(未申请维权) ORDER_RF_SUITING(维权中) ORDER_RF_END_SUIT(维权结束)
     **/
    public $suit_status;


    public function getTcOrderId() : int{
        return $this->tc_order_id;
    }

    public function setTcOrderId(int $tcOrderId){
        $this->tc_order_id = $tcOrderId;
    }

    public function getFenxiaoId() : int{
        return $this->fenxiao_id;
    }

    public function setFenxiaoId(int $fenxiaoId){
        $this->fenxiao_id = $fenxiaoId;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getItemOuterId() : string{
        return $this->item_outer_id;
    }

    public function setItemOuterId(string $itemOuterId){
        $this->item_outer_id = $itemOuterId;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getAuctionId() : int{
        return $this->auction_id;
    }

    public function setAuctionId(int $auctionId){
        $this->auction_id = $auctionId;
    }

    public function getAuctionSkuId() : int{
        return $this->auction_sku_id;
    }

    public function setAuctionSkuId(int $auctionSkuId){
        $this->auction_sku_id = $auctionSkuId;
    }

    public function getSkuOuterId() : string{
        return $this->sku_outer_id;
    }

    public function setSkuOuterId(string $skuOuterId){
        $this->sku_outer_id = $skuOuterId;
    }

    public function getSkuProperties() : string{
        return $this->sku_properties;
    }

    public function setSkuProperties(string $skuProperties){
        $this->sku_properties = $skuProperties;
    }

    public function getOldSkuProperties() : string{
        return $this->old_sku_properties;
    }

    public function setOldSkuProperties(string $oldSkuProperties){
        $this->old_sku_properties = $oldSkuProperties;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getSnapshotUrl() : string{
        return $this->snapshot_url;
    }

    public function setSnapshotUrl(string $snapshotUrl){
        $this->snapshot_url = $snapshotUrl;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getDistributorPayment() : string{
        return $this->distributor_payment;
    }

    public function setDistributorPayment(string $distributorPayment){
        $this->distributor_payment = $distributorPayment;
    }

    public function getBuyerPayment() : string{
        return $this->buyer_payment;
    }

    public function setBuyerPayment(string $buyerPayment){
        $this->buyer_payment = $buyerPayment;
    }

    public function getRefundFee() : string{
        return $this->refund_fee;
    }

    public function setRefundFee(string $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getOrder200Status() : string{
        return $this->order_200_status;
    }

    public function setOrder200Status(string $order200Status){
        $this->order_200_status = $order200Status;
    }

    public function getAuctionPrice() : string{
        return $this->auction_price;
    }

    public function setAuctionPrice(string $auctionPrice){
        $this->auction_price = $auctionPrice;
    }

    public function getBillFee() : string{
        return $this->bill_fee;
    }

    public function setBillFee(string $billFee){
        $this->bill_fee = $billFee;
    }

    public function getScItemId() : int{
        return $this->sc_item_id;
    }

    public function setScItemId(int $scItemId){
        $this->sc_item_id = $scItemId;
    }

    public function getTcPreferentialType() : string{
        return $this->tc_preferential_type;
    }

    public function setTcPreferentialType(string $tcPreferentialType){
        $this->tc_preferential_type = $tcPreferentialType;
    }

    public function getTcDiscountFee() : int{
        return $this->tc_discount_fee;
    }

    public function setTcDiscountFee(int $tcDiscountFee){
        $this->tc_discount_fee = $tcDiscountFee;
    }

    public function getTcAdjustFee() : int{
        return $this->tc_adjust_fee;
    }

    public function setTcAdjustFee(int $tcAdjustFee){
        $this->tc_adjust_fee = $tcAdjustFee;
    }

    public function getDiscountFee() : string{
        return $this->discount_fee;
    }

    public function setDiscountFee(string $discountFee){
        $this->discount_fee = $discountFee;
    }

    public function getPromotionType() : string{
        return $this->promotion_type;
    }

    public function setPromotionType(string $promotionType){
        $this->promotion_type = $promotionType;
    }

    public function getFeatures() : array{
        return $this->features;
    }

    public function setFeatures(array $features){
        $this->features = $features;
    }

    public function getTopMemo() : TaobaoFenxiaoOrdersGetTopMemoDto{
        return $this->top_memo;
    }

    public function setTopMemo(TaobaoFenxiaoOrdersGetTopMemoDto $topMemo){
        $this->top_memo = $topMemo;
    }

    public function getOrderStatus() : string{
        return $this->order_status;
    }

    public function setOrderStatus(string $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getRefundStatus() : string{
        return $this->refund_status;
    }

    public function setRefundStatus(string $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getSuitStatus() : string{
        return $this->suit_status;
    }

    public function setSuitStatus(string $suitStatus){
        $this->suit_status = $suitStatus;
    }


}

