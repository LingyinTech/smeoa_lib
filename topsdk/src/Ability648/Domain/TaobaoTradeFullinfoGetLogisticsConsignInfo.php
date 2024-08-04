<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetLogisticsConsignInfo {

    /**
        时效关联的订单好
     **/
    public $related_id;

    /**
        商家的预计发货时间
     **/
    public $consign_time;

    /**
        商家的预计发货时间
     **/
    public $render_consign_time;

    /**
        成分品发货时效
     **/
    public $combine_item;


    public function getRelatedId() : string{
        return $this->related_id;
    }

    public function setRelatedId(string $relatedId){
        $this->related_id = $relatedId;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getRenderConsignTime() : string{
        return $this->render_consign_time;
    }

    public function setRenderConsignTime(string $renderConsignTime){
        $this->render_consign_time = $renderConsignTime;
    }

    public function getCombineItem() : array{
        return $this->combine_item;
    }

    public function setCombineItem(array $combineItem){
        $this->combine_item = $combineItem;
    }


}

