<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoLogisticsAddressReachablebatchGetAddressReachableTopResult {

    /**
        筛单结果l列表
     **/
    public $reachable_result_list;


    public function getReachableResultList() : array{
        return $this->reachable_result_list;
    }

    public function setReachableResultList(array $reachableResultList){
        $this->reachable_result_list = $reachableResultList;
    }


}

