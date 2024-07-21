<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoReachableBatchjudgeReachableServiceWaybillForTopResponseDto {

    /**
        结果列表
     **/
    public $result_list;


    public function getResultList() : array{
        return $this->result_list;
    }

    public function setResultList(array $resultList){
        $this->result_list = $resultList;
    }


}

