<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryLogicGroup {

    /**
        逻辑分组类型
     **/
    public $logic_group_type;

    /**
        参与者分组序号
     **/
    public $number;

    /**
        五道口参与者名称
     **/
    public $wdk_group_name;


    public function getLogicGroupType() : int{
        return $this->logic_group_type;
    }

    public function setLogicGroupType(int $logicGroupType){
        $this->logic_group_type = $logicGroupType;
    }

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


}

