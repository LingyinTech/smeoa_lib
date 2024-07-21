<?php
namespace Topsdk\Topapi\Ability213\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemCombineGetRequest {

    /**
        组合商品ID
     **/
    private $itemId;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }


    public function getApiName() : string {
        return "tmall.item.combine.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

