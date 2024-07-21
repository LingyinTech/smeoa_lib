<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenPosDiscountCodeCreateUniqueDiscountCodeBO {

    /**
        唯一码
     **/
    public $code;

    /**
        过期时间
     **/
    public $expire_time;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getExpireTime() : string{
        return $this->expire_time;
    }

    public function setExpireTime(string $expireTime){
        $this->expire_time = $expireTime;
    }


}

