<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemOuteridUpdateRequest {

    /**
        商品ID
     **/
    private $itemId;

    /**
        商品维度商家编码，如果不修改可以不传；清空请设置空串
     **/
    private $outerId;

    /**
        商品SKU更新OuterId时候用的数据
     **/
    private $skuOuters;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getSkuOuters() : array{
        return $this->skuOuters;
    }

    public function setSkuOuters(array $skuOuters){
        $this->skuOuters = $skuOuters;
    }


    public function getApiName() : string {
        return "tmall.item.outerid.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->skuOuters)) {
            $requestParam["sku_outers"] = TopUtil::convertStructList($this->skuOuters);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

