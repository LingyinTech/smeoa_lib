<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkTradeDiscountBillGetOrderDiscountBillQueryResult {

    /**
        下一页查询的入参，当为-1时表示没有更多数据
     **/
    public $next_id;

    /**
        账单列表
     **/
    public $discount_bills;

    /**
        结果码
     **/
    public $return_code;

    /**
        结果文案
     **/
    public $return_msg;

    /**
        业务请求成功与否
     **/
    public $success;

    /**
        总数量，只在查询第一页时返回
     **/
    public $total_number;


    public function getNextId() : int{
        return $this->next_id;
    }

    public function setNextId(int $nextId){
        $this->next_id = $nextId;
    }

    public function getDiscountBills() : array{
        return $this->discount_bills;
    }

    public function setDiscountBills(array $discountBills){
        $this->discount_bills = $discountBills;
    }

    public function getReturnCode() : string{
        return $this->return_code;
    }

    public function setReturnCode(string $returnCode){
        $this->return_code = $returnCode;
    }

    public function getReturnMsg() : string{
        return $this->return_msg;
    }

    public function setReturnMsg(string $returnMsg){
        $this->return_msg = $returnMsg;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getTotalNumber() : int{
        return $this->total_number;
    }

    public function setTotalNumber(int $totalNumber){
        $this->total_number = $totalNumber;
    }


}

