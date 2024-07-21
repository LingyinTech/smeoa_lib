<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeGetTrade {

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        交易标题，以店铺名作为此标题的值。注:taobao.trades.get接口返回的Trade中的title是商品名称
     **/
    public $title;

    /**
        交易类型列表，同时查询多种交易类型可用逗号分隔。默认同时查询guarantee_trade, auto_delivery, ec, cod的4种交易类型的数据 可选值 fixed(一口价) auction(拍卖) guarantee_trade(一口价、拍卖) auto_delivery(自动发货) independent_simple_trade(旺店入门版交易) independent_shop_trade(旺店标准版交易) ec(直冲) cod(货到付款) fenxiao(分销) game_equipment(游戏装备) shopex_trade(ShopEX交易) netcn_trade(万网交易) external_trade(统一外部交易)o2o_offlinetrade（O2O交易）step (万人团)nopaid(无付款订单)pre_auth_type(预授权0元购机交易)
     **/
    public $type;

    /**
        交易创建时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $created;

    /**
        物流运单号
     **/
    public $sid;

    /**
        交易编号 (父订单的交易编号)
     **/
    public $tid;

    /**
        卖家是否已评价。可选值:true(已评价),false(未评价)
     **/
    public $seller_rate;

    /**
        买家是否已评价。可选值:true(已评价),false(未评价)。如买家只评价未打分，此字段仍返回false
     **/
    public $buyer_rate;

    /**
        交易状态。可选值:    * TRADE_NO_CREATE_PAY(没有创建支付宝交易)    * WAIT_BUYER_PAY(等待买家付款)    * SELLER_CONSIGNED_PART(卖家部分发货)    * WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款)    * WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货)    * TRADE_BUYER_SIGNED(买家已签收,货到付款专用)    * TRADE_FINISHED(交易成功)    * TRADE_CLOSED(付款以后用户退款成功，交易自动关闭)    * TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)    * PAY_PENDING(国际信用卡支付付款确认中)    * WAIT_PRE_AUTH_CONFIRM(0元购合约中)	* PAID_FORBID_CONSIGN(拼团中订单或者发货强管控的订单，已付款但禁止发货)
     **/
    public $status;

    /**
        实付金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $payment;

    /**
        建议使用trade.promotion_details查询系统优惠系统优惠金额（如打折，VIP，满就送等），精确到2位小数，单位：元。如：200.07，表示：200元7分
     **/
    public $discount_fee;

    /**
        卖家手工调整金额，精确到2位小数，单位：元。如：200.07，表示：200元7分。来源于订单价格修改，如果有多笔子订单的时候，这个为0，单笔的话则跟[order].adjust_fee一样
     **/
    public $adjust_fee;

    /**
        邮费。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $post_fee;

    /**
        商品金额（商品价格乘以数量的总金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $total_fee;

    /**
        付款时间。格式:yyyy-MM-dd HH:mm:ss。订单的付款时间即为物流订单的创建时间。
     **/
    public $pay_time;

    /**
        交易结束时间。交易成功时间(更新交易状态为成功的同时更新)/确认收货时间或者交易关闭时间 。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $end_time;

    /**
        交易修改时间(用户对订单的任何修改都会更新此字段)。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        卖家发货时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $consign_time;

    /**
        卖家实际收到的支付宝打款金额（由于子订单可以部分确认收货，这个金额会随着子订单的确认收货而不断增加，交易成功后等于买家实付款减去退款金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $received_payment;

    /**
        交易佣金。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $commission_fee;

    /**
        买家备注（与淘宝网上订单的买家备注对应，只有买家才能查看该字段）
     **/
    public $buyer_memo;

    /**
        卖家备注（与淘宝网上订单的卖家备注对应，只有卖家才能查看该字段）
     **/
    public $seller_memo;

    /**
        支付宝交易号，如：2009112081173831
     **/
    public $alipay_no;

    /**
        买家留言
     **/
    public $buyer_message;

    /**
        商品图片绝对途径
     **/
    public $pic_path;

    /**
        商品数字编号
     **/
    public $num_iid;

    /**
        商品价格。精确到2位小数；单位：元。如：200.07，表示：200元7分
     **/
    public $price;

    /**
        货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分。
     **/
    public $cod_fee;

    /**
        货到付款物流状态。初始状态 NEW_CREATED,接单成功 ACCEPTED_BY_COMPANY,接单失败 REJECTED_BY_COMPANY,接单超时 RECIEVE_TIMEOUT,揽收成功 TAKEN_IN_SUCCESS,揽收失败 TAKEN_IN_FAILED,揽收超时 TAKEN_TIMEOUT,签收成功 SIGN_IN,签收失败 REJECTED_BY_OTHER_SIDE,订单等待发送给物流公司 WAITING_TO_BE_SENT,用户取消物流订单 CANCELED
     **/
    public $cod_status;

    /**
        创建交易时的物流方式（交易完成前，物流方式有可能改变，但系统里的这个字段一直不变）。可选值：free(卖家包邮),post(平邮),express(快递),ems(EMS),virtual(虚拟发货)，25(次日必达)，26(预约配送)。
     **/
    public $shipping_type;

    /**
        商品购买数量。取值范围：大于零的整数,对于一个trade对应多个order的时候（一笔主订单，对应多笔子订单），num=0，num是一个跟商品关联的属性，一笔订单对应多比子订单的时候，主订单上的num无意义。
     **/
    public $num;

    /**
        买家使用积分,下单时生成，且一直不变。格式:100;单位:个.
     **/
    public $point_fee;

    /**
        买家实际使用积分（扣除部分退款使用的积分），交易完成后生成（交易成功或关闭），交易未完成时该字段值为0。格式:100;单位:个
     **/
    public $real_point_fee;

    /**
        买家获得积分,返点的积分。格式:100;单位:个。返点的积分要交易成功之后才能获得。
     **/
    public $buyer_obtain_point_fee;

    /**
        表示订单交易是否含有对应的代销采购单。如果该订单中存在一个对应的代销采购单，那么该值为true；反之，该值为false。
     **/
    public $is_daixiao;

    /**
        表示订单交易是否网厅订单。 如果该订单是网厅订单，那么该值为true；反之，该值为false。
     **/
    public $is_wt;

    /**
        物流到货时效，单位天
     **/
    public $arrive_interval;

    /**
        物流到货时效截单时间，格式 HH:mm
     **/
    public $arrive_cut_time;

    /**
        物流发货时效，单位小时
     **/
    public $consign_interval;

    /**
        物流标签
     **/
    public $service_tags;

    /**
        导购宝=crm
     **/
    public $o2o;

    /**
        导购员id
     **/
    public $o2o_guide_id;

    /**
        导购员名称
     **/
    public $o2o_guide_name;

    /**
        导购员门店id
     **/
    public $o2o_shop_id;

    /**
        导购门店名称
     **/
    public $o2o_shop_name;

    /**
        导购宝提货方式，inshop：店内提货，online：线上发货
     **/
    public $o2o_delivery;

    /**
        外部订单号
     **/
    public $o2o_out_trade_id;

    /**
        订单列表
     **/
    public $orders;

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
        天猫国际官网直供主订单关税税费
     **/
    public $order_tax_fee;

    /**
        电子凭证服务上门服务的安装地址
     **/
    public $eticket_service_addr;

    /**
        分阶段交易的特权定金订单ID
     **/
    public $o2o_et_order_id;

    /**
        天猫国际计税优惠金额
     **/
    public $order_tax_promotion_fee;

    /**
        透出前置营销工具
     **/
    public $pmtp;

    /**
        买家OpenUid
     **/
    public $buyer_open_uid;


    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getSid() : string{
        return $this->sid;
    }

    public function setSid(string $sid){
        $this->sid = $sid;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getSellerRate() : bool{
        return $this->seller_rate;
    }

    public function setSellerRate(bool $sellerRate){
        $this->seller_rate = $sellerRate;
    }

    public function getBuyerRate() : bool{
        return $this->buyer_rate;
    }

    public function setBuyerRate(bool $buyerRate){
        $this->buyer_rate = $buyerRate;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
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

    public function getPostFee() : string{
        return $this->post_fee;
    }

    public function setPostFee(string $postFee){
        $this->post_fee = $postFee;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getReceivedPayment() : string{
        return $this->received_payment;
    }

    public function setReceivedPayment(string $receivedPayment){
        $this->received_payment = $receivedPayment;
    }

    public function getCommissionFee() : string{
        return $this->commission_fee;
    }

    public function setCommissionFee(string $commissionFee){
        $this->commission_fee = $commissionFee;
    }

    public function getBuyerMemo() : string{
        return $this->buyer_memo;
    }

    public function setBuyerMemo(string $buyerMemo){
        $this->buyer_memo = $buyerMemo;
    }

    public function getSellerMemo() : string{
        return $this->seller_memo;
    }

    public function setSellerMemo(string $sellerMemo){
        $this->seller_memo = $sellerMemo;
    }

    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getBuyerMessage() : string{
        return $this->buyer_message;
    }

    public function setBuyerMessage(string $buyerMessage){
        $this->buyer_message = $buyerMessage;
    }

    public function getPicPath() : string{
        return $this->pic_path;
    }

    public function setPicPath(string $picPath){
        $this->pic_path = $picPath;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getCodFee() : string{
        return $this->cod_fee;
    }

    public function setCodFee(string $codFee){
        $this->cod_fee = $codFee;
    }

    public function getCodStatus() : string{
        return $this->cod_status;
    }

    public function setCodStatus(string $codStatus){
        $this->cod_status = $codStatus;
    }

    public function getShippingType() : string{
        return $this->shipping_type;
    }

    public function setShippingType(string $shippingType){
        $this->shipping_type = $shippingType;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getPointFee() : int{
        return $this->point_fee;
    }

    public function setPointFee(int $pointFee){
        $this->point_fee = $pointFee;
    }

    public function getRealPointFee() : int{
        return $this->real_point_fee;
    }

    public function setRealPointFee(int $realPointFee){
        $this->real_point_fee = $realPointFee;
    }

    public function getBuyerObtainPointFee() : int{
        return $this->buyer_obtain_point_fee;
    }

    public function setBuyerObtainPointFee(int $buyerObtainPointFee){
        $this->buyer_obtain_point_fee = $buyerObtainPointFee;
    }

    public function getIsDaixiao() : bool{
        return $this->is_daixiao;
    }

    public function setIsDaixiao(bool $isDaixiao){
        $this->is_daixiao = $isDaixiao;
    }

    public function getIsWt() : bool{
        return $this->is_wt;
    }

    public function setIsWt(bool $isWt){
        $this->is_wt = $isWt;
    }

    public function getArriveInterval() : int{
        return $this->arrive_interval;
    }

    public function setArriveInterval(int $arriveInterval){
        $this->arrive_interval = $arriveInterval;
    }

    public function getArriveCutTime() : string{
        return $this->arrive_cut_time;
    }

    public function setArriveCutTime(string $arriveCutTime){
        $this->arrive_cut_time = $arriveCutTime;
    }

    public function getConsignInterval() : int{
        return $this->consign_interval;
    }

    public function setConsignInterval(int $consignInterval){
        $this->consign_interval = $consignInterval;
    }

    public function getServiceTags() : array{
        return $this->service_tags;
    }

    public function setServiceTags(array $serviceTags){
        $this->service_tags = $serviceTags;
    }

    public function getO2o() : string{
        return $this->o2o;
    }

    public function setO2o(string $o2o){
        $this->o2o = $o2o;
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

    public function getO2oDelivery() : string{
        return $this->o2o_delivery;
    }

    public function setO2oDelivery(string $o2oDelivery){
        $this->o2o_delivery = $o2oDelivery;
    }

    public function getO2oOutTradeId() : string{
        return $this->o2o_out_trade_id;
    }

    public function setO2oOutTradeId(string $o2oOutTradeId){
        $this->o2o_out_trade_id = $o2oOutTradeId;
    }

    public function getOrders() : array{
        return $this->orders;
    }

    public function setOrders(array $orders){
        $this->orders = $orders;
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

    public function getOrderTaxFee() : string{
        return $this->order_tax_fee;
    }

    public function setOrderTaxFee(string $orderTaxFee){
        $this->order_tax_fee = $orderTaxFee;
    }

    public function getEticketServiceAddr() : string{
        return $this->eticket_service_addr;
    }

    public function setEticketServiceAddr(string $eticketServiceAddr){
        $this->eticket_service_addr = $eticketServiceAddr;
    }

    public function getO2oEtOrderId() : string{
        return $this->o2o_et_order_id;
    }

    public function setO2oEtOrderId(string $o2oEtOrderId){
        $this->o2o_et_order_id = $o2oEtOrderId;
    }

    public function getOrderTaxPromotionFee() : string{
        return $this->order_tax_promotion_fee;
    }

    public function setOrderTaxPromotionFee(string $orderTaxPromotionFee){
        $this->order_tax_promotion_fee = $orderTaxPromotionFee;
    }

    public function getPmtp() : string{
        return $this->pmtp;
    }

    public function setPmtp(string $pmtp){
        $this->pmtp = $pmtp;
    }

    public function getBuyerOpenUid() : string{
        return $this->buyer_open_uid;
    }

    public function setBuyerOpenUid(string $buyerOpenUid){
        $this->buyer_open_uid = $buyerOpenUid;
    }


}

