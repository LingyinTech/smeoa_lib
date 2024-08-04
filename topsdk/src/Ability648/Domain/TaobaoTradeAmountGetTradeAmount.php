<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeAmountGetTradeAmount {

    /**
        交易主订单编号
     **/
    public $tid;

    /**
        支付宝交易号，如：2009112081173831
     **/
    public $alipay_no;

    /**
        交易创建时间
     **/
    public $created;

    /**
        付款时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $pay_time;

    /**
        交易成功时间(更新交易状态为成功的同时更新)/确认收货时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $end_time;

    /**
        主订单的商品金额（各子订单中商品price * num的和，不包括任何优惠信息）。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $total_fee;

    /**
        邮费。精确到2位小数;单位:元。如:200.07，表示:200元7分。目前只提供整笔交易的邮费，暂不提供各子订单的邮费
     **/
    public $post_fee;

    /**
        货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
     **/
    public $cod_fee;

    /**
        买家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
     **/
    public $buyer_cod_fee;

    /**
        卖家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
     **/
    public $seller_cod_fee;

    /**
        快递代收款。精确到2位小数;单位:元。如:212.07，表示:212元7分
     **/
    public $express_agency_fee;

    /**
        主订单实付金额。精确到2位小数;单位:元。如:200.07，表示:200元7分，计算公式如下：如果主订单只有一笔子订单 payment = 子订单的实付金额 + 货到付款服务费(如果是货到付款订单) - 主订单的系统级优惠；如果主订单有多笔子订单 payment = 各子订单的实付金额之和 + 货到付款服务费(如果是货到付款订单) + 邮费 - 主订单的系统级优惠
     **/
    public $payment;

    /**
        交易佣金。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $commission_fee;

    /**
        买家获得积分,返点的积分。格式:100;单位:个
     **/
    public $buyer_obtain_point_fee;

    /**
        子订单的帐务金额详情列表
     **/
    public $order_amounts;

    /**
        主交易订单的系统级优惠详情
     **/
    public $promotion_details;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
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

    public function getCodFee() : string{
        return $this->cod_fee;
    }

    public function setCodFee(string $codFee){
        $this->cod_fee = $codFee;
    }

    public function getBuyerCodFee() : string{
        return $this->buyer_cod_fee;
    }

    public function setBuyerCodFee(string $buyerCodFee){
        $this->buyer_cod_fee = $buyerCodFee;
    }

    public function getSellerCodFee() : string{
        return $this->seller_cod_fee;
    }

    public function setSellerCodFee(string $sellerCodFee){
        $this->seller_cod_fee = $sellerCodFee;
    }

    public function getExpressAgencyFee() : string{
        return $this->express_agency_fee;
    }

    public function setExpressAgencyFee(string $expressAgencyFee){
        $this->express_agency_fee = $expressAgencyFee;
    }

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }

    public function getCommissionFee() : string{
        return $this->commission_fee;
    }

    public function setCommissionFee(string $commissionFee){
        $this->commission_fee = $commissionFee;
    }

    public function getBuyerObtainPointFee() : string{
        return $this->buyer_obtain_point_fee;
    }

    public function setBuyerObtainPointFee(string $buyerObtainPointFee){
        $this->buyer_obtain_point_fee = $buyerObtainPointFee;
    }

    public function getOrderAmounts() : array{
        return $this->order_amounts;
    }

    public function setOrderAmounts(array $orderAmounts){
        $this->order_amounts = $orderAmounts;
    }

    public function getPromotionDetails() : array{
        return $this->promotion_details;
    }

    public function setPromotionDetails(array $promotionDetails){
        $this->promotion_details = $promotionDetails;
    }


}

