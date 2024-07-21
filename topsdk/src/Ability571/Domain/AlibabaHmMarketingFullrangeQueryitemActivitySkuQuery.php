<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingFullrangeQueryitemActivitySkuQuery {

    /**
        分页参数
     **/
    public $page;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        查询指定的skucode
     **/
    public $sku_codes;

    /**
        报名活动Id
     **/
    public $activity_id;


    public function getPage() : AlibabaHmMarketingFullrangeQueryitemBasePageQuery{
        return $this->page;
    }

    public function setPage(AlibabaHmMarketingFullrangeQueryitemBasePageQuery $page){
        $this->page = $page;
    }

    public function getOutActId() : string{
        return $this->out_act_id;
    }

    public function setOutActId(string $outActId){
        $this->out_act_id = $outActId;
    }

    public function getSkuCodes() : array{
        return $this->sku_codes;
    }

    public function setSkuCodes(array $skuCodes){
        $this->sku_codes = $skuCodes;
    }

    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }


}

