<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoLogisticsAddressModifyAddressResult {

    /**
        修改日期时间
     **/
    public $modify_date;


    public function getModifyDate() : string{
        return $this->modify_date;
    }

    public function setModifyDate(string $modifyDate){
        $this->modify_date = $modifyDate;
    }


}

