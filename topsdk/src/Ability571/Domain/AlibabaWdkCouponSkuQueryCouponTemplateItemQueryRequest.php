<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuQueryCouponTemplateItemQueryRequest {

    /**
        模板表主键id
     **/
    public $id;

    /**
        分页信息
     **/
    public $page_info;

    /**
        ump模板ID
     **/
    public $source_id;

    /**
        用户信息
     **/
    public $user_info;

    /**
        分组序号
     **/
    public $logic_group_number;

    /**
        五道口分组id
     **/
    public $wdk_group_id;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPageInfo() : AlibabaWdkCouponSkuQueryPageInfo{
        return $this->page_info;
    }

    public function setPageInfo(AlibabaWdkCouponSkuQueryPageInfo $pageInfo){
        $this->page_info = $pageInfo;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }

    public function getUserInfo() : AlibabaWdkCouponSkuQueryUserInfo{
        return $this->user_info;
    }

    public function setUserInfo(AlibabaWdkCouponSkuQueryUserInfo $userInfo){
        $this->user_info = $userInfo;
    }

    public function getLogicGroupNumber() : int{
        return $this->logic_group_number;
    }

    public function setLogicGroupNumber(int $logicGroupNumber){
        $this->logic_group_number = $logicGroupNumber;
    }

    public function getWdkGroupId() : int{
        return $this->wdk_group_id;
    }

    public function setWdkGroupId(int $wdkGroupId){
        $this->wdk_group_id = $wdkGroupId;
    }


}

