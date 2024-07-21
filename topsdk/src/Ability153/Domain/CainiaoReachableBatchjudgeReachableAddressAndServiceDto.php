<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoReachableBatchjudgeReachableAddressAndServiceDto {

    /**
        收货地址
     **/
    public $receive_address;

    /**
        服务列表,每一项必须为json的string格式,快运必填,快递为空则默认为'标准快递'
     **/
    public $service_code_list;

    /**
        每条收发地址的key,用户自定义,每次请求多个地址不能重复
     **/
    public $object_id;

    /**
        发货地址
     **/
    public $send_address;

    /**
        淘宝开放地址ID
     **/
    public $oaid;

    /**
        订单id
     **/
    public $order_id;

    /**
        C2M&1688开放地址ID
     **/
    public $caid;


    public function getReceiveAddress() : CainiaoReachableBatchjudgeReceiveAddress{
        return $this->receive_address;
    }

    public function setReceiveAddress(CainiaoReachableBatchjudgeReceiveAddress $receiveAddress){
        $this->receive_address = $receiveAddress;
    }

    public function getServiceCodeList() : array{
        return $this->service_code_list;
    }

    public function setServiceCodeList(array $serviceCodeList){
        $this->service_code_list = $serviceCodeList;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }

    public function getSendAddress() : CainiaoReachableBatchjudgeAddressDto{
        return $this->send_address;
    }

    public function setSendAddress(CainiaoReachableBatchjudgeAddressDto $sendAddress){
        $this->send_address = $sendAddress;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getCaid() : string{
        return $this->caid;
    }

    public function setCaid(string $caid){
        $this->caid = $caid;
    }


}

