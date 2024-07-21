<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemSkuPriceUpdateRequest {

    /**
        Sku所属商品数字id，可通过 taobao.item.get 获取
     **/
    private $numIid;

    /**
        Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充
     **/
    private $properties;

    /**
        Sku的库存数量。sku的总数量应该小于等于商品总数量(Item的NUM)，sku数量变化后item的总数量也会随着变化。取值范围:大于等于零的整数
     **/
    private $quantity;

    /**
        Sku的销售价格。精确到2位小数;单位:元。如:200.07，表示:200元7分。修改后的sku价格要保证商品的价格在所有sku价格所形成的价格区间内（例如：商品价格为6元，sku价格有5元、10元两种，如果要修改5元sku的价格，那么修改的范围只能是0-6元之间；如果要修改10元的sku，那么修改的范围只能是6到无穷大的区间中）
     **/
    private $price;

    /**
        Sku的商家外部id
     **/
    private $outerId;

    /**
        Sku文字的版本。可选值:zh_HK(繁体),zh_CN(简体);默认值:zh_CN
     **/
    private $lang;

    /**
        sku所属商品的价格。当用户更新sku，使商品价格不属于sku价格之间的时候，用于修改商品的价格，使sku能够更新成功
     **/
    private $itemPrice;

    /**
        忽略警告提示.
     **/
    private $ignorewarning;


    public function getNumIid() : int{
        return $this->numIid;
    }

    public function setNumIid(int $numIid){
        $this->numIid = $numIid;
    }

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getLang() : string{
        return $this->lang;
    }

    public function setLang(string $lang){
        $this->lang = $lang;
    }

    public function getItemPrice() : string{
        return $this->itemPrice;
    }

    public function setItemPrice(string $itemPrice){
        $this->itemPrice = $itemPrice;
    }

    public function getIgnorewarning() : string{
        return $this->ignorewarning;
    }

    public function setIgnorewarning(string $ignorewarning){
        $this->ignorewarning = $ignorewarning;
    }


    public function getApiName() : string {
        return "taobao.item.sku.price.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->properties)) {
            $requestParam["properties"] = TopUtil::convertBasic($this->properties);
        }

        if (!TopUtil::checkEmpty($this->quantity)) {
            $requestParam["quantity"] = TopUtil::convertBasic($this->quantity);
        }

        if (!TopUtil::checkEmpty($this->price)) {
            $requestParam["price"] = TopUtil::convertBasic($this->price);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->lang)) {
            $requestParam["lang"] = TopUtil::convertBasic($this->lang);
        }

        if (!TopUtil::checkEmpty($this->itemPrice)) {
            $requestParam["item_price"] = TopUtil::convertBasic($this->itemPrice);
        }

        if (!TopUtil::checkEmpty($this->ignorewarning)) {
            $requestParam["ignorewarning"] = TopUtil::convertBasic($this->ignorewarning);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

