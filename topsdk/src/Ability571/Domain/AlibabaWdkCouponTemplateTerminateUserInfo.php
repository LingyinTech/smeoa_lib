<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateTerminateUserInfo {

    /**
        来源
     **/
    public $source;

    /**
        用户id
     **/
    public $user_id;

    /**
        用户名
     **/
    public $user_name;


    public function getSource() : string{
        return $this->source;
    }

    public function setSource(string $source){
        $this->source = $source;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getUserName() : string{
        return $this->user_name;
    }

    public function setUserName(string $userName){
        $this->user_name = $userName;
    }


}

