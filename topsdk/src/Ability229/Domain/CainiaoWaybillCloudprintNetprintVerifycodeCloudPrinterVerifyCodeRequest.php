<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoWaybillCloudprintNetprintVerifycodeCloudPrinterVerifyCodeRequest {

    /**
         打印机 id
     **/
    public $uid;


    public function getUid() : string{
        return $this->uid;
    }

    public function setUid(string $uid){
        $this->uid = $uid;
    }


}

