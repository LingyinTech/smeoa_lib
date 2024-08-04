<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetIdentifyInfo {

    /**
        三方鉴定物流相关信息
     **/
    public $identify_logistics_infos;

    /**
        三方鉴定服务相关信息
     **/
    public $identify_service_infos;


    public function getIdentifyLogisticsInfos() : array{
        return $this->identify_logistics_infos;
    }

    public function setIdentifyLogisticsInfos(array $identifyLogisticsInfos){
        $this->identify_logistics_infos = $identifyLogisticsInfos;
    }

    public function getIdentifyServiceInfos() : array{
        return $this->identify_service_infos;
    }

    public function setIdentifyServiceInfos(array $identifyServiceInfos){
        $this->identify_service_infos = $identifyServiceInfos;
    }


}

