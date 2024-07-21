<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateLogicGroup {

    /**
        参与者分组序号
     **/
    public $number;

    /**
        五道口参与者名称
     **/
    public $wdk_group_name;

    /**
        逻辑分组类型  COMMON(1, "普通分组"), EXCHANGE(2, "换购分组"), BUY_GIFT(3, "买赠分组"), EXCHANGE_TJ_OVERLAY(4, "特价换购叠加分组"),
     **/
    public $logic_group_type;


    public function getNumber() : int{
        return $this->number;
    }

    public function setNumber(int $number){
        $this->number = $number;
    }

    public function getWdkGroupName() : string{
        return $this->wdk_group_name;
    }

    public function setWdkGroupName(string $wdkGroupName){
        $this->wdk_group_name = $wdkGroupName;
    }

    public function getLogicGroupType() : int{
        return $this->logic_group_type;
    }

    public function setLogicGroupType(int $logicGroupType){
        $this->logic_group_type = $logicGroupType;
    }


}

