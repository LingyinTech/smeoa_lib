<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTradesSoldIncrementvGetTrade {

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        买家OpenUid
     **/
    public $buyer_open_uid;

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
        Acookie订单唯一ID。
     **/
    public $acookie_id;

    /**
        卖家是否已评价。可选值:true(已评价),false(未评价)
     **/
    public $seller_rate;

    /**
        买家是否已评价。可选值:true(已评价),false(未评价)。如买家只评价未打分，此字段仍返回false
     **/
    public $buyer_rate;

    /**
        交易状态。可选值:    * TRADE_NO_CREATE_PAY(没有创建支付宝交易)    * WAIT_BUYER_PAY(等待买家付款)    * SELLER_CONSIGNED_PART(卖家部分发货)    * WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款)    * WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货)    * TRADE_BUYER_SIGNED(买家已签收,货到付款专用)    * TRADE_FINISHED(交易成功)    * TRADE_CLOSED(付款以后用户退款成功，交易自动关闭)    * TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)    * PAY_PENDING(国际信用卡支付付款确认中)    * WAIT_PRE_AUTH_CONFIRM(0元购合约中)
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
        同步到卖家库的时间，taobao.trades.sold.incrementv.get接口返回此字段
     **/
    public $async_modified;

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
        支付宝交易号，如：2009112081173831
     **/
    public $alipay_no;

    /**
        买家的支付宝id号，在UIC中有记录，买家支付宝的唯一标示，不因为买家更换Email账号而改变。
     **/
    public $alipay_id;

    /**
        买家下单的地区
     **/
    public $buyer_area;

    /**
        卡易售垂直表信息，去除下单ip之后的结果
     **/
    public $nut_feature;

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
        收货人的姓名(加密)
     **/
    public $receiver_name;

    /**
        收货人的所在省份
     **/
    public $receiver_state;

    /**
        收货人的所在城市<br>注：因为国家对于城市和地区的划分的有：省直辖市和省直辖县级行政区（区级别的）划分的，淘宝这边根据这个差异保存在不同字段里面比如：广东广州：广州属于一个直辖市是放在的receiver_city的字段里面；而河南济源：济源属于省直辖县级行政区划分，是区级别的，放在了receiver_district里面<br>建议：程序依赖于城市字段做物流等判断的操作，最好加一个判断逻辑：如果返回值里面只有receiver_district参数，该参数作为城市
     **/
    public $receiver_city;

    /**
        收货人的所在地区<br>注：因为国家对于城市和地区的划分的有：省直辖市和省直辖县级行政区（区级别的）划分的，淘宝这边根据这个差异保存在不同字段里面比如：广东广州：广州属于一个直辖市是放在的receiver_city的字段里面；而河南济源：济源属于省直辖县级行政区划分，是区级别的，放在了receiver_district里面<br>建议：程序依赖于城市字段做物流等判断的操作，最好加一个判断逻辑：如果返回值里面只有receiver_district参数，该参数作为城市
     **/
    public $receiver_district;

    /**
        收货人街道地址
     **/
    public $receiver_town;

    /**
        收货人的详细地址(加密)
     **/
    public $receiver_address;

    /**
        收货人的邮编
     **/
    public $receiver_zip;

    /**
        收货人的手机号码(加密)
     **/
    public $receiver_mobile;

    /**
        收货人的电话号码(加密)
     **/
    public $receiver_phone;

    /**
        卖家备注旗帜（与淘宝网上订单的卖家备注旗帜对应，只有卖家才能查看该字段）红、黄、绿、蓝、紫 分别对应 1、2、3、4、5
     **/
    public $seller_flag;

    /**
        是否保障速递，如果为true，则为保障速递订单，使用线下联系发货接口发货，如果未false，则该订单非保障速递，根据卖家设置的订单流转规则可使用物流宝或者常规物流发货。
     **/
    public $is_lgtype;

    /**
        次日达，三日达等送达类型
     **/
    public $lg_aging_type;

    /**
        次日达订单送达时间
     **/
    public $lg_aging;

    /**
        表示是否是品牌特卖（常规特卖，不包括特卖惠和特实惠）订单，如果是返回true，如果不是返回false。当此字段与is_force_wlb均为true时，订单强制物流宝发货。
     **/
    public $is_brand_sale;

    /**
        订单是否强制使用物流宝发货。当此字段与is_brand_sale均为true时，订单强制物流宝发货。此字段为false时，该订单根据流转规则设置可以使用物流宝或者常规方式发货
     **/
    public $is_force_wlb;

    /**
        判断订单是否有买家留言，有买家留言返回true，否则返回false
     **/
    public $has_buyer_message;

    /**
        使用信用卡支付金额数
     **/
    public $credit_card_fee;

    /**
        分阶段付款的订单状态（例如万人团订单等），目前有三返回状态FRONT_NOPAID_FINAL_NOPAID(定金未付尾款未付)，FRONT_PAID_FINAL_NOPAID(定金已付尾款未付)，FRONT_PAID_FINAL_PAID(定金和尾款都付)
     **/
    public $step_trade_status;

    /**
        分阶段付款的已付金额（万人团订单已付金额）
     **/
    public $step_paid_fee;

    /**
        订单出现异常问题的时候，给予用户的描述,没有异常的时候，此值为空
     **/
    public $mark_desc;

    /**
        是否是多次发货的订单如果卖家对订单进行多次发货，则为true否则为false
     **/
    public $is_part_consign;

    /**
        表示订单交易是否含有对应的代销采购单。如果该订单中存在一个对应的代销采购单，那么该值为true；反之，该值为false。
     **/
    public $is_daixiao;

    /**
        表示订单交易是否网厅订单。 如果该订单是网厅订单，那么该值为true；反之，该值为false。
     **/
    public $is_wt;

    /**
        订单列表
     **/
    public $orders;

    /**
        服务子订单列表
     **/
    public $service_orders;

    /**
        收货人国籍
     **/
    public $receiver_country;

    /**
        天猫国际官网直供主订单关税税费
     **/
    public $order_tax_fee;

    /**
        邮关订单
     **/
    public $post_gate_declare;

    /**
        跨境订单
     **/
    public $cross_bonded_declare;

    /**
        天猫国际计税优惠金额
     **/
    public $order_tax_promotion_fee;

    /**
        无物流信息返回true，平台属性，业务不要依赖
     **/
    public $no_shipping;

    /**
        aid
     **/
    public $aid;

    /**
        （收货人+手机号+座机+收货地址+create）5个字段组合成oaid，原始订单上座机为空也满足条件，否则生成不了oaid
     **/
    public $oaid;


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

    public function getBuyerOpenUid() : string{
        return $this->buyer_open_uid;
    }

    public function setBuyerOpenUid(string $buyerOpenUid){
        $this->buyer_open_uid = $buyerOpenUid;
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

    public function getAcookieId() : string{
        return $this->acookie_id;
    }

    public function setAcookieId(string $acookieId){
        $this->acookie_id = $acookieId;
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

    public function getAsyncModified() : string{
        return $this->async_modified;
    }

    public function setAsyncModified(string $asyncModified){
        $this->async_modified = $asyncModified;
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

    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getAlipayId() : int{
        return $this->alipay_id;
    }

    public function setAlipayId(int $alipayId){
        $this->alipay_id = $alipayId;
    }

    public function getBuyerArea() : string{
        return $this->buyer_area;
    }

    public function setBuyerArea(string $buyerArea){
        $this->buyer_area = $buyerArea;
    }

    public function getNutFeature() : string{
        return $this->nut_feature;
    }

    public function setNutFeature(string $nutFeature){
        $this->nut_feature = $nutFeature;
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

    public function getReceiverName() : string{
        return $this->receiver_name;
    }

    public function setReceiverName(string $receiverName){
        $this->receiver_name = $receiverName;
    }

    public function getReceiverState() : string{
        return $this->receiver_state;
    }

    public function setReceiverState(string $receiverState){
        $this->receiver_state = $receiverState;
    }

    public function getReceiverCity() : string{
        return $this->receiver_city;
    }

    public function setReceiverCity(string $receiverCity){
        $this->receiver_city = $receiverCity;
    }

    public function getReceiverDistrict() : string{
        return $this->receiver_district;
    }

    public function setReceiverDistrict(string $receiverDistrict){
        $this->receiver_district = $receiverDistrict;
    }

    public function getReceiverTown() : string{
        return $this->receiver_town;
    }

    public function setReceiverTown(string $receiverTown){
        $this->receiver_town = $receiverTown;
    }

    public function getReceiverAddress() : string{
        return $this->receiver_address;
    }

    public function setReceiverAddress(string $receiverAddress){
        $this->receiver_address = $receiverAddress;
    }

    public function getReceiverZip() : string{
        return $this->receiver_zip;
    }

    public function setReceiverZip(string $receiverZip){
        $this->receiver_zip = $receiverZip;
    }

    public function getReceiverMobile() : string{
        return $this->receiver_mobile;
    }

    public function setReceiverMobile(string $receiverMobile){
        $this->receiver_mobile = $receiverMobile;
    }

    public function getReceiverPhone() : string{
        return $this->receiver_phone;
    }

    public function setReceiverPhone(string $receiverPhone){
        $this->receiver_phone = $receiverPhone;
    }

    public function getSellerFlag() : int{
        return $this->seller_flag;
    }

    public function setSellerFlag(int $sellerFlag){
        $this->seller_flag = $sellerFlag;
    }

    public function getIsLgtype() : bool{
        return $this->is_lgtype;
    }

    public function setIsLgtype(bool $isLgtype){
        $this->is_lgtype = $isLgtype;
    }

    public function getLgAgingType() : string{
        return $this->lg_aging_type;
    }

    public function setLgAgingType(string $lgAgingType){
        $this->lg_aging_type = $lgAgingType;
    }

    public function getLgAging() : string{
        return $this->lg_aging;
    }

    public function setLgAging(string $lgAging){
        $this->lg_aging = $lgAging;
    }

    public function getIsBrandSale() : bool{
        return $this->is_brand_sale;
    }

    public function setIsBrandSale(bool $isBrandSale){
        $this->is_brand_sale = $isBrandSale;
    }

    public function getIsForceWlb() : bool{
        return $this->is_force_wlb;
    }

    public function setIsForceWlb(bool $isForceWlb){
        $this->is_force_wlb = $isForceWlb;
    }

    public function getHasBuyerMessage() : bool{
        return $this->has_buyer_message;
    }

    public function setHasBuyerMessage(bool $hasBuyerMessage){
        $this->has_buyer_message = $hasBuyerMessage;
    }

    public function getCreditCardFee() : string{
        return $this->credit_card_fee;
    }

    public function setCreditCardFee(string $creditCardFee){
        $this->credit_card_fee = $creditCardFee;
    }

    public function getStepTradeStatus() : string{
        return $this->step_trade_status;
    }

    public function setStepTradeStatus(string $stepTradeStatus){
        $this->step_trade_status = $stepTradeStatus;
    }

    public function getStepPaidFee() : string{
        return $this->step_paid_fee;
    }

    public function setStepPaidFee(string $stepPaidFee){
        $this->step_paid_fee = $stepPaidFee;
    }

    public function getMarkDesc() : string{
        return $this->mark_desc;
    }

    public function setMarkDesc(string $markDesc){
        $this->mark_desc = $markDesc;
    }

    public function getIsPartConsign() : bool{
        return $this->is_part_consign;
    }

    public function setIsPartConsign(bool $isPartConsign){
        $this->is_part_consign = $isPartConsign;
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

    public function getOrders() : array{
        return $this->orders;
    }

    public function setOrders(array $orders){
        $this->orders = $orders;
    }

    public function getServiceOrders() : array{
        return $this->service_orders;
    }

    public function setServiceOrders(array $serviceOrders){
        $this->service_orders = $serviceOrders;
    }

    public function getReceiverCountry() : string{
        return $this->receiver_country;
    }

    public function setReceiverCountry(string $receiverCountry){
        $this->receiver_country = $receiverCountry;
    }

    public function getOrderTaxFee() : string{
        return $this->order_tax_fee;
    }

    public function setOrderTaxFee(string $orderTaxFee){
        $this->order_tax_fee = $orderTaxFee;
    }

    public function getPostGateDeclare() : bool{
        return $this->post_gate_declare;
    }

    public function setPostGateDeclare(bool $postGateDeclare){
        $this->post_gate_declare = $postGateDeclare;
    }

    public function getCrossBondedDeclare() : bool{
        return $this->cross_bonded_declare;
    }

    public function setCrossBondedDeclare(bool $crossBondedDeclare){
        $this->cross_bonded_declare = $crossBondedDeclare;
    }

    public function getOrderTaxPromotionFee() : string{
        return $this->order_tax_promotion_fee;
    }

    public function setOrderTaxPromotionFee(string $orderTaxPromotionFee){
        $this->order_tax_promotion_fee = $orderTaxPromotionFee;
    }

    public function getNoShipping() : bool{
        return $this->no_shipping;
    }

    public function setNoShipping(bool $noShipping){
        $this->no_shipping = $noShipping;
    }

    public function getAid() : string{
        return $this->aid;
    }

    public function setAid(string $aid){
        $this->aid = $aid;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }


}

