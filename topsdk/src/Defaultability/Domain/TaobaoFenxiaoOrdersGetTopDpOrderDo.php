<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFenxiaoOrdersGetTopDpOrderDo {

    /**
        消费者主订单ID （经销模式下，不存在该单号）
     **/
    public $tc_order_id;

    /**
        供应商来源网站。 入驻时定义供应商来源的外部系统编码, values: taobao, alibaba
     **/
    public $supplier_from;

    /**
        供应商昵称（在来源网站的帐号名）
     **/
    public $supplier_username;

    /**
        建议废弃： 分销商来源网站。 入驻时定义分销商来源的外部系统编码, 目前固定值: taobao
     **/
    public $distributor_from;

    /**
        分销商昵称（在来源网站的帐号名）。
     **/
    public $distributor_username;

    /**
        加密后的消费者淘宝ID，长度为32
     **/
    public $buyer_taobao_id;

    /**
        消费者（买家）nick，供应商查询不会返回买家昵称，分销商查询才会返回。
     **/
    public $buyer_nick;

    /**
        交易模式（分销方式）：AGENT（代销）、DEALER（经销）、INSTEAD_SALE（代售）、CONSIGNMENT（自营寄售）、PLATFORM_CONSIGNMENT（平台寄售）
     **/
    public $trade_type;

    /**
        采购单创建时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $created;

    /**
        废弃：如果是担保交易此值是TP800的交易单号，其他情况是采购单单号
     **/
    public $id;

    /**
        分销采购单号（分销流水号）
     **/
    public $fenxiao_id;

    /**
        采购单留言，默认是分销商留言。在代销模式下信息包括消费者（买家）留言和分销商留言信息
     **/
    public $memo;

    /**
        供应商备注信息。 只有供应商身份查询输出此新信息
     **/
    public $supplier_memo;

    /**
        供应商备注旗帜vlaue在1-5之间。 非1-5之间，都采用1作为默认。 1:红色 2:黄色 3:绿色 4:蓝色 5:粉红色 供应商角色查询返回
     **/
    public $supplier_flag;

    /**
        支付宝交易号，在分销商使用担保交易支付时存在。 来源主订单的payOrderId。
     **/
    public $alipay_no;

    /**
        应付采购单总额（不含邮费,精确到2位小数;单位:元。如:200.07，表示:200元7分 ) 计算公式： SUM(子单采购价 * 子单采购数量 - 子单折扣）+ 主单调整金额 - 主单折扣
     **/
    public $total_fee;

    /**
        采购单邮费。(改价后最新邮费，精确到2位小数;单位:元。如:8.07，表示:8元7分 )
     **/
    public $post_fee;

    /**
        分销商实付金额。(精确到2位小数;单位:元。如:208.14，表示:208元1角4分 )
     **/
    public $distributor_payment;

    /**
        消费者（买家）支付给分销商的主单的实际总金额。 注意买家购买的商品可能不是全部来自同一供货商，所以此金额不代表供应商销售商品消费者的实付款。请同时参考子单上的相关金额。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
     **/
    public $buyer_payment;

    /**
        交易订单快照URL（该字段废弃）
     **/
    public $snapshot_url;

    /**
        采购单交易状态，耦合了退款状态，废弃。  可选值：  	WAIT_BUYER_PAY(等待付款)  	WAIT_SELLER_SEND_GOODS(已付款，待发货） 	WAIT_BUYER_CONFIRM_GOODS(已付款，已发货) 	PAID_FORBID_CONSIGN(已付款，禁止发货 ps:架海金梁erpHold单场景) 	TRADE_FINISHED(交易成功) 	TRADE_CLOSED(交易关闭) 	WAIT_BUYER_CONFIRM_GOODS_ACOUNTED(已付款（已分账），已发货。只对代销分账支持) PAY_ACOUNTED_GOODS_CONFIRM （已分账发货成功） PAY_WAIT_ACOUNT_GOODS_CONFIRM（已付款，确认收货） 	TRADE_REFUNDING(退款中) 	TRADE_REFUNDED(退款结束)
     **/
    public $status;

    /**
        采购单付款时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $pay_time;

    /**
        交易结束时间。 如果交易成功此时间表示交易成功时间，如果交易关闭，此时间表示交易关闭时间。
     **/
    public $end_time;

    /**
        采购单物流发货时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $consign_time;

    /**
        采购单最后修改时间（包括订单状态变更和订单操作）。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        ISV自定义key，通过taobao.fenxiao.order.customfield.update 写入。目前禁用
     **/
    public $isv_custom_key;

    /**
        ISV自定义值，通过taobao.fenxiao.order.customfield.update 写入。目前禁用
     **/
    public $isv_custom_value;

    /**
        建议废弃 Feature对象列表目前已有的属性： attr_key为 www，attr_value为1 表示是www子订单； attr_key为 wwwStoreCode，attr_value是www子订单发货的仓库编码； attr_key为 isWt，attr_value为1 表示是网厅子订单； attr_key为wtInfo,attr_value为网厅相关合约信息； attr_key为 storeCode，attr_value为仓库信息；  attr_key为 erpHold，attr_value为1表示强管控中， attr_value为2表示分单完成；
     **/
    public $features;

    /**
        支付方式：ALIPAY_SURETY（支付宝担保交易）、ALIPAY_CHAIN（分账交易）、TRANSFER（线下转账）、PREPAY（预存款）、IMMEDIATELY（即时到账）、CASHGOODS（先款后货）、ACCOUNT_PERIOD（账期支付）
     **/
    public $pay_type;

    /**
        物流配送方式，发货后有此数据。 对应的值：FAST(快速)、EMS、ORDINARY(平邮)、SELLER(卖家包邮)
     **/
    public $shipping;

    /**
        物流公司名称
     **/
    public $logistics_company_name;

    /**
        运单号
     **/
    public $logistics_id;

    /**
        子订单的详细信息列表
     **/
    public $sub_purchase_orders;

    /**
        买家详细信息
     **/
    public $receiver;

    /**
        采购单留言列表，如果是代销，包含消费者留言。
     **/
    public $order_messages;

    /**
        [架海金梁独有字段，非架海金梁用户请勿关心]子单物流发货信息
     **/
    public $logistics_infos;

    /**
        支付宝交易号，担保交易使用。
     **/
    public $alipay_order_no;

    /**
        已执行确认收货的金额，单位：元
     **/
    public $confirm_paid_fee_yuan;

    /**
        渠道(市场)编码，例如消费电子的编码为200002
     **/
    public $channel_code;

    /**
        消费者淘宝id被加密后的唯一标识
     **/
    public $open_buyer_uid;

    /**
        计划出库时间
     **/
    public $delivery_time;

    /**
        计划送达时间
     **/
    public $sign_time;

    /**
        配送服务,201为驿站送货上门服务,202为顺丰配送服务,里面多个值时用英文逗号隔开
     **/
    public $asdp_ads;

    /**
        推荐配送公司编码
     **/
    public $delivery_cps;

    /**
        真正的采购单交易状态。  可选值：  LOCKED(交易hold单中) WAIT_BUYER_PAY(等待付款)  	WAIT_SELLER_CONFIRM_PAY(付款信息待确认，待发货) 	WAIT_SELLER_SEND_GOODS(已付款，待发货） 	WAIT_BUYER_CONFIRM_GOODS(已付款，已发货) 	TRADE_FINISHED(交易成功) 	TRADE_CLOSED(交易关闭) 
     **/
    public $order_status;

    /**
        采购单售中退款状态。  可选值：  ORDER_RF_NO_REFUND(整单无退款) ORDER_RF_REFUNDING(退款中) ORDER_RF_END_REFUND(退款结束)
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

    public function getSupplierFrom() : string{
        return $this->supplier_from;
    }

    public function setSupplierFrom(string $supplierFrom){
        $this->supplier_from = $supplierFrom;
    }

    public function getSupplierUsername() : string{
        return $this->supplier_username;
    }

    public function setSupplierUsername(string $supplierUsername){
        $this->supplier_username = $supplierUsername;
    }

    public function getDistributorFrom() : string{
        return $this->distributor_from;
    }

    public function setDistributorFrom(string $distributorFrom){
        $this->distributor_from = $distributorFrom;
    }

    public function getDistributorUsername() : string{
        return $this->distributor_username;
    }

    public function setDistributorUsername(string $distributorUsername){
        $this->distributor_username = $distributorUsername;
    }

    public function getBuyerTaobaoId() : string{
        return $this->buyer_taobao_id;
    }

    public function setBuyerTaobaoId(string $buyerTaobaoId){
        $this->buyer_taobao_id = $buyerTaobaoId;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getTradeType() : string{
        return $this->trade_type;
    }

    public function setTradeType(string $tradeType){
        $this->trade_type = $tradeType;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getFenxiaoId() : int{
        return $this->fenxiao_id;
    }

    public function setFenxiaoId(int $fenxiaoId){
        $this->fenxiao_id = $fenxiaoId;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getSupplierMemo() : string{
        return $this->supplier_memo;
    }

    public function setSupplierMemo(string $supplierMemo){
        $this->supplier_memo = $supplierMemo;
    }

    public function getSupplierFlag() : int{
        return $this->supplier_flag;
    }

    public function setSupplierFlag(int $supplierFlag){
        $this->supplier_flag = $supplierFlag;
    }

    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getPostFee() : string{
        return $this->post_fee;
    }

    public function setPostFee(string $postFee){
        $this->post_fee = $postFee;
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

    public function getSnapshotUrl() : string{
        return $this->snapshot_url;
    }

    public function setSnapshotUrl(string $snapshotUrl){
        $this->snapshot_url = $snapshotUrl;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
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

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getIsvCustomKey() : array{
        return $this->isv_custom_key;
    }

    public function setIsvCustomKey(array $isvCustomKey){
        $this->isv_custom_key = $isvCustomKey;
    }

    public function getIsvCustomValue() : array{
        return $this->isv_custom_value;
    }

    public function setIsvCustomValue(array $isvCustomValue){
        $this->isv_custom_value = $isvCustomValue;
    }

    public function getFeatures() : array{
        return $this->features;
    }

    public function setFeatures(array $features){
        $this->features = $features;
    }

    public function getPayType() : string{
        return $this->pay_type;
    }

    public function setPayType(string $payType){
        $this->pay_type = $payType;
    }

    public function getShipping() : string{
        return $this->shipping;
    }

    public function setShipping(string $shipping){
        $this->shipping = $shipping;
    }

    public function getLogisticsCompanyName() : string{
        return $this->logistics_company_name;
    }

    public function setLogisticsCompanyName(string $logisticsCompanyName){
        $this->logistics_company_name = $logisticsCompanyName;
    }

    public function getLogisticsId() : string{
        return $this->logistics_id;
    }

    public function setLogisticsId(string $logisticsId){
        $this->logistics_id = $logisticsId;
    }

    public function getSubPurchaseOrders() : array{
        return $this->sub_purchase_orders;
    }

    public function setSubPurchaseOrders(array $subPurchaseOrders){
        $this->sub_purchase_orders = $subPurchaseOrders;
    }

    public function getReceiver() : TaobaoFenxiaoOrdersGetTopReceiverDo{
        return $this->receiver;
    }

    public function setReceiver(TaobaoFenxiaoOrdersGetTopReceiverDo $receiver){
        $this->receiver = $receiver;
    }

    public function getOrderMessages() : array{
        return $this->order_messages;
    }

    public function setOrderMessages(array $orderMessages){
        $this->order_messages = $orderMessages;
    }

    public function getLogisticsInfos() : array{
        return $this->logistics_infos;
    }

    public function setLogisticsInfos(array $logisticsInfos){
        $this->logistics_infos = $logisticsInfos;
    }

    public function getAlipayOrderNo() : string{
        return $this->alipay_order_no;
    }

    public function setAlipayOrderNo(string $alipayOrderNo){
        $this->alipay_order_no = $alipayOrderNo;
    }

    public function getConfirmPaidFeeYuan() : string{
        return $this->confirm_paid_fee_yuan;
    }

    public function setConfirmPaidFeeYuan(string $confirmPaidFeeYuan){
        $this->confirm_paid_fee_yuan = $confirmPaidFeeYuan;
    }

    public function getChannelCode() : int{
        return $this->channel_code;
    }

    public function setChannelCode(int $channelCode){
        $this->channel_code = $channelCode;
    }

    public function getOpenBuyerUid() : string{
        return $this->open_buyer_uid;
    }

    public function setOpenBuyerUid(string $openBuyerUid){
        $this->open_buyer_uid = $openBuyerUid;
    }

    public function getDeliveryTime() : string{
        return $this->delivery_time;
    }

    public function setDeliveryTime(string $deliveryTime){
        $this->delivery_time = $deliveryTime;
    }

    public function getSignTime() : string{
        return $this->sign_time;
    }

    public function setSignTime(string $signTime){
        $this->sign_time = $signTime;
    }

    public function getAsdpAds() : string{
        return $this->asdp_ads;
    }

    public function setAsdpAds(string $asdpAds){
        $this->asdp_ads = $asdpAds;
    }

    public function getDeliveryCps() : string{
        return $this->delivery_cps;
    }

    public function setDeliveryCps(string $deliveryCps){
        $this->delivery_cps = $deliveryCps;
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

