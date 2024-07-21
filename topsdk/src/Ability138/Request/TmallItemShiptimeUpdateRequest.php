<?php
namespace Topsdk\Topapi\Ability138\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability138\Domain\TmallItemShiptimeUpdateUpdateItemShipTimeOption;

class TmallItemShiptimeUpdateRequest {

    /**
        商品ID
     **/
    private $itemId;

    /**
        被更新发货时间（商品级）；格式和具体设置的发货时间格式相关。绝对发货时间填写yyyy-MM-dd;相对发货时间填写数字。发货时间必须在当前时间后三天。如果设置的绝对时间小于当前时间的三天后，会清除该商品的发货时间设置。如果是相对时间小于3，则会提示出错。如果shiptimeType为0，要清除商品上的发货时间，该字段可以填任意字符,也可以不填。
     **/
    private $shipTime;

    /**
        被更新SKU的发货时间，后台会根据三个子属性去查找匹配的sku，如果找到就默认对sku进行更新，当无匹配sku且更新类型针对sku，会报错。
     **/
    private $skuShipTimes;

    /**
        批量更新商品/SKU发货时间的备选项
     **/
    private $option;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getShipTime() : string{
        return $this->shipTime;
    }

    public function setShipTime(string $shipTime){
        $this->shipTime = $shipTime;
    }

    public function getSkuShipTimes() : array{
        return $this->skuShipTimes;
    }

    public function setSkuShipTimes(array $skuShipTimes){
        $this->skuShipTimes = $skuShipTimes;
    }

    public function getOption() : TmallItemShiptimeUpdateUpdateItemShipTimeOption{
        return $this->option;
    }

    public function setOption(TmallItemShiptimeUpdateUpdateItemShipTimeOption $option){
        $this->option = $option;
    }


    public function getApiName() : string {
        return "tmall.item.shiptime.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->shipTime)) {
            $requestParam["ship_time"] = TopUtil::convertBasic($this->shipTime);
        }

        if (!TopUtil::checkEmpty($this->skuShipTimes)) {
            $requestParam["sku_ship_times"] = TopUtil::convertStructList($this->skuShipTimes);
        }

        if (!TopUtil::checkEmpty($this->option)) {
            $requestParam["option"] = TopUtil::convertStruct($this->option);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

