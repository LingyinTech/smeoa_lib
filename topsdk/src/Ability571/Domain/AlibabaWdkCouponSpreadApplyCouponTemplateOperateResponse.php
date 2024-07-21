<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSpreadApplyCouponTemplateOperateResponse {

    /**
        匿名码code
     **/
    public $ma_code;

    /**
        券实例id
     **/
    public $voucher_id;


    public function getMaCode() : string{
        return $this->ma_code;
    }

    public function setMaCode(string $maCode){
        $this->ma_code = $maCode;
    }

    public function getVoucherId() : string{
        return $this->voucher_id;
    }

    public function setVoucherId(string $voucherId){
        $this->voucher_id = $voucherId;
    }


}

