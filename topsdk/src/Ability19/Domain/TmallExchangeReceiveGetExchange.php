<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeReceiveGetExchange {

    /**
        支付宝ID
     **/
    public $alipay_no;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        换货单创建时间
     **/
    public $created;

    /**
        换货单最新修改时间
     **/
    public $modified;

    /**
        当前换货单状态
     **/
    public $status;

    /**
        当前商品状态
     **/
    public $good_status;

    /**
        支付费用
     **/
    public $payment;

    /**
        申请换货原因
     **/
    public $reason;

    /**
        商品名称
     **/
    public $title;

    /**
        价格
     **/
    public $price;

    /**
        购买数
     **/
    public $num;

    /**
        卖家换货地址
     **/
    public $address;

    /**
        购买的商品sku
     **/
    public $bought_sku;

    /**
        买家申请换货的商品sku
     **/
    public $exchange_sku;

    /**
        买家发货物流公司
     **/
    public $buyer_logistic_name;

    /**
        买家发货快递单号
     **/
    public $buyer_logistic_no;

    /**
        正向单号ID
     **/
    public $biz_order_id;

    /**
        换货单号ID
     **/
    public $dispute_id;

    /**
        卖家发货物流公司
     **/
    public $seller_logistic_name;

    /**
        卖家发货快递单号
     **/
    public $seller_logistic_no;

    /**
        买家换货地址
     **/
    public $buyer_address;

    /**
        超时时间
     **/
    public $time_out;

    /**
        买家联系方式
     **/
    public $buyer_phone;

    /**
        buyerName
     **/
    public $buyer_name;

    /**
        收件人ID (Open Addressee ID)，长度在128个字符之内。
     **/
    public $oaid;

    /**
        买家openId
     **/
    public $buyer_open_uid;

    /**
        扩展属性
     **/
    public $attributes;


    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getGoodStatus() : string{
        return $this->good_status;
    }

    public function setGoodStatus(string $goodStatus){
        $this->good_status = $goodStatus;
    }

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
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

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getBoughtSku() : string{
        return $this->bought_sku;
    }

    public function setBoughtSku(string $boughtSku){
        $this->bought_sku = $boughtSku;
    }

    public function getExchangeSku() : string{
        return $this->exchange_sku;
    }

    public function setExchangeSku(string $exchangeSku){
        $this->exchange_sku = $exchangeSku;
    }

    public function getBuyerLogisticName() : string{
        return $this->buyer_logistic_name;
    }

    public function setBuyerLogisticName(string $buyerLogisticName){
        $this->buyer_logistic_name = $buyerLogisticName;
    }

    public function getBuyerLogisticNo() : string{
        return $this->buyer_logistic_no;
    }

    public function setBuyerLogisticNo(string $buyerLogisticNo){
        $this->buyer_logistic_no = $buyerLogisticNo;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getDisputeId() : string{
        return $this->dispute_id;
    }

    public function setDisputeId(string $disputeId){
        $this->dispute_id = $disputeId;
    }

    public function getSellerLogisticName() : string{
        return $this->seller_logistic_name;
    }

    public function setSellerLogisticName(string $sellerLogisticName){
        $this->seller_logistic_name = $sellerLogisticName;
    }

    public function getSellerLogisticNo() : string{
        return $this->seller_logistic_no;
    }

    public function setSellerLogisticNo(string $sellerLogisticNo){
        $this->seller_logistic_no = $sellerLogisticNo;
    }

    public function getBuyerAddress() : string{
        return $this->buyer_address;
    }

    public function setBuyerAddress(string $buyerAddress){
        $this->buyer_address = $buyerAddress;
    }

    public function getTimeOut() : string{
        return $this->time_out;
    }

    public function setTimeOut(string $timeOut){
        $this->time_out = $timeOut;
    }

    public function getBuyerPhone() : string{
        return $this->buyer_phone;
    }

    public function setBuyerPhone(string $buyerPhone){
        $this->buyer_phone = $buyerPhone;
    }

    public function getBuyerName() : string{
        return $this->buyer_name;
    }

    public function setBuyerName(string $buyerName){
        $this->buyer_name = $buyerName;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }

    public function getBuyerOpenUid() : string{
        return $this->buyer_open_uid;
    }

    public function setBuyerOpenUid(string $buyerOpenUid){
        $this->buyer_open_uid = $buyerOpenUid;
    }

    public function getAttributes() : string{
        return $this->attributes;
    }

    public function setAttributes(string $attributes){
        $this->attributes = $attributes;
    }


}

