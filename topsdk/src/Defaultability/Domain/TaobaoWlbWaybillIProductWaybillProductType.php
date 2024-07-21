<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIProductWaybillProductType {

    /**
        物流产品类型编码
     **/
    public $code;

    /**
        物流产品类型名称
     **/
    public $name;

    /**
        物流服务类型列表
     **/
    public $service_types;


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

    public function getServiceTypes() : array{
        return $this->service_types;
    }

    public function setServiceTypes(array $serviceTypes){
        $this->service_types = $serviceTypes;
    }


}

