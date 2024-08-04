<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeConfirmfeeGetTradeConfirmFee {

    /**
        确认收货的金额(不包含邮费)。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $confirm_fee;

    /**
        需确认收货的邮费，当不是最后一笔收货或者没有邮费时是0.00。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $confirm_post_fee;

    /**
        是否是最后一笔订单（只对子订单有效，当其他子订单都是交易完成时，返回true，否则false）
     **/
    public $is_last_order;


    public function getConfirmFee() : string{
        return $this->confirm_fee;
    }

    public function setConfirmFee(string $confirmFee){
        $this->confirm_fee = $confirmFee;
    }

    public function getConfirmPostFee() : string{
        return $this->confirm_post_fee;
    }

    public function setConfirmPostFee(string $confirmPostFee){
        $this->confirm_post_fee = $confirmPostFee;
    }

    public function getIsLastOrder() : bool{
        return $this->is_last_order;
    }

    public function setIsLastOrder(bool $isLastOrder){
        $this->is_last_order = $isLastOrder;
    }


}

