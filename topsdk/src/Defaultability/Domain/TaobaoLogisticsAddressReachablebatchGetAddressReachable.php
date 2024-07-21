<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoLogisticsAddressReachablebatchGetAddressReachable {

    /**
        发货地，标准区域编码(四级行政)，可以通过taobao.areas.get获取，如浙江省杭州市余杭区闲林街道为 330110011
     **/
    public $source_area_code;

    /**
        服务对应的数字编码，如揽派范围对应88
     **/
    public $service_type;

    /**
        物流公司编码ID，可以从这个接口获取所有物流公司的标准编码taobao.logistics.companies.get，可以传入多个值，以英文逗号分隔，如“1000000952,1000000953”
     **/
    public $partner_id;

    /**
        标准区域编码(三级行政区编码或是四级行政区)，可以通过taobao.areas.get获取，如北京市朝阳区为110105
     **/
    public $area_code;

    /**
        详细地址
     **/
    public $address;


    public function getSourceAreaCode() : string{
        return $this->source_area_code;
    }

    public function setSourceAreaCode(string $sourceAreaCode){
        $this->source_area_code = $sourceAreaCode;
    }

    public function getServiceType() : int{
        return $this->service_type;
    }

    public function setServiceType(int $serviceType){
        $this->service_type = $serviceType;
    }

    public function getPartnerId() : string{
        return $this->partner_id;
    }

    public function setPartnerId(string $partnerId){
        $this->partner_id = $partnerId;
    }

    public function getAreaCode() : string{
        return $this->area_code;
    }

    public function setAreaCode(string $areaCode){
        $this->area_code = $areaCode;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }


}

