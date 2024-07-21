<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolActivityCreateOpenLogicGroupRule {

    /**
        整体优惠
     **/
    public $cover_all_discount_rule;

    /**
        是否为优惠作用分组
     **/
    public $is_effective_group;

    /**
        逻辑分组上满N元条件，当阶梯的is_amount=true时生效，逻辑分组条件的优先级大于阶梯条件的优先级
     **/
    public $amount;

    /**
        逻辑分组上满N件条件，当阶梯的is_count=true时生效，逻辑分组条件的优先级大于阶梯条件的优先级
     **/
    public $count;

    /**
        换购N件
     **/
    public $can_extra_item_num;

    /**
        1-普通分组，2-换购分组，3-买赠分组
     **/
    public $logic_group_type;

    /**
        商家逻辑分组Id（单个活动不能重复）
     **/
    public $number;

    /**
        换购分组排序，用于在app上展示的顺序
     **/
    public $exchange_group_order;

    /**
        换购分组名称
     **/
    public $exchange_group_name;

    /**
        分摊比例
     **/
    public $ratio;


    public function getCoverAllDiscountRule() : AlibabaWdkMarketingItempoolActivityCreateCoverAllDiscountRule{
        return $this->cover_all_discount_rule;
    }

    public function setCoverAllDiscountRule(AlibabaWdkMarketingItempoolActivityCreateCoverAllDiscountRule $coverAllDiscountRule){
        $this->cover_all_discount_rule = $coverAllDiscountRule;
    }

    public function getIsEffectiveGroup() : bool{
        return $this->is_effective_group;
    }

    public function setIsEffectiveGroup(bool $isEffectiveGroup){
        $this->is_effective_group = $isEffectiveGroup;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getCanExtraItemNum() : int{
        return $this->can_extra_item_num;
    }

    public function setCanExtraItemNum(int $canExtraItemNum){
        $this->can_extra_item_num = $canExtraItemNum;
    }

    public function getLogicGroupType() : int{
        return $this->logic_group_type;
    }

    public function setLogicGroupType(int $logicGroupType){
        $this->logic_group_type = $logicGroupType;
    }

    public function getNumber() : int{
        return $this->number;
    }

    public function setNumber(int $number){
        $this->number = $number;
    }

    public function getExchangeGroupOrder() : int{
        return $this->exchange_group_order;
    }

    public function setExchangeGroupOrder(int $exchangeGroupOrder){
        $this->exchange_group_order = $exchangeGroupOrder;
    }

    public function getExchangeGroupName() : string{
        return $this->exchange_group_name;
    }

    public function setExchangeGroupName(string $exchangeGroupName){
        $this->exchange_group_name = $exchangeGroupName;
    }

    public function getRatio() : int{
        return $this->ratio;
    }

    public function setRatio(int $ratio){
        $this->ratio = $ratio;
    }


}

