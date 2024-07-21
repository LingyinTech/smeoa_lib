<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoReachableBatchjudgeRoutingReachableBatchRequestDto {

    /**
        快递公司code
     **/
    public $cp_code;

    /**
        收发地址和服务列表
     **/
    public $address_and_service_list;

    /**
        发件揽收网点
     **/
    public $send_branch_code;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getAddressAndServiceList() : array{
        return $this->address_and_service_list;
    }

    public function setAddressAndServiceList(array $addressAndServiceList){
        $this->address_and_service_list = $addressAndServiceList;
    }

    public function getSendBranchCode() : string{
        return $this->send_branch_code;
    }

    public function setSendBranchCode(string $sendBranchCode){
        $this->send_branch_code = $sendBranchCode;
    }


}

