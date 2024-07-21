<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateInvestmentInfo {

    /**
        出资人
     **/
    public $investor;

    /**
        出资比例 2000 = 20%
     **/
    public $investor_ratio;


    public function getInvestor() : string{
        return $this->investor;
    }

    public function setInvestor(string $investor){
        $this->investor = $investor;
    }

    public function getInvestorRatio() : int{
        return $this->investor_ratio;
    }

    public function setInvestorRatio(int $investorRatio){
        $this->investor_ratio = $investorRatio;
    }


}

