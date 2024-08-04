<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoLogisticsTraceSearchTransitStepInfo {

    /**
        状态发生的时间
     **/
    public $status_time;

    /**
        状态描述
     **/
    public $status_desc;

    /**
        节点说明 ，指明当前节点揽收、派送，签收。
     **/
    public $action;


    public function getStatusTime() : string{
        return $this->status_time;
    }

    public function setStatusTime(string $statusTime){
        $this->status_time = $statusTime;
    }

    public function getStatusDesc() : string{
        return $this->status_desc;
    }

    public function setStatusDesc(string $statusDesc){
        $this->status_desc = $statusDesc;
    }

    public function getAction() : string{
        return $this->action;
    }

    public function setAction(string $action){
        $this->action = $action;
    }


}

