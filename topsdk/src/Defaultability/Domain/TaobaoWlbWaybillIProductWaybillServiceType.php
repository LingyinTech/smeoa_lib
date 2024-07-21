<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIProductWaybillServiceType {

    /**
        物流服务能力编码
     **/
    public $code;

    /**
        物流服务能力名称
     **/
    public $name;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}

