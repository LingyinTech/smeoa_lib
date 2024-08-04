<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbOrderJzConsignTPDTO {

    /**
        公司编码
     **/
    public $code;

    /**
        公司名称
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

