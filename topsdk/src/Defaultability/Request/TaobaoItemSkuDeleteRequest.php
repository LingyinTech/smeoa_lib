<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemSkuDeleteRequest {

    /**
        Sku所属商品数字id，可通过 taobao.item.get 获取。必选
     **/
    private $numIid;

    /**
        Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充
     **/
    private $properties;

    /**
        Sku文字的版本。可选值:zh_HK(繁体),zh_CN(简体);默认值:zh_CN
     **/
    private $lang;

    /**
        sku所属商品的价格。当用户删除sku，使商品价格不属于sku价格之间的时候，用于修改商品的价格，使sku能够删除成功
     **/
    private $itemPrice;

    /**
        sku所属商品的数量,大于0的整数。当用户删除sku，使商品数量不等于sku数量之和时候，用于修改商品的数量，使sku能够删除成功。特别是删除最后一个sku的时候，一定要设置商品数量到正常的值，否则删除失败
     **/
    private $itemNum;

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

    public function getItemNum() : int{
        return $this->itemNum;
    }

    public function setItemNum(int $itemNum){
        $this->itemNum = $itemNum;
    }

    public function getIgnorewarning() : string{
        return $this->ignorewarning;
    }

    public function setIgnorewarning(string $ignorewarning){
        $this->ignorewarning = $ignorewarning;
    }


    public function getApiName() : string {
        return "taobao.item.sku.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->properties)) {
            $requestParam["properties"] = TopUtil::convertBasic($this->properties);
        }

        if (!TopUtil::checkEmpty($this->lang)) {
            $requestParam["lang"] = TopUtil::convertBasic($this->lang);
        }

        if (!TopUtil::checkEmpty($this->itemPrice)) {
            $requestParam["item_price"] = TopUtil::convertBasic($this->itemPrice);
        }

        if (!TopUtil::checkEmpty($this->itemNum)) {
            $requestParam["item_num"] = TopUtil::convertBasic($this->itemNum);
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

