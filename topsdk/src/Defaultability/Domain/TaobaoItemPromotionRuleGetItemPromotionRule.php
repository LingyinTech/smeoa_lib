<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemPromotionRuleGetItemPromotionRule {

    /**
        规则名称
     **/
    public $name;

    /**
        规则描叙信息
     **/
    public $message;

    /**
        规则生效开始时间
     **/
    public $start_time;

    /**
        规则生效结束时间
     **/
    public $end_time;

    /**
        规则类型，常见有SKU锁定规则,下架锁定规则,库存减少锁定规则,库存禁止修改规则,一口价禁止修改规则
     **/
    public $type;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }


}

