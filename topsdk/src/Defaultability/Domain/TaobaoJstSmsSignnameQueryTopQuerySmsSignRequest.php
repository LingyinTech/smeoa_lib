<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsSignnameQueryTopQuerySmsSignRequest {

    /**
        要查询的签名
     **/
    public $sign_name;


    public function getSignName() : string{
        return $this->sign_name;
    }

    public function setSignName(string $signName){
        $this->sign_name = $signName;
    }


}

