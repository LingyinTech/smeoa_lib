<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeGetExchange {

    /**
        买家发货物流单号
     **/
    public $buyer_logistic_no;

    /**
        支付宝单号ID
     **/
    public $alipay_no;

    /**
        换货理由说明
     **/
    public $desc;

    /**
        换货申请理由
     **/
    public $reason;

    /**
        attributes
     **/
    public $attributes;

    /**
        申请换货的状态：售中换货 or 售后换货
     **/
    public $refund_phase;

    /**
        换货商品的sku
     **/
    public $exchange_sku;

    /**
        buyerAddress
     **/
    public $buyer_address;

    /**
        操作场景
     **/
    public $operation_contraint;

    /**
        商品名称
     **/
    public $title;

    /**
        换货单创建时间
     **/
    public $created;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        先行垫付状态
     **/
    public $advance_status;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        买家发货物流公司名称
     **/
    public $buyer_logistic_name;

    /**
        换货状态，具体包括：换货待处理(1), 待买家退货(2), 买家已退货，待收货(3),  换货关闭(4), 换货成功(5), 待买家修改(6), 待发出换货商品(12), 待买家收货(13), 请退款(14)
     **/
    public $status;

    /**
        换货版本
     **/
    public $refund_version;

    /**
        卖家发货物流公司名称
     **/
    public $seller_logistic_name;

    /**
        所购买的商品sku
     **/
    public $bought_sku;

    /**
        换货单修改时间
     **/
    public $modified;

    /**
        换货单号ID
     **/
    public $dispute_id;

    /**
        换货数量
     **/
    public $num;

    /**
        卖家发货快递单号
     **/
    public $seller_logistic_no;

    /**
        价格
     **/
    public $price;

    /**
        超时时间
     **/
    public $time_out;

    /**
        小二托管状态
     **/
    public $cs_status;

    /**
        卖家换货地址
     **/
    public $address;

    /**
        商品状态
     **/
    public $good_status;

    /**
        正向订单号ID
     **/
    public $biz_order_id;

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


    public function getBuyerLogisticNo() : string{
        return $this->buyer_logistic_no;
    }

    public function setBuyerLogisticNo(string $buyerLogisticNo){
        $this->buyer_logistic_no = $buyerLogisticNo;
    }

    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getAttributes() : string{
        return $this->attributes;
    }

    public function setAttributes(string $attributes){
        $this->attributes = $attributes;
    }

    public function getRefundPhase() : string{
        return $this->refund_phase;
    }

    public function setRefundPhase(string $refundPhase){
        $this->refund_phase = $refundPhase;
    }

    public function getExchangeSku() : string{
        return $this->exchange_sku;
    }

    public function setExchangeSku(string $exchangeSku){
        $this->exchange_sku = $exchangeSku;
    }

    public function getBuyerAddress() : string{
        return $this->buyer_address;
    }

    public function setBuyerAddress(string $buyerAddress){
        $this->buyer_address = $buyerAddress;
    }

    public function getOperationContraint() : string{
        return $this->operation_contraint;
    }

    public function setOperationContraint(string $operationContraint){
        $this->operation_contraint = $operationContraint;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getAdvanceStatus() : int{
        return $this->advance_status;
    }

    public function setAdvanceStatus(int $advanceStatus){
        $this->advance_status = $advanceStatus;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getBuyerLogisticName() : string{
        return $this->buyer_logistic_name;
    }

    public function setBuyerLogisticName(string $buyerLogisticName){
        $this->buyer_logistic_name = $buyerLogisticName;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getRefundVersion() : int{
        return $this->refund_version;
    }

    public function setRefundVersion(int $refundVersion){
        $this->refund_version = $refundVersion;
    }

    public function getSellerLogisticName() : string{
        return $this->seller_logistic_name;
    }

    public function setSellerLogisticName(string $sellerLogisticName){
        $this->seller_logistic_name = $sellerLogisticName;
    }

    public function getBoughtSku() : string{
        return $this->bought_sku;
    }

    public function setBoughtSku(string $boughtSku){
        $this->bought_sku = $boughtSku;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getDisputeId() : string{
        return $this->dispute_id;
    }

    public function setDisputeId(string $disputeId){
        $this->dispute_id = $disputeId;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getSellerLogisticNo() : string{
        return $this->seller_logistic_no;
    }

    public function setSellerLogisticNo(string $sellerLogisticNo){
        $this->seller_logistic_no = $sellerLogisticNo;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getTimeOut() : string{
        return $this->time_out;
    }

    public function setTimeOut(string $timeOut){
        $this->time_out = $timeOut;
    }

    public function getCsStatus() : int{
        return $this->cs_status;
    }

    public function setCsStatus(int $csStatus){
        $this->cs_status = $csStatus;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getGoodStatus() : string{
        return $this->good_status;
    }

    public function setGoodStatus(string $goodStatus){
        $this->good_status = $goodStatus;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
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


}

