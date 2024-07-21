<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuRemoveCouponTemplateItemRequest {

    /**
        模板表主键id
     **/
    public $id;

    /**
        券圈品设置
     **/
    public $prom_act_sku_list;

    /**
        ump模板ID
     **/
    public $source_id;

    /**
        用户信息
     **/
    public $user_info;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPromActSkuList() : array{
        return $this->prom_act_sku_list;
    }

    public function setPromActSkuList(array $promActSkuList){
        $this->prom_act_sku_list = $promActSkuList;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }

    public function getUserInfo() : AlibabaWdkCouponSkuRemoveUserInfo{
        return $this->user_info;
    }

    public function setUserInfo(AlibabaWdkCouponSkuRemoveUserInfo $userInfo){
        $this->user_info = $userInfo;
    }


}

