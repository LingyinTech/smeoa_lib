<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoLogisticsOrdersGetShipping {

    /**
        交易ID
     **/
    public $tid;

    /**
        物流订单编号
     **/
    public $order_code;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        预约取货开始时间
     **/
    public $delivery_start;

    /**
        预约取货结束时间
     **/
    public $delivery_end;

    /**
        运单号.具体一个物流公司的运单号码.
     **/
    public $out_sid;

    /**
        货物名称
     **/
    public $item_title;

    /**
        收件人姓名
     **/
    public $receiver_name;

    /**
        运单创建时间
     **/
    public $created;

    /**
        运单修改时间
     **/
    public $modified;

    /**
        物流订单状态,可选值:CREATED(订单已创建) RECREATED(订单重新创建) CANCELLED(订单已取消) CLOSED(订单关闭) SENDING(等候发送给物流公司) ACCEPTING(已发送给物流公司,等待接单) ACCEPTED(物流公司已接单) REJECTED(物流公司不接单) PICK_UP(物流公司揽收成功) PICK_UP_FAILED(物流公司揽收失败) LOST(物流公司丢单) REJECTED_BY_RECEIVER(对方拒签) ACCEPTED_BY_RECEIVER(发货方式在线下单：对方已签收；自己联系：卖家已发货)
     **/
    public $status;

    /**
        物流方式.可选值:free(卖家包邮),post(平邮),express(快递),ems(EMS).
     **/
    public $type;

    /**
        谁承担运费.可选值:buyer(买家承担),seller(卖家承担运费).
     **/
    public $freight_payer;

    /**
        物流公司名称
     **/
    public $company_name;

    /**
        卖家是否确认发货.可选值:yes(是),no(否).
     **/
    public $seller_confirm;

    /**
        表明是否是拆单，默认值0，1表示拆单
     **/
    public $is_split;

    /**
        拆单子订单列表，对应的数据是：该物流订单下的全部子订单
     **/
    public $sub_tids;

    /**
        ouid
     **/
    public $ouid;

    /**
        1111
     **/
    public $openuid;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getOrderCode() : string{
        return $this->order_code;
    }

    public function setOrderCode(string $orderCode){
        $this->order_code = $orderCode;
    }

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

    public function getDeliveryStart() : string{
        return $this->delivery_start;
    }

    public function setDeliveryStart(string $deliveryStart){
        $this->delivery_start = $deliveryStart;
    }

    public function getDeliveryEnd() : string{
        return $this->delivery_end;
    }

    public function setDeliveryEnd(string $deliveryEnd){
        $this->delivery_end = $deliveryEnd;
    }

    public function getOutSid() : string{
        return $this->out_sid;
    }

    public function setOutSid(string $outSid){
        $this->out_sid = $outSid;
    }

    public function getItemTitle() : string{
        return $this->item_title;
    }

    public function setItemTitle(string $itemTitle){
        $this->item_title = $itemTitle;
    }

    public function getReceiverName() : string{
        return $this->receiver_name;
    }

    public function setReceiverName(string $receiverName){
        $this->receiver_name = $receiverName;
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

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getFreightPayer() : string{
        return $this->freight_payer;
    }

    public function setFreightPayer(string $freightPayer){
        $this->freight_payer = $freightPayer;
    }

    public function getCompanyName() : string{
        return $this->company_name;
    }

    public function setCompanyName(string $companyName){
        $this->company_name = $companyName;
    }

    public function getSellerConfirm() : string{
        return $this->seller_confirm;
    }

    public function setSellerConfirm(string $sellerConfirm){
        $this->seller_confirm = $sellerConfirm;
    }

    public function getIsSplit() : int{
        return $this->is_split;
    }

    public function setIsSplit(int $isSplit){
        $this->is_split = $isSplit;
    }

    public function getSubTids() : array{
        return $this->sub_tids;
    }

    public function setSubTids(array $subTids){
        $this->sub_tids = $subTids;
    }

    public function getOuid() : string{
        return $this->ouid;
    }

    public function setOuid(string $ouid){
        $this->ouid = $ouid;
    }

    public function getOpenuid() : string{
        return $this->openuid;
    }

    public function setOpenuid(string $openuid){
        $this->openuid = $openuid;
    }


}

