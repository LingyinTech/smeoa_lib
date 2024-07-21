<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemQuantityUpdateRequest {

    /**
        商品数字ID，必填参数
     **/
    private $numIid;

    /**
        要操作的SKU的数字ID，可选。如果不填默认修改宝贝的库存，如果填上则修改该SKU的库存
     **/
    private $skuId;

    /**
        SKU的商家编码，可选参数。如果不填则默认修改宝贝的库存，如果填了则按照商家编码搜索出对应的SKU并修改库存。当sku_id和本字段都填写时以sku_id为准搜索对应SKU
     **/
    private $outerId;

    /**
        库存修改值，必选。当全量更新库存时，quantity必须为大于等于0的正整数；当增量更新库存时，quantity为整数，可小于等于0。若增量更新时传入的库存为负数，则负数与实际库存之和不能小于0。比如当前实际库存为1，传入增量更新quantity=-1，库存改为0
     **/
    private $quantity;

    /**
        库存更新方式，可选。1为全量更新，2为增量更新。如果不填，默认为全量更新
     **/
    private $type;


    public function getNumIid() : int{
        return $this->numIid;
    }

    public function setNumIid(int $numIid){
        $this->numIid = $numIid;
    }

    public function getSkuId() : int{
        return $this->skuId;
    }

    public function setSkuId(int $skuId){
        $this->skuId = $skuId;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "taobao.item.quantity.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->skuId)) {
            $requestParam["sku_id"] = TopUtil::convertBasic($this->skuId);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->quantity)) {
            $requestParam["quantity"] = TopUtil::convertBasic($this->quantity);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

