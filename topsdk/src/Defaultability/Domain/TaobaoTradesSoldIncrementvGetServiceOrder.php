<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTradesSoldIncrementvGetServiceOrder {

    /**
        虚拟服务子订单订单号
     **/
    public $oid;

    /**
        服务所属的交易订单号。如果服务为一年包换，则item_oid这笔订单享受改服务的保护
     **/
    public $item_oid;

    /**
        服务数字id
     **/
    public $service_id;

    /**
        服务详情的URL地址
     **/
    public $service_detail_url;

    /**
        购买数量，取值范围为大于0的整数
     **/
    public $num;

    /**
        服务价格，精确到小数点后两位：单位:元
     **/
    public $price;

    /**
        子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。
     **/
    public $payment;

    /**
        商品名称
     **/
    public $title;

    /**
        服务子订单总费用
     **/
    public $total_fee;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        最近退款的id
     **/
    public $refund_id;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        服务图片地址
     **/
    public $pic_path;


    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getItemOid() : int{
        return $this->item_oid;
    }

    public function setItemOid(int $itemOid){
        $this->item_oid = $itemOid;
    }

    public function getServiceId() : int{
        return $this->service_id;
    }

    public function setServiceId(int $serviceId){
        $this->service_id = $serviceId;
    }

    public function getServiceDetailUrl() : string{
        return $this->service_detail_url;
    }

    public function setServiceDetailUrl(string $serviceDetailUrl){
        $this->service_detail_url = $serviceDetailUrl;
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

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getRefundId() : string{
        return $this->refund_id;
    }

    public function setRefundId(string $refundId){
        $this->refund_id = $refundId;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getPicPath() : string{
        return $this->pic_path;
    }

    public function setPicPath(string $picPath){
        $this->pic_path = $picPath;
    }


}

