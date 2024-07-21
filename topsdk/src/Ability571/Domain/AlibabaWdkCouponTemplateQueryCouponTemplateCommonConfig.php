<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateQueryCouponTemplateCommonConfig {

    /**
        申请渠道
     **/
    public $apply_channels;

    /**
        优惠券活动描述
     **/
    public $description;

    /**
        优惠券发放方式
     **/
    public $send_type;

    /**
        模板状态
     **/
    public $status;

    /**
        优惠券名称
     **/
    public $title;

    /**
        优惠券类型
     **/
    public $type;


    public function getApplyChannels() : array{
        return $this->apply_channels;
    }

    public function setApplyChannels(array $applyChannels){
        $this->apply_channels = $applyChannels;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getSendType() : string{
        return $this->send_type;
    }

    public function setSendType(string $sendType){
        $this->send_type = $sendType;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

