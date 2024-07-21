<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateTerminateCouponTemplateTerminateRequest {

    /**
        ump模板ID
     **/
    public $source_id;

    /**
        用户信息
     **/
    public $user_info;


    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }

    public function getUserInfo() : AlibabaWdkCouponTemplateTerminateUserInfo{
        return $this->user_info;
    }

    public function setUserInfo(AlibabaWdkCouponTemplateTerminateUserInfo $userInfo){
        $this->user_info = $userInfo;
    }


}

