<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoProductUpdateRequest {

    /**
        产品ID
     **/
    private $productId;

    /**
        外部产品ID
     **/
    private $outerId;

    /**
        非关键属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
     **/
    private $binds;

    /**
        销售属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
     **/
    private $saleProps;

    /**
        产品名称.最大不超过30个字符
     **/
    private $name;

    /**
        产品市场价.精确到2位小数;单位为元.如:200.07
     **/
    private $price;

    /**
        产品描述.最大不超过25000个字符
     **/
    private $desc;

    /**
        是否是主图
     **/
    private $major;

    /**
        自定义非关键属性
     **/
    private $nativeUnkeyprops;

    /**
        产品主图.最大500K,目前仅支持GIF,JPG
     **/
    private $image;


    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getBinds() : string{
        return $this->binds;
    }

    public function setBinds(string $binds){
        $this->binds = $binds;
    }

    public function getSaleProps() : string{
        return $this->saleProps;
    }

    public function setSaleProps(string $saleProps){
        $this->saleProps = $saleProps;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getMajor() : bool{
        return $this->major;
    }

    public function setMajor(bool $major){
        $this->major = $major;
    }

    public function getNativeUnkeyprops() : string{
        return $this->nativeUnkeyprops;
    }

    public function setNativeUnkeyprops(string $nativeUnkeyprops){
        $this->nativeUnkeyprops = $nativeUnkeyprops;
    }

    public function getImage() : string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image = $image;
    }


    public function getApiName() : string {
        return "taobao.product.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->binds)) {
            $requestParam["binds"] = TopUtil::convertBasic($this->binds);
        }

        if (!TopUtil::checkEmpty($this->saleProps)) {
            $requestParam["sale_props"] = TopUtil::convertBasic($this->saleProps);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->price)) {
            $requestParam["price"] = TopUtil::convertBasic($this->price);
        }

        if (!TopUtil::checkEmpty($this->desc)) {
            $requestParam["desc"] = TopUtil::convertBasic($this->desc);
        }

        if (!TopUtil::checkEmpty($this->major)) {
            $requestParam["major"] = TopUtil::convertBasic($this->major);
        }

        if (!TopUtil::checkEmpty($this->nativeUnkeyprops)) {
            $requestParam["native_unkeyprops"] = TopUtil::convertBasic($this->nativeUnkeyprops);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->image)){
            $fileParam["image"] = TopUtil::convertBasic($this->image);
        }
        return $fileParam;
    }

}

