<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryCouponTemplateQueryRequest {

    /**
        模板表ID
     **/
    public $id;

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

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }

    public function getUserInfo() : AlibabaWdkCouponTemplateQueryUserInfo{
        return $this->user_info;
    }

    public function setUserInfo(AlibabaWdkCouponTemplateQueryUserInfo $userInfo){
        $this->user_info = $userInfo;
    }


}

