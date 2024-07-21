<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemBarcodeUpdateRequest {

    /**
        被更新商品的ID
     **/
    private $itemId;

    /**
        商品条形码，如果不用更新，可选择不填
     **/
    private $itemBarcode;

    /**
        被更新SKU的ID列表，中间以英文逗号进行分隔。如果没有SKU或者不需要更新SKU的条形码，不需要设置
     **/
    private $skuIds;

    /**
        SKU维度的条形码，和sku_ids字段一一对应，中间以英文逗号分隔
     **/
    private $skuBarcodes;

    /**
        是否强制保存商品条码。true：强制保存false ：需要执行条码库校验
     **/
    private $isforce;

    /**
        访问来源，这字段提供给千牛扫码枪用，其他调用方，不需要填写
     **/
    private $src;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getItemBarcode() : string{
        return $this->itemBarcode;
    }

    public function setItemBarcode(string $itemBarcode){
        $this->itemBarcode = $itemBarcode;
    }

    public function getSkuIds() : string{
        return $this->skuIds;
    }

    public function setSkuIds(string $skuIds){
        $this->skuIds = $skuIds;
    }

    public function getSkuBarcodes() : string{
        return $this->skuBarcodes;
    }

    public function setSkuBarcodes(string $skuBarcodes){
        $this->skuBarcodes = $skuBarcodes;
    }

    public function getIsforce() : bool{
        return $this->isforce;
    }

    public function setIsforce(bool $isforce){
        $this->isforce = $isforce;
    }

    public function getSrc() : string{
        return $this->src;
    }

    public function setSrc(string $src){
        $this->src = $src;
    }


    public function getApiName() : string {
        return "taobao.item.barcode.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->itemBarcode)) {
            $requestParam["item_barcode"] = TopUtil::convertBasic($this->itemBarcode);
        }

        if (!TopUtil::checkEmpty($this->skuIds)) {
            $requestParam["sku_ids"] = TopUtil::convertBasic($this->skuIds);
        }

        if (!TopUtil::checkEmpty($this->skuBarcodes)) {
            $requestParam["sku_barcodes"] = TopUtil::convertBasic($this->skuBarcodes);
        }

        if (!TopUtil::checkEmpty($this->isforce)) {
            $requestParam["isforce"] = TopUtil::convertBasic($this->isforce);
        }

        if (!TopUtil::checkEmpty($this->src)) {
            $requestParam["src"] = TopUtil::convertBasic($this->src);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

