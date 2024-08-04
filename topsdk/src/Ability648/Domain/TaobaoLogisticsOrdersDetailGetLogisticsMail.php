<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoLogisticsOrdersDetailGetLogisticsMail {

    /**
        运单号.具体一个物流公司的运单号码.
     **/
    public $out_sid;

    /**
        物流公司名称
     **/
    public $company_name;


    public function getOutSid() : string{
        return $this->out_sid;
    }

    public function setOutSid(string $outSid){
        $this->out_sid = $outSid;
    }

    public function getCompanyName() : string{
        return $this->company_name;
    }

    public function setCompanyName(string $companyName){
        $this->company_name = $companyName;
    }


}

