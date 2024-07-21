<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiProductWaybillServiceType {

    /**
        code
     **/
    public $code;

    /**
        name
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

