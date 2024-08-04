<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetOrder {

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
        商家外部编码(可与商家外部系统对接)。外部商家自己定义的商品Item的id，可以通过taobao.items.custom.get获取商品的Item的信息
     **/
    public $outer_iid;

    /**
        外部网店自己定义的Sku编号
     **/
    public $outer_sku_id;

    /**
        退款状态。退款状态。可选值 WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意) WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货) WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货) SELLER_REFUSE_BUYER(卖家拒绝退款) CLOSED(退款关闭) SUCCESS(退款成功)
     **/
    public $refund_status;

    /**
        订单状态（请关注此状态，如果为TRADE_CLOSED_BY_TAOBAO状态，则不要对此订单进行发货，切记啊！）。可选值: <ul><li>TRADE_NO_CREATE_PAY(没有创建支付宝交易) </li><li>WAIT_BUYER_PAY(等待买家付款) </li><li>WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) </li><li>WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) </li><li>TRADE_BUYER_SIGNED(买家已签收,货到付款专用) </li><li>TRADE_FINISHED(交易成功) </li><li>TRADE_CLOSED(付款以后用户退款成功，交易自动关闭) </li><li>TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)</li><li>PAY_PENDING(国际信用卡支付付款确认中)</li></ul>
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
        套餐ID
     **/
    public $item_meal_id;

    /**
        套餐的值。如：M8原装电池:便携支架:M8专用座充:莫凡保护袋
     **/
    public $item_meal_name;

    /**
        购买数量。取值范围:大于零的整数
     **/
    public $num;

    /**
        订单快照URL
     **/
    public $snapshot_url;

    /**
        订单超时到期时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $timeout_action_time;

    /**
        商品备注
     **/
    public $item_memo;

    /**
        买家是否已评价。可选值：true(已评价)，false(未评价)
     **/
    public $buyer_rate;

    /**
        卖家是否已评价。可选值：true(已评价)，false(未评价)
     **/
    public $seller_rate;

    /**
        最近退款ID
     **/
    public $refund_id;

    /**
        卖家类型，可选值为：B（商城商家），C（普通卖家）
     **/
    public $seller_type;

    /**
        交易商品对应的类目ID
     **/
    public $cid;

    /**
        是否超卖
     **/
    public $is_oversold;

    /**
        子订单的交易结束时间说明：子订单有单独的结束时间，与主订单的结束时间可能有所不同，在有退款发起的时候或者是主订单分阶段付款的时候，子订单的结束时间会早于主订单的结束时间，所以开放这个字段便于订单结束状态的判断
     **/
    public $end_time;

    /**
        子订单来源,如jhs(聚划算)、taobao(淘宝)、wap(无线)
     **/
    public $order_from;

    /**
        是否是服务订单，是返回true，否返回false。
     **/
    public $is_service_order;

    /**
        子订单发货时间，当卖家对订单进行了多次发货，子订单的发货时间和主订单的发货时间可能不一样了，那么就需要以子订单的时间为准。（没有进行多次发货的订单，主订单的发货时间和子订单的发货时间都一样）
     **/
    public $consign_time;

    /**
        子订单的运送方式（卖家对订单进行多次发货之后，一个主订单下的子订单的运送方式可能不同，用order.shipping_type来区分子订单的运送方式）
     **/
    public $shipping_type;

    /**
        子订单发货的快递公司名称
     **/
    public $logistics_company;

    /**
        子订单所在包裹的运单号
     **/
    public $invoice_no;

    /**
        捆绑的子订单号，表示该子订单要和捆绑的子订单一起发货，用于卖家子订单捆绑发货
     **/
    public $bind_oid;

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
        天猫国际官网直供子订单关税税费
     **/
    public $sub_order_tax_fee;

    /**
        天猫国际官网直供子订单关税税率
     **/
    public $sub_order_tax_rate;

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
        子订单预计发货时间
     **/
    public $estimate_con_time;

    /**
        bind_oid字段的升级，支持返回绑定的多个子订单，多个子订单以半角逗号分隔
     **/
    public $bind_oids;

    /**
        征集预售订单征集状态：1（征集中），2（征集成功），3（征集失败）
     **/
    public $zhengji_status;

    /**
        免单资格属性
     **/
    public $md_qualification;

    /**
        免单金额
     **/
    public $md_fee;

    /**
        定制信息
     **/
    public $customization;

    /**
        库存类型：6为在途
     **/
    public $inv_type;

    /**
        是否发货
     **/
    public $is_sh_ship;

    /**
        仓储信息
     **/
    public $shipper;

    /**
        订单履行类型，如喵鲜生极速达（jsd）
     **/
    public $f_type;

    /**
        订单履行状态，如喵鲜生极速达：分单完成
     **/
    public $f_status;

    /**
        单履行内容，如喵鲜生极速达：storeId,phone
     **/
    public $f_term;

    /**
        天猫搭配宝
     **/
    public $combo_id;

    /**
        子订单扩展属性:<br/> is_free_down_payment:是否免首付：true：是，false：否，可选字段<br/> car_back_payment:返还免首付金额，单位：分，<br/> car_ref_activity_id:服务商传入活动ID，依赖外部服务商传入；<br/> uboxType :value为uboxTaotian 表示天猫U先仓配项目订单 ；<br/>
     **/
    public $order_attr;

    /**
        assemblyRela
     **/
    public $assembly_rela;

    /**
        assemblyPrice
     **/
    public $assembly_price;

    /**
        assemblyItem
     **/
    public $assembly_item;

    /**
        天猫国际子订单计税优惠金额
     **/
    public $sub_order_tax_promotion_fee;

    /**
        downPayment
     **/
    public $down_payment;

    /**
        downPaymentRatio
     **/
    public $down_payment_ratio;

    /**
        monthPayment
     **/
    public $month_payment;

    /**
        tailPayment
     **/
    public $tail_payment;

    /**
        installmentNum
     **/
    public $installment_num;

    /**
        penalty
     **/
    public $penalty;

    /**
        serviceFee
     **/
    public $service_fee;

    /**
        carTaker
     **/
    public $car_taker;

    /**
        carTakerPhone
     **/
    public $car_taker_phone;

    /**
        carTakerID
     **/
    public $car_taker_id;

    /**
        carStoreCode
     **/
    public $car_store_code;

    /**
        carStoreName
     **/
    public $car_store_name;

    /**
        outUniqueId
     **/
    public $out_unique_id;

    /**
        wsBankApplyNo
     **/
    public $ws_bank_apply_no;

    /**
        oidStr
     **/
    public $oid_str;

    /**
        花呗分期期数
     **/
    public $fqg_num;

    /**
        是否商家承担手续费
     **/
    public $is_fqg_s_fee;

    /**
        天猫国际订单是否包税
     **/
    public $tax_free;

    /**
        天猫国际订单包税金额
     **/
    public $tax_coupon_discount;

    /**
        nrReduceInvFail
     **/
    public $nr_reduce_inv_fail;

    /**
        新零售商家端商品唯一编号
     **/
    public $nr_outer_iid;

    /**
        bind_oids字段的升级，在交易成功和交易关闭状态下也能获取到，支持返回绑定的多个子订单，多个子订单以半角逗号分隔
     **/
    public $bind_oids_all_status;

    /**
        sortInfo
     **/
    public $sort_info;

    /**
        导购员Id
     **/
    public $o2o_guide_id;

    /**
        导购员名称
     **/
    public $o2o_guide_name;

    /**
        门店Id
     **/
    public $o2o_shop_id;

    /**
        门店名称
     **/
    public $o2o_shop_name;

    /**
        云店交易链路，为tmall.daogoubao.cloudstore时表示云店链路
     **/
    public $biz_code;

    /**
        云店标记为1，且bizCode不为tmall.daogoubao.cloudstore时，为旗舰店订单
     **/
    public $cloud_store;

    /**
        云店是否扣拥
     **/
    public $hj_settle_no_commission;

    /**
        云店接单标记
     **/
    public $order_taking;

    /**
        云店改价用token
     **/
    public $cloud_store_token;

    /**
        云店pos单号
     **/
    public $cloud_store_bind_pos;

    /**
        天猫未来店线下店铺 ID
     **/
    public $retail_store_id;

    /**
        天猫未来店外部 ERP 商品 ID
     **/
    public $out_item_id;

    /**
        新零售全渠道订单：商家自有货品编码
     **/
    public $rt_omni_outer_sc_id;

    /**
        新零售全渠道订单：后端货品ID
     **/
    public $rt_omni_sc_id;

    /**
        有值表示买家修改了地址；1表示付款后改地址；2表示付款前改地址
     **/
    public $modify_address;

    /**
        买家修改地址时间
     **/
    public $ti_modify_address_time;

    /**
        有值表示信用购订单；1表示信用购一期；2表示信用购二期；3表示信用购三期
     **/
    public $credit_buy;

    /**
        子订单商家代缴税费
     **/
    public $s_tariff_fee;

    /**
        时效服务身份，如tmallPromise代表天猫时效承诺
     **/
    public $timing_promise;

    /**
        时效服务字段，服务字段，会有多个服务值，以英文半角逗号","切割
     **/
    public $promise_service;

    /**
        预计送达时间
     **/
    public $es_date;

    /**
        预计配送时间段
     **/
    public $es_range;

    /**
        预约配送，用户预约时间
     **/
    public $os_date;

    /**
        预约配送，用户预约时间段
     **/
    public $os_range;

    /**
        物流截单时间，分钟
     **/
    public $cutoff_minutes;

    /**
        物流时效，相对时间，单位是天
     **/
    public $es_time;

    /**
        最晚发货时间
     **/
    public $delivery_time;

    /**
        最晚揽收时间
     **/
    public $collect_time;

    /**
        最晚派送时间
     **/
    public $dispatch_time;

    /**
        最晚签收时间
     **/
    public $sign_time;

    /**
        信用购履约结束时间
     **/
    public $promise_end_time;

    /**
        前N有礼活动id
     **/
    public $os_activity_id;

    /**
        前N有礼奖品的商品id
     **/
    public $os_fg_item_id;

    /**
        前N有礼获得奖品的数量
     **/
    public $os_gift_count;

    /**
        前N有礼中奖名次，获得奖品的订单才会有该字段
     **/
    public $os_sort_num;

    /**
        使用淘金币的数量，以分为单位，和订单标propoint中间那一段一样
     **/
    public $propoint;

    /**
        是否是考拉商品订单
     **/
    public $is_kaola;

    /**
        特殊的退款类型，比如直播返现、价保
     **/
    public $special_refund_type;

    /**
        透出的额外信息
     **/
    public $extend_info;

    /**
        子订单优惠贬值
     **/
    public $is_devalue_fee;

    /**
        同城购渠道店id
     **/
    public $brand_light_shop_store_id;

    /**
        同城购订单来源
     **/
    public $brand_light_shop_source;

    /**
        服务供应链-服务订单类型,1:主子挂载；2：双主挂载；3：单独售卖
     **/
    public $service_order_type;

    /**
        服务供应链-服务商外部编码
     **/
    public $service_outer_id;

    /**
        购物金核销子订单权益金分摊金额（单位为元）
     **/
    public $expand_card_expand_price_used_suborder;

    /**
        购物金核销子订单本金分摊金额（单位为元）
     **/
    public $expand_card_basic_price_used_suborder;

    /**
        预售订单立减金额
     **/
    public $lijian;

    /**
        优仓业务场景下 1（自动流转）/0（非自动流转）
     **/
    public $auto_flow;

    /**
        订单履约类型
     **/
    public $trade_fulfillment_type;

    /**
        订单是有代发订单，为空表示该订单暂无代发单据，distribute-该子订单有已分配代发单据，cancel-订单的代发单据都已取消，
     **/
    public $distribute_status;

    /**
        是否为闲鱼订单，1是，0否
     **/
    public $is_idle;

    /**
        赠品关联的id，主品订单下此字段表示赠品订单id，赠品订单表示主品订单id
     **/
    public $gift_mids;

    /**
        是否是赠品订单
     **/
    public $is_free_gift;

    /**
        是否含有赠品
     **/
    public $has_gift;

    /**
        承诺/最晚揽收时间
     **/
    public $promise_collect_time;

    /**
        表示该子订单会ascp会自动流转到菜鸟仓发货
     **/
    public $is_force_dc;

    /**
        订单是否属于b2b代销
     **/
    public $b2b_daixiao;

    /**
        发货信息，目前只记录了发货方式
     **/
    public $ship_info;

    /**
        组合品信息
     **/
    public $combine_item_info;

    /**
        仅对赠品子单生效，退货时赠品是否需要随主品一起退回，字段缺失/true-需要退回，false-无需退回
     **/
    public $need_return;

    /**
        套餐购套餐ID
     **/
    public $bundle_id;

    /**
        套餐购套餐名称
     **/
    public $bundle_out_name;

    /**
        套餐购套餐类型标识 1营销套餐-PromoBundle 2人群套餐-CrowdBundle
     **/
    public $bundle_type;

    /**
        主品关联的1元商品订单号
     **/
    public $one_yuan_reservation_orders;

    /**
        是否家装分销订单，入参fields中传入orders.is_jzfx时返回
     **/
    public $is_jzfx;

    /**
        鉴定编码
     **/
    public $jewcc_no;

    /**
        是否使用百补优惠的订单
     **/
    public $is_bybt_order;

    /**
        苹果商品标映射字段
     **/
    public $apple_cc;

    /**
        百补sn码校验订单标
     **/
    public $bybt_sn_code_tag;

    /**
        全渠道商品标
     **/
    public $omni_tags;


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

    public function getOuterIid() : string{
        return $this->outer_iid;
    }

    public function setOuterIid(string $outerIid){
        $this->outer_iid = $outerIid;
    }

    public function getOuterSkuId() : string{
        return $this->outer_sku_id;
    }

    public function setOuterSkuId(string $outerSkuId){
        $this->outer_sku_id = $outerSkuId;
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

    public function getItemMealId() : int{
        return $this->item_meal_id;
    }

    public function setItemMealId(int $itemMealId){
        $this->item_meal_id = $itemMealId;
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

    public function getSnapshotUrl() : string{
        return $this->snapshot_url;
    }

    public function setSnapshotUrl(string $snapshotUrl){
        $this->snapshot_url = $snapshotUrl;
    }

    public function getTimeoutActionTime() : string{
        return $this->timeout_action_time;
    }

    public function setTimeoutActionTime(string $timeoutActionTime){
        $this->timeout_action_time = $timeoutActionTime;
    }

    public function getItemMemo() : string{
        return $this->item_memo;
    }

    public function setItemMemo(string $itemMemo){
        $this->item_memo = $itemMemo;
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

    public function getRefundId() : string{
        return $this->refund_id;
    }

    public function setRefundId(string $refundId){
        $this->refund_id = $refundId;
    }

    public function getSellerType() : string{
        return $this->seller_type;
    }

    public function setSellerType(string $sellerType){
        $this->seller_type = $sellerType;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getIsOversold() : bool{
        return $this->is_oversold;
    }

    public function setIsOversold(bool $isOversold){
        $this->is_oversold = $isOversold;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getOrderFrom() : string{
        return $this->order_from;
    }

    public function setOrderFrom(string $orderFrom){
        $this->order_from = $orderFrom;
    }

    public function getIsServiceOrder() : bool{
        return $this->is_service_order;
    }

    public function setIsServiceOrder(bool $isServiceOrder){
        $this->is_service_order = $isServiceOrder;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getShippingType() : string{
        return $this->shipping_type;
    }

    public function setShippingType(string $shippingType){
        $this->shipping_type = $shippingType;
    }

    public function getLogisticsCompany() : string{
        return $this->logistics_company;
    }

    public function setLogisticsCompany(string $logisticsCompany){
        $this->logistics_company = $logisticsCompany;
    }

    public function getInvoiceNo() : string{
        return $this->invoice_no;
    }

    public function setInvoiceNo(string $invoiceNo){
        $this->invoice_no = $invoiceNo;
    }

    public function getBindOid() : int{
        return $this->bind_oid;
    }

    public function setBindOid(int $bindOid){
        $this->bind_oid = $bindOid;
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

    public function getEstimateConTime() : string{
        return $this->estimate_con_time;
    }

    public function setEstimateConTime(string $estimateConTime){
        $this->estimate_con_time = $estimateConTime;
    }

    public function getBindOids() : string{
        return $this->bind_oids;
    }

    public function setBindOids(string $bindOids){
        $this->bind_oids = $bindOids;
    }

    public function getZhengjiStatus() : string{
        return $this->zhengji_status;
    }

    public function setZhengjiStatus(string $zhengjiStatus){
        $this->zhengji_status = $zhengjiStatus;
    }

    public function getMdQualification() : string{
        return $this->md_qualification;
    }

    public function setMdQualification(string $mdQualification){
        $this->md_qualification = $mdQualification;
    }

    public function getMdFee() : string{
        return $this->md_fee;
    }

    public function setMdFee(string $mdFee){
        $this->md_fee = $mdFee;
    }

    public function getCustomization() : string{
        return $this->customization;
    }

    public function setCustomization(string $customization){
        $this->customization = $customization;
    }

    public function getInvType() : string{
        return $this->inv_type;
    }

    public function setInvType(string $invType){
        $this->inv_type = $invType;
    }

    public function getIsShShip() : bool{
        return $this->is_sh_ship;
    }

    public function setIsShShip(bool $isShShip){
        $this->is_sh_ship = $isShShip;
    }

    public function getShipper() : string{
        return $this->shipper;
    }

    public function setShipper(string $shipper){
        $this->shipper = $shipper;
    }

    public function getFType() : string{
        return $this->f_type;
    }

    public function setFType(string $fType){
        $this->f_type = $fType;
    }

    public function getFStatus() : string{
        return $this->f_status;
    }

    public function setFStatus(string $fStatus){
        $this->f_status = $fStatus;
    }

    public function getFTerm() : string{
        return $this->f_term;
    }

    public function setFTerm(string $fTerm){
        $this->f_term = $fTerm;
    }

    public function getComboId() : string{
        return $this->combo_id;
    }

    public function setComboId(string $comboId){
        $this->combo_id = $comboId;
    }

    public function getOrderAttr() : array{
        return $this->order_attr;
    }

    public function setOrderAttr(array $orderAttr){
        $this->order_attr = $orderAttr;
    }

    public function getAssemblyRela() : string{
        return $this->assembly_rela;
    }

    public function setAssemblyRela(string $assemblyRela){
        $this->assembly_rela = $assemblyRela;
    }

    public function getAssemblyPrice() : string{
        return $this->assembly_price;
    }

    public function setAssemblyPrice(string $assemblyPrice){
        $this->assembly_price = $assemblyPrice;
    }

    public function getAssemblyItem() : string{
        return $this->assembly_item;
    }

    public function setAssemblyItem(string $assemblyItem){
        $this->assembly_item = $assemblyItem;
    }

    public function getSubOrderTaxPromotionFee() : string{
        return $this->sub_order_tax_promotion_fee;
    }

    public function setSubOrderTaxPromotionFee(string $subOrderTaxPromotionFee){
        $this->sub_order_tax_promotion_fee = $subOrderTaxPromotionFee;
    }

    public function getDownPayment() : string{
        return $this->down_payment;
    }

    public function setDownPayment(string $downPayment){
        $this->down_payment = $downPayment;
    }

    public function getDownPaymentRatio() : string{
        return $this->down_payment_ratio;
    }

    public function setDownPaymentRatio(string $downPaymentRatio){
        $this->down_payment_ratio = $downPaymentRatio;
    }

    public function getMonthPayment() : string{
        return $this->month_payment;
    }

    public function setMonthPayment(string $monthPayment){
        $this->month_payment = $monthPayment;
    }

    public function getTailPayment() : string{
        return $this->tail_payment;
    }

    public function setTailPayment(string $tailPayment){
        $this->tail_payment = $tailPayment;
    }

    public function getInstallmentNum() : string{
        return $this->installment_num;
    }

    public function setInstallmentNum(string $installmentNum){
        $this->installment_num = $installmentNum;
    }

    public function getPenalty() : string{
        return $this->penalty;
    }

    public function setPenalty(string $penalty){
        $this->penalty = $penalty;
    }

    public function getServiceFee() : string{
        return $this->service_fee;
    }

    public function setServiceFee(string $serviceFee){
        $this->service_fee = $serviceFee;
    }

    public function getCarTaker() : string{
        return $this->car_taker;
    }

    public function setCarTaker(string $carTaker){
        $this->car_taker = $carTaker;
    }

    public function getCarTakerPhone() : string{
        return $this->car_taker_phone;
    }

    public function setCarTakerPhone(string $carTakerPhone){
        $this->car_taker_phone = $carTakerPhone;
    }

    public function getCarTakerId() : string{
        return $this->car_taker_id;
    }

    public function setCarTakerId(string $carTakerId){
        $this->car_taker_id = $carTakerId;
    }

    public function getCarStoreCode() : string{
        return $this->car_store_code;
    }

    public function setCarStoreCode(string $carStoreCode){
        $this->car_store_code = $carStoreCode;
    }

    public function getCarStoreName() : string{
        return $this->car_store_name;
    }

    public function setCarStoreName(string $carStoreName){
        $this->car_store_name = $carStoreName;
    }

    public function getOutUniqueId() : string{
        return $this->out_unique_id;
    }

    public function setOutUniqueId(string $outUniqueId){
        $this->out_unique_id = $outUniqueId;
    }

    public function getWsBankApplyNo() : string{
        return $this->ws_bank_apply_no;
    }

    public function setWsBankApplyNo(string $wsBankApplyNo){
        $this->ws_bank_apply_no = $wsBankApplyNo;
    }

    public function getOidStr() : string{
        return $this->oid_str;
    }

    public function setOidStr(string $oidStr){
        $this->oid_str = $oidStr;
    }

    public function getFqgNum() : int{
        return $this->fqg_num;
    }

    public function setFqgNum(int $fqgNum){
        $this->fqg_num = $fqgNum;
    }

    public function getIsFqgSFee() : bool{
        return $this->is_fqg_s_fee;
    }

    public function setIsFqgSFee(bool $isFqgSFee){
        $this->is_fqg_s_fee = $isFqgSFee;
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

    public function getNrReduceInvFail() : string{
        return $this->nr_reduce_inv_fail;
    }

    public function setNrReduceInvFail(string $nrReduceInvFail){
        $this->nr_reduce_inv_fail = $nrReduceInvFail;
    }

    public function getNrOuterIid() : string{
        return $this->nr_outer_iid;
    }

    public function setNrOuterIid(string $nrOuterIid){
        $this->nr_outer_iid = $nrOuterIid;
    }

    public function getBindOidsAllStatus() : string{
        return $this->bind_oids_all_status;
    }

    public function setBindOidsAllStatus(string $bindOidsAllStatus){
        $this->bind_oids_all_status = $bindOidsAllStatus;
    }

    public function getSortInfo() : TaobaoTradeFullinfoGetSortInfo{
        return $this->sort_info;
    }

    public function setSortInfo(TaobaoTradeFullinfoGetSortInfo $sortInfo){
        $this->sort_info = $sortInfo;
    }

    public function getO2oGuideId() : string{
        return $this->o2o_guide_id;
    }

    public function setO2oGuideId(string $o2oGuideId){
        $this->o2o_guide_id = $o2oGuideId;
    }

    public function getO2oGuideName() : string{
        return $this->o2o_guide_name;
    }

    public function setO2oGuideName(string $o2oGuideName){
        $this->o2o_guide_name = $o2oGuideName;
    }

    public function getO2oShopId() : string{
        return $this->o2o_shop_id;
    }

    public function setO2oShopId(string $o2oShopId){
        $this->o2o_shop_id = $o2oShopId;
    }

    public function getO2oShopName() : string{
        return $this->o2o_shop_name;
    }

    public function setO2oShopName(string $o2oShopName){
        $this->o2o_shop_name = $o2oShopName;
    }

    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }

    public function getCloudStore() : string{
        return $this->cloud_store;
    }

    public function setCloudStore(string $cloudStore){
        $this->cloud_store = $cloudStore;
    }

    public function getHjSettleNoCommission() : string{
        return $this->hj_settle_no_commission;
    }

    public function setHjSettleNoCommission(string $hjSettleNoCommission){
        $this->hj_settle_no_commission = $hjSettleNoCommission;
    }

    public function getOrderTaking() : string{
        return $this->order_taking;
    }

    public function setOrderTaking(string $orderTaking){
        $this->order_taking = $orderTaking;
    }

    public function getCloudStoreToken() : string{
        return $this->cloud_store_token;
    }

    public function setCloudStoreToken(string $cloudStoreToken){
        $this->cloud_store_token = $cloudStoreToken;
    }

    public function getCloudStoreBindPos() : string{
        return $this->cloud_store_bind_pos;
    }

    public function setCloudStoreBindPos(string $cloudStoreBindPos){
        $this->cloud_store_bind_pos = $cloudStoreBindPos;
    }

    public function getRetailStoreId() : string{
        return $this->retail_store_id;
    }

    public function setRetailStoreId(string $retailStoreId){
        $this->retail_store_id = $retailStoreId;
    }

    public function getOutItemId() : string{
        return $this->out_item_id;
    }

    public function setOutItemId(string $outItemId){
        $this->out_item_id = $outItemId;
    }

    public function getRtOmniOuterScId() : string{
        return $this->rt_omni_outer_sc_id;
    }

    public function setRtOmniOuterScId(string $rtOmniOuterScId){
        $this->rt_omni_outer_sc_id = $rtOmniOuterScId;
    }

    public function getRtOmniScId() : string{
        return $this->rt_omni_sc_id;
    }

    public function setRtOmniScId(string $rtOmniScId){
        $this->rt_omni_sc_id = $rtOmniScId;
    }

    public function getModifyAddress() : string{
        return $this->modify_address;
    }

    public function setModifyAddress(string $modifyAddress){
        $this->modify_address = $modifyAddress;
    }

    public function getTiModifyAddressTime() : string{
        return $this->ti_modify_address_time;
    }

    public function setTiModifyAddressTime(string $tiModifyAddressTime){
        $this->ti_modify_address_time = $tiModifyAddressTime;
    }

    public function getCreditBuy() : string{
        return $this->credit_buy;
    }

    public function setCreditBuy(string $creditBuy){
        $this->credit_buy = $creditBuy;
    }

    public function getSTariffFee() : string{
        return $this->s_tariff_fee;
    }

    public function setSTariffFee(string $sTariffFee){
        $this->s_tariff_fee = $sTariffFee;
    }

    public function getTimingPromise() : string{
        return $this->timing_promise;
    }

    public function setTimingPromise(string $timingPromise){
        $this->timing_promise = $timingPromise;
    }

    public function getPromiseService() : string{
        return $this->promise_service;
    }

    public function setPromiseService(string $promiseService){
        $this->promise_service = $promiseService;
    }

    public function getEsDate() : string{
        return $this->es_date;
    }

    public function setEsDate(string $esDate){
        $this->es_date = $esDate;
    }

    public function getEsRange() : string{
        return $this->es_range;
    }

    public function setEsRange(string $esRange){
        $this->es_range = $esRange;
    }

    public function getOsDate() : string{
        return $this->os_date;
    }

    public function setOsDate(string $osDate){
        $this->os_date = $osDate;
    }

    public function getOsRange() : string{
        return $this->os_range;
    }

    public function setOsRange(string $osRange){
        $this->os_range = $osRange;
    }

    public function getCutoffMinutes() : string{
        return $this->cutoff_minutes;
    }

    public function setCutoffMinutes(string $cutoffMinutes){
        $this->cutoff_minutes = $cutoffMinutes;
    }

    public function getEsTime() : string{
        return $this->es_time;
    }

    public function setEsTime(string $esTime){
        $this->es_time = $esTime;
    }

    public function getDeliveryTime() : string{
        return $this->delivery_time;
    }

    public function setDeliveryTime(string $deliveryTime){
        $this->delivery_time = $deliveryTime;
    }

    public function getCollectTime() : string{
        return $this->collect_time;
    }

    public function setCollectTime(string $collectTime){
        $this->collect_time = $collectTime;
    }

    public function getDispatchTime() : string{
        return $this->dispatch_time;
    }

    public function setDispatchTime(string $dispatchTime){
        $this->dispatch_time = $dispatchTime;
    }

    public function getSignTime() : string{
        return $this->sign_time;
    }

    public function setSignTime(string $signTime){
        $this->sign_time = $signTime;
    }

    public function getPromiseEndTime() : string{
        return $this->promise_end_time;
    }

    public function setPromiseEndTime(string $promiseEndTime){
        $this->promise_end_time = $promiseEndTime;
    }

    public function getOsActivityId() : string{
        return $this->os_activity_id;
    }

    public function setOsActivityId(string $osActivityId){
        $this->os_activity_id = $osActivityId;
    }

    public function getOsFgItemId() : string{
        return $this->os_fg_item_id;
    }

    public function setOsFgItemId(string $osFgItemId){
        $this->os_fg_item_id = $osFgItemId;
    }

    public function getOsGiftCount() : string{
        return $this->os_gift_count;
    }

    public function setOsGiftCount(string $osGiftCount){
        $this->os_gift_count = $osGiftCount;
    }

    public function getOsSortNum() : string{
        return $this->os_sort_num;
    }

    public function setOsSortNum(string $osSortNum){
        $this->os_sort_num = $osSortNum;
    }

    public function getPropoint() : string{
        return $this->propoint;
    }

    public function setPropoint(string $propoint){
        $this->propoint = $propoint;
    }

    public function getIsKaola() : bool{
        return $this->is_kaola;
    }

    public function setIsKaola(bool $isKaola){
        $this->is_kaola = $isKaola;
    }

    public function getSpecialRefundType() : string{
        return $this->special_refund_type;
    }

    public function setSpecialRefundType(string $specialRefundType){
        $this->special_refund_type = $specialRefundType;
    }

    public function getExtendInfo() : string{
        return $this->extend_info;
    }

    public function setExtendInfo(string $extendInfo){
        $this->extend_info = $extendInfo;
    }

    public function getIsDevalueFee() : bool{
        return $this->is_devalue_fee;
    }

    public function setIsDevalueFee(bool $isDevalueFee){
        $this->is_devalue_fee = $isDevalueFee;
    }

    public function getBrandLightShopStoreId() : string{
        return $this->brand_light_shop_store_id;
    }

    public function setBrandLightShopStoreId(string $brandLightShopStoreId){
        $this->brand_light_shop_store_id = $brandLightShopStoreId;
    }

    public function getBrandLightShopSource() : string{
        return $this->brand_light_shop_source;
    }

    public function setBrandLightShopSource(string $brandLightShopSource){
        $this->brand_light_shop_source = $brandLightShopSource;
    }

    public function getServiceOrderType() : string{
        return $this->service_order_type;
    }

    public function setServiceOrderType(string $serviceOrderType){
        $this->service_order_type = $serviceOrderType;
    }

    public function getServiceOuterId() : string{
        return $this->service_outer_id;
    }

    public function setServiceOuterId(string $serviceOuterId){
        $this->service_outer_id = $serviceOuterId;
    }

    public function getExpandCardExpandPriceUsedSuborder() : string{
        return $this->expand_card_expand_price_used_suborder;
    }

    public function setExpandCardExpandPriceUsedSuborder(string $expandCardExpandPriceUsedSuborder){
        $this->expand_card_expand_price_used_suborder = $expandCardExpandPriceUsedSuborder;
    }

    public function getExpandCardBasicPriceUsedSuborder() : string{
        return $this->expand_card_basic_price_used_suborder;
    }

    public function setExpandCardBasicPriceUsedSuborder(string $expandCardBasicPriceUsedSuborder){
        $this->expand_card_basic_price_used_suborder = $expandCardBasicPriceUsedSuborder;
    }

    public function getLijian() : string{
        return $this->lijian;
    }

    public function setLijian(string $lijian){
        $this->lijian = $lijian;
    }

    public function getAutoFlow() : string{
        return $this->auto_flow;
    }

    public function setAutoFlow(string $autoFlow){
        $this->auto_flow = $autoFlow;
    }

    public function getTradeFulfillmentType() : int{
        return $this->trade_fulfillment_type;
    }

    public function setTradeFulfillmentType(int $tradeFulfillmentType){
        $this->trade_fulfillment_type = $tradeFulfillmentType;
    }

    public function getDistributeStatus() : string{
        return $this->distribute_status;
    }

    public function setDistributeStatus(string $distributeStatus){
        $this->distribute_status = $distributeStatus;
    }

    public function getIsIdle() : string{
        return $this->is_idle;
    }

    public function setIsIdle(string $isIdle){
        $this->is_idle = $isIdle;
    }

    public function getGiftMids() : string{
        return $this->gift_mids;
    }

    public function setGiftMids(string $giftMids){
        $this->gift_mids = $giftMids;
    }

    public function getIsFreeGift() : bool{
        return $this->is_free_gift;
    }

    public function setIsFreeGift(bool $isFreeGift){
        $this->is_free_gift = $isFreeGift;
    }

    public function getHasGift() : bool{
        return $this->has_gift;
    }

    public function setHasGift(bool $hasGift){
        $this->has_gift = $hasGift;
    }

    public function getPromiseCollectTime() : string{
        return $this->promise_collect_time;
    }

    public function setPromiseCollectTime(string $promiseCollectTime){
        $this->promise_collect_time = $promiseCollectTime;
    }

    public function getIsForceDc() : bool{
        return $this->is_force_dc;
    }

    public function setIsForceDc(bool $isForceDc){
        $this->is_force_dc = $isForceDc;
    }

    public function getB2bDaixiao() : string{
        return $this->b2b_daixiao;
    }

    public function setB2bDaixiao(string $b2bDaixiao){
        $this->b2b_daixiao = $b2bDaixiao;
    }

    public function getShipInfo() : array{
        return $this->ship_info;
    }

    public function setShipInfo(array $shipInfo){
        $this->ship_info = $shipInfo;
    }

    public function getCombineItemInfo() : array{
        return $this->combine_item_info;
    }

    public function setCombineItemInfo(array $combineItemInfo){
        $this->combine_item_info = $combineItemInfo;
    }

    public function getNeedReturn() : bool{
        return $this->need_return;
    }

    public function setNeedReturn(bool $needReturn){
        $this->need_return = $needReturn;
    }

    public function getBundleId() : string{
        return $this->bundle_id;
    }

    public function setBundleId(string $bundleId){
        $this->bundle_id = $bundleId;
    }

    public function getBundleOutName() : string{
        return $this->bundle_out_name;
    }

    public function setBundleOutName(string $bundleOutName){
        $this->bundle_out_name = $bundleOutName;
    }

    public function getBundleType() : int{
        return $this->bundle_type;
    }

    public function setBundleType(int $bundleType){
        $this->bundle_type = $bundleType;
    }

    public function getOneYuanReservationOrders() : string{
        return $this->one_yuan_reservation_orders;
    }

    public function setOneYuanReservationOrders(string $oneYuanReservationOrders){
        $this->one_yuan_reservation_orders = $oneYuanReservationOrders;
    }

    public function getIsJzfx() : bool{
        return $this->is_jzfx;
    }

    public function setIsJzfx(bool $isJzfx){
        $this->is_jzfx = $isJzfx;
    }

    public function getJewccNo() : string{
        return $this->jewcc_no;
    }

    public function setJewccNo(string $jewccNo){
        $this->jewcc_no = $jewccNo;
    }

    public function getIsBybtOrder() : bool{
        return $this->is_bybt_order;
    }

    public function setIsBybtOrder(bool $isBybtOrder){
        $this->is_bybt_order = $isBybtOrder;
    }

    public function getAppleCc() : string{
        return $this->apple_cc;
    }

    public function setAppleCc(string $appleCc){
        $this->apple_cc = $appleCc;
    }

    public function getBybtSnCodeTag() : string{
        return $this->bybt_sn_code_tag;
    }

    public function setBybtSnCodeTag(string $bybtSnCodeTag){
        $this->bybt_sn_code_tag = $bybtSnCodeTag;
    }

    public function getOmniTags() : array{
        return $this->omni_tags;
    }

    public function setOmniTags(array $omniTags){
        $this->omni_tags = $omniTags;
    }


}

