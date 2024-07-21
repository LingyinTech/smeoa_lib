<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuRemovePromActSku {

    /**
        商家逻辑分组序号
     **/
    public $logic_group_number;

    /**
        参与者id
     **/
    public $participate_id;

    /**
        参与者名称
     **/
    public $participate_name;

    /**
        参与者类型 SKU_CODE(1, "商品skuCode"), SHOP(2, "店铺"), CATEGORY(3, "品类")
     **/
    public $participate_type;


    public function getLogicGroupNumber() : int{
        return $this->logic_group_number;
    }

    public function setLogicGroupNumber(int $logicGroupNumber){
        $this->logic_group_number = $logicGroupNumber;
    }

    public function getParticipateId() : string{
        return $this->participate_id;
    }

    public function setParticipateId(string $participateId){
        $this->participate_id = $participateId;
    }

    public function getParticipateName() : string{
        return $this->participate_name;
    }

    public function setParticipateName(string $participateName){
        $this->participate_name = $participateName;
    }

    public function getParticipateType() : int{
        return $this->participate_type;
    }

    public function setParticipateType(int $participateType){
        $this->participate_type = $participateType;
    }


}

