<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeGetLogisticServiceTag {

    /**
        物流服务下的标签属性,多个标签之间有";"分隔
     **/
    public $service_tag;

    /**
        消费者选快递请直接判断service_tag是否包含companyCode。而不要判断service_type
     **/
    public $service_type;


    public function getServiceTag() : string{
        return $this->service_tag;
    }

    public function setServiceTag(string $serviceTag){
        $this->service_tag = $serviceTag;
    }

    public function getServiceType() : string{
        return $this->service_type;
    }

    public function setServiceType(string $serviceType){
        $this->service_type = $serviceType;
    }


}

