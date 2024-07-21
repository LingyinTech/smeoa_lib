<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryumpactidCouponRelatedResponse {

    /**
        活动id
     **/
    public $ump_activity_id;

    /**
        券模版id
     **/
    public $source_id;


    public function getUmpActivityId() : int{
        return $this->ump_activity_id;
    }

    public function setUmpActivityId(int $umpActivityId){
        $this->ump_activity_id = $umpActivityId;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }


}

