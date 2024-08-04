<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetCombineConsignInfo {

    /**
        套餐组合id
     **/
    public $comb_id;

    /**
        套餐内的商品id
     **/
    public $item_id;

    /**
        套餐内商品的skuId
     **/
    public $sku_id;

    /**
        成分品的预计发货时间
     **/
    public $consign_time;

    /**
        成分品的预计发货时间
     **/
    public $render_consign_time;


    public function getCombId() : string{
        return $this->comb_id;
    }

    public function setCombId(string $combId){
        $this->comb_id = $combId;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
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


}

