<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponTemplateCreateCouponTemplateCommonConfig {

    /**
        申请渠道 anonymousOffline
     **/
    public $apply_channels;

    /**
        优惠券活动描述
     **/
    public $description;

    /**
        模板状态 NORMAL(1, "有效"), DELETE(-1, "删除"), ENDING(0, "结束领取"), NOUSE(-2, "无效"), WDK_COUPON_DRAFT(-999, "草稿"),
     **/
    public $status;

    /**
        优惠券名称
     **/
    public $title;

    /**
        优惠券类型 UNIT_PRICE(10,"unitPrice","单品定价券"), FULL_AMOUNT_REDUCE(11, "fullAmountReduce", "满元减券"), FULL_AMOUNT_DISCOUNT(12, "fullAmountDiscount", "满元折券"), FULL_COUNT_REDUCE(13, "fullCountReduce", "满件减券"), FULL_COUNT_DISCOUNT(14, "fullCountDiscount", "满件折券"), VOUCHER(15, "voucher", "抵用券"),
     **/
    public $type;

    /**
        优惠券发放方式 ANONYMOUS("anonymous","匿名券"), REGISTERED("registered","记名券"),
     **/
    public $send_type;


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

    public function getSendType() : string{
        return $this->send_type;
    }

    public function setSendType(string $sendType){
        $this->send_type = $sendType;
    }


}

