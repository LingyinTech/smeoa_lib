<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingFullrangeCreateactivityRulestairs {

    /**
        是否使用满元条件，不能与满件、N件Y折同时使用。此选项为true时，countAt和countBegin必须为false
     **/
    public $amount_at;

    /**
        满多少元[单位为分，传入700，代表满7元]，amountAt为true时，必须设置
     **/
    public $amount;

    /**
        可换购的数量
     **/
    public $can_extra_item_num;


    public function getAmountAt() : bool{
        return $this->amount_at;
    }

    public function setAmountAt(bool $amountAt){
        $this->amount_at = $amountAt;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getCanExtraItemNum() : int{
        return $this->can_extra_item_num;
    }

    public function setCanExtraItemNum(int $canExtraItemNum){
        $this->can_extra_item_num = $canExtraItemNum;
    }


}

