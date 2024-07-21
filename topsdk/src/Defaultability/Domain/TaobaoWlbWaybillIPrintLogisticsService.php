<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIPrintLogisticsService {

    /**
        服务编码
     **/
    public $service_code;

    /**
        服务类型值，json格式表示
     **/
    public $service_value4_json;


    public function getServiceCode() : string{
        return $this->service_code;
    }

    public function setServiceCode(string $serviceCode){
        $this->service_code = $serviceCode;
    }

    public function getServiceValue4Json() : string{
        return $this->service_value4_json;
    }

    public function setServiceValue4Json(string $serviceValue4Json){
        $this->service_value4_json = $serviceValue4Json;
    }


}

