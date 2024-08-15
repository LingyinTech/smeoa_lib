<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradeOrderskuUpdateRequest {

    /**
        子订单编号（对于单笔订单的交易可以传交易编号）。
     **/
    private $oid;

    /**
        销售属性编号，可以通过taobao.item.skus.get获取订单对应的商品的所有销售属性。
     **/
    private $skuId;

    /**
        销售属性组合串，格式：p1:v1;p2:v2，如：1627207:28329;20509:28314。可以通过taobao.item.skus.get获取订单对应的商品的所有销售属性。
     **/
    private $skuProps;


    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getSkuId() : int{
        return $this->skuId;
    }

    public function setSkuId(int $skuId){
        $this->skuId = $skuId;
    }

    public function getSkuProps() : string{
        return $this->skuProps;
    }

    public function setSkuProps(string $skuProps){
        $this->skuProps = $skuProps;
    }


    public function getApiName() : string {
        return "taobao.trade.ordersku.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->oid)) {
            $requestParam["oid"] = TopUtil::convertBasic($this->oid);
        }

        if (!TopUtil::checkEmpty($this->skuId)) {
            $requestParam["sku_id"] = TopUtil::convertBasic($this->skuId);
        }

        if (!TopUtil::checkEmpty($this->skuProps)) {
            $requestParam["sku_props"] = TopUtil::convertBasic($this->skuProps);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

