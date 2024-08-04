<?php
namespace Topsdk\Topapi\Ability312\Domain;

class TaobaoJstSmsSignnameReportSmsSignNameRequest {

    /**
        短信签名
     **/
    public $sign_name;

    /**
        描述信息
     **/
    public $description;


    public function getSignName() : string{
        return $this->sign_name;
    }

    public function setSignName(string $signName){
        $this->sign_name = $signName;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }


}

