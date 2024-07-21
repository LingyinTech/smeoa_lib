<?php
namespace Topsdk\Topapi\Ability138\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability138\Domain\TmallItemQuantityUpdateUpdateItemQuantityOption;

class TmallItemQuantityUpdateRequest {

    /**
        商品id
     **/
    private $itemId;

    /**
        商品库存数；增量编辑方式支持正数、负数。（无SKU商品使用这个字段）
     **/
    private $itemQuantity;

    /**
        更新SKU库存时候的SKU库存对象；如果没有SKU或者不更新SKU库存，可以不填;查找SKU目前支持ID，属性串和商家编码三种模式，建议选用一种最合适的，切勿滥用，一次调用中如果混合使用，更新结果不可预期！
     **/
    private $skuQuantities;

    /**
        商品库存更新时候的可选参数
     **/
    private $options;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getItemQuantity() : int{
        return $this->itemQuantity;
    }

    public function setItemQuantity(int $itemQuantity){
        $this->itemQuantity = $itemQuantity;
    }

    public function getSkuQuantities() : array{
        return $this->skuQuantities;
    }

    public function setSkuQuantities(array $skuQuantities){
        $this->skuQuantities = $skuQuantities;
    }

    public function getOptions() : TmallItemQuantityUpdateUpdateItemQuantityOption{
        return $this->options;
    }

    public function setOptions(TmallItemQuantityUpdateUpdateItemQuantityOption $options){
        $this->options = $options;
    }


    public function getApiName() : string {
        return "tmall.item.quantity.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->itemQuantity)) {
            $requestParam["item_quantity"] = TopUtil::convertBasic($this->itemQuantity);
        }

        if (!TopUtil::checkEmpty($this->skuQuantities)) {
            $requestParam["sku_quantities"] = TopUtil::convertStructList($this->skuQuantities);
        }

        if (!TopUtil::checkEmpty($this->options)) {
            $requestParam["options"] = TopUtil::convertStruct($this->options);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

