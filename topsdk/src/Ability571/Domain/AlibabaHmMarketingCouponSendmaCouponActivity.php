<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingCouponSendmaCouponActivity {

    /**
        匿名码code
     **/
    public $ma_code;


    public function getMaCode() : string{
        return $this->ma_code;
    }

    public function setMaCode(string $maCode){
        $this->ma_code = $maCode;
    }


}

