<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetShipInfo {

    /**
        发货方式（小写）
     **/
    public $transport_type;


    public function getTransportType() : string{
        return $this->transport_type;
    }

    public function setTransportType(string $transportType){
        $this->transport_type = $transportType;
    }


}

