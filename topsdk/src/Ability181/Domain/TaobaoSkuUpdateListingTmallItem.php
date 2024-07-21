<?php
namespace Topsdk\Topapi\Ability181\Domain;

class TaobaoSkuUpdateListingTmallItem {

    /**
        商品ID
     **/
    public $item_id;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }


}

