<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTradesSoldQueryOrderQuery {

    /**
        收件人电话号码
     **/
    public $receiver_phone;

    /**
        收件人的手机号
     **/
    public $receiver_mobile;

    /**
        收件人的姓名
     **/
    public $receiver_name;

    /**
        查询三个月内交易创建时间开始。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $end_created;

    /**
        查询交易创建时间结束。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $start_created;


    public function getReceiverPhone() : string{
        return $this->receiver_phone;
    }

    public function setReceiverPhone(string $receiverPhone){
        $this->receiver_phone = $receiverPhone;
    }

    public function getReceiverMobile() : string{
        return $this->receiver_mobile;
    }

    public function setReceiverMobile(string $receiverMobile){
        $this->receiver_mobile = $receiverMobile;
    }

    public function getReceiverName() : string{
        return $this->receiver_name;
    }

    public function setReceiverName(string $receiverName){
        $this->receiver_name = $receiverName;
    }

    public function getEndCreated() : string{
        return $this->end_created;
    }

    public function setEndCreated(string $endCreated){
        $this->end_created = $endCreated;
    }

    public function getStartCreated() : string{
        return $this->start_created;
    }

    public function setStartCreated(string $startCreated){
        $this->start_created = $startCreated;
    }


}

