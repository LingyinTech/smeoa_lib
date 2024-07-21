<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolActivityCreateActivityRule {

    /**
        封顶金额
     **/
    public $ceiling_amount;

    /**
        多阶梯是否可叠加
     **/
    public $is_multi_mix;

    /**
        单商品是否累计
     **/
    public $item_overlay;

    /**
        是否单商品计数【NY使用】【废弃】
     **/
    public $is_alone;

    /**
        是否上不封顶
     **/
    public $enable_multiple;

    /**
        是否叠加计算逻辑分组与阶梯满元【件】条件
     **/
    public $is_check_all_cond;

    /**
        1-可贬值，0-不可贬值
     **/
    public $discount_fee_mode;


    public function getCeilingAmount() : int{
        return $this->ceiling_amount;
    }

    public function setCeilingAmount(int $ceilingAmount){
        $this->ceiling_amount = $ceilingAmount;
    }

    public function getIsMultiMix() : bool{
        return $this->is_multi_mix;
    }

    public function setIsMultiMix(bool $isMultiMix){
        $this->is_multi_mix = $isMultiMix;
    }

    public function getItemOverlay() : bool{
        return $this->item_overlay;
    }

    public function setItemOverlay(bool $itemOverlay){
        $this->item_overlay = $itemOverlay;
    }

    public function getIsAlone() : bool{
        return $this->is_alone;
    }

    public function setIsAlone(bool $isAlone){
        $this->is_alone = $isAlone;
    }

    public function getEnableMultiple() : bool{
        return $this->enable_multiple;
    }

    public function setEnableMultiple(bool $enableMultiple){
        $this->enable_multiple = $enableMultiple;
    }

    public function getIsCheckAllCond() : bool{
        return $this->is_check_all_cond;
    }

    public function setIsCheckAllCond(bool $isCheckAllCond){
        $this->is_check_all_cond = $isCheckAllCond;
    }

    public function getDiscountFeeMode() : int{
        return $this->discount_fee_mode;
    }

    public function setDiscountFeeMode(int $discountFeeMode){
        $this->discount_fee_mode = $discountFeeMode;
    }


}

