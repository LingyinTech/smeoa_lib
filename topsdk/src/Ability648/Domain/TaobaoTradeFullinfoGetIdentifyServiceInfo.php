<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetIdentifyServiceInfo {

    /**
        子订单号
     **/
    public $detail_order_id;

    /**
        标的物
     **/
    public $unit_id;

    /**
        服务单号
     **/
    public $service_id;


    public function getDetailOrderId() : int{
        return $this->detail_order_id;
    }

    public function setDetailOrderId(int $detailOrderId){
        $this->detail_order_id = $detailOrderId;
    }

    public function getUnitId() : string{
        return $this->unit_id;
    }

    public function setUnitId(string $unitId){
        $this->unit_id = $unitId;
    }

    public function getServiceId() : string{
        return $this->service_id;
    }

    public function setServiceId(string $serviceId){
        $this->service_id = $serviceId;
    }


}

