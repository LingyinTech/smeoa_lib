<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradePostageUpdateTrade {

    /**
        交易修改时间(用户对订单的任何修改都会更新此字段)。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        邮费。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $post_fee;

    /**
        商品金额（商品价格乘以数量的总金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $total_fee;

    /**
        实付金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $payment;


    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
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

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }


}

