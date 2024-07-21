<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItemdiscountQueryitemsActivitySkuQuery {

    /**
        五道口活动id
     **/
    public $activity_id;

    /**
        分页参数
     **/
    public $page;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        需要查询的商品skuCodes
     **/
    public $sku_codes;

    /**
        是否自定义渠道同步
     **/
    public $by_channel;

    /**
        自定义同步的渠道配置
     **/
    public $channel_config_list;


    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }

    public function getPage() : AlibabaHmMarketingItemdiscountQueryitemsBasePageQuery{
        return $this->page;
    }

    public function setPage(AlibabaHmMarketingItemdiscountQueryitemsBasePageQuery $page){
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

    public function getByChannel() : bool{
        return $this->by_channel;
    }

    public function setByChannel(bool $byChannel){
        $this->by_channel = $byChannel;
    }

    public function getChannelConfigList() : array{
        return $this->channel_config_list;
    }

    public function setChannelConfigList(array $channelConfigList){
        $this->channel_config_list = $channelConfigList;
    }


}

