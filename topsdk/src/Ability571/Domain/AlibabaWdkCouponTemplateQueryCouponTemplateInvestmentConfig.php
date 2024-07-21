<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryCouponTemplateInvestmentConfig {

    /**
        出资人配置
     **/
    public $investment_info_list;


    public function getInvestmentInfoList() : array{
        return $this->investment_info_list;
    }

    public function setInvestmentInfoList(array $investmentInfoList){
        $this->investment_info_list = $investmentInfoList;
    }


}

