<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateCouponTemplateParticipateConfig {

    /**
        参与者列表
     **/
    public $participate_list;


    public function getParticipateList() : array{
        return $this->participate_list;
    }

    public function setParticipateList(array $participateList){
        $this->participate_list = $participateList;
    }


}

