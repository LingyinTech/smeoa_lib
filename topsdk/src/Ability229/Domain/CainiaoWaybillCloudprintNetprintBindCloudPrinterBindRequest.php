<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoWaybillCloudprintNetprintBindCloudPrinterBindRequest {

    /**
        打印机 mac 地址
     **/
    public $uid;

    /**
         验证码
     **/
    public $verify_code;


    public function getUid() : string{
        return $this->uid;
    }

    public function setUid(string $uid){
        $this->uid = $uid;
    }

    public function getVerifyCode() : string{
        return $this->verify_code;
    }

    public function setVerifyCode(string $verifyCode){
        $this->verify_code = $verifyCode;
    }


}

