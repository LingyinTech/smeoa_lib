<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolActivityCreateOpenPromotionRuleStair {

    /**
        指定件数优惠规则
     **/
    public $cap_count_discount_rule;

    /**
        阶梯整体优惠规则
     **/
    public $cover_all_discount_rule;

    /**
        第N件优惠规则
     **/
    public $count_at_discount_rule;

    /**
        分组表达式【暂时不使用】
     **/
    public $login_group_express;

    /**
        是否满元
     **/
    public $is_amount;

    /**
        是否满件
     **/
    public $is_count;

    /**
        阶梯序号，代表商家的阶梯ID，同时代表阶梯优先级的顺序
     **/
    public $number;

    /**
        满x元【单位为分】
     **/
    public $amount;

    /**
        满x件
     **/
    public $count;

    /**
        是否叠加逻辑分组的条件
     **/
    public $is_overlay_logic_group_condition;

    /**
        单独定价优惠规则
     **/
    public $separate_pricing_discount_rule;


    public function getCapCountDiscountRule() : AlibabaHmMarketingItempoolActivityCreateCapCountDiscountRule{
        return $this->cap_count_discount_rule;
    }

    public function setCapCountDiscountRule(AlibabaHmMarketingItempoolActivityCreateCapCountDiscountRule $capCountDiscountRule){
        $this->cap_count_discount_rule = $capCountDiscountRule;
    }

    public function getCoverAllDiscountRule() : AlibabaHmMarketingItempoolActivityCreateCoverAllDiscountRule{
        return $this->cover_all_discount_rule;
    }

    public function setCoverAllDiscountRule(AlibabaHmMarketingItempoolActivityCreateCoverAllDiscountRule $coverAllDiscountRule){
        $this->cover_all_discount_rule = $coverAllDiscountRule;
    }

    public function getCountAtDiscountRule() : AlibabaHmMarketingItempoolActivityCreateCountAtDiscountRule{
        return $this->count_at_discount_rule;
    }

    public function setCountAtDiscountRule(AlibabaHmMarketingItempoolActivityCreateCountAtDiscountRule $countAtDiscountRule){
        $this->count_at_discount_rule = $countAtDiscountRule;
    }

    public function getLoginGroupExpress() : string{
        return $this->login_group_express;
    }

    public function setLoginGroupExpress(string $loginGroupExpress){
        $this->login_group_express = $loginGroupExpress;
    }

    public function getIsAmount() : bool{
        return $this->is_amount;
    }

    public function setIsAmount(bool $isAmount){
        $this->is_amount = $isAmount;
    }

    public function getIsCount() : bool{
        return $this->is_count;
    }

    public function setIsCount(bool $isCount){
        $this->is_count = $isCount;
    }

    public function getNumber() : int{
        return $this->number;
    }

    public function setNumber(int $number){
        $this->number = $number;
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

    public function getIsOverlayLogicGroupCondition() : bool{
        return $this->is_overlay_logic_group_condition;
    }

    public function setIsOverlayLogicGroupCondition(bool $isOverlayLogicGroupCondition){
        $this->is_overlay_logic_group_condition = $isOverlayLogicGroupCondition;
    }

    public function getSeparatePricingDiscountRule() : AlibabaHmMarketingItempoolActivityCreateSeparatePricingDiscountRule{
        return $this->separate_pricing_discount_rule;
    }

    public function setSeparatePricingDiscountRule(AlibabaHmMarketingItempoolActivityCreateSeparatePricingDiscountRule $separatePricingDiscountRule){
        $this->separate_pricing_discount_rule = $separatePricingDiscountRule;
    }


}

