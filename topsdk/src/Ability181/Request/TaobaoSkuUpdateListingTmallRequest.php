<?php
namespace Topsdk\Topapi\Ability181\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSkuUpdateListingTmallRequest {

    /**
        商品ID，必填
     **/
    private $itemId;

    /**
        skuId和sku状态的映射，其中状态1代表上架，-2代表下架，必填
     **/
    private $skuMap;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getSkuMap() : array{
        return $this->skuMap;
    }

    public function setSkuMap(array $skuMap){
        $this->skuMap = $skuMap;
    }


    public function getApiName() : string {
        return "taobao.sku.update.listing.tmall";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->skuMap)) {
            $requestParam["sku_map"] = TopUtil::convertStruct($this->skuMap);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

