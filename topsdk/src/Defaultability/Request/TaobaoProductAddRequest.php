<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoProductAddRequest {

    /**
        商品类目ID.调用taobao.itemcats.get获取;注意:必须是叶子类目 id.
     **/
    private $cid;

    /**
        产品名称,最大30个字符.
     **/
    private $name;

    /**
        产品市场价.精确到2位小数;单位为元.如：200.07
     **/
    private $price;

    /**
        产品主图片.最大1M,目前仅支持GIF,JPG.
     **/
    private $image;

    /**
        外部产品ID
     **/
    private $outerId;

    /**
        关键属性 结构:pid:vid;pid:vid.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;如果碰到用户自定义属性,请用customer_props.
     **/
    private $props;

    /**
        非关键属性结构:pid:vid;pid:vid.<br>
非关键属性<font color=red>不包含</font>关键属性、销售属性、用户自定义属性、商品属性;
<br>调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid.<br><font color=red>注:支持最大长度为512字节</font>
     **/
    private $binds;

    /**
        销售属性结构:pid:vid;pid:vid.调用taobao.itemprops.get获取is_sale_prop＝true的pid,调用taobao.itempropvalues.get获取vid.
     **/
    private $saleProps;

    /**
        用户自定义属性,结构：pid1:value1;pid2:value2，如果有型号，系列等子属性用: 隔开 例如：“20000:优衣库:型号:001;632501:1234”，表示“品牌:优衣库:型号:001;货号:1234”
<br><font color=red>注：包含所有自定义属性的传入</font>
     **/
    private $customerProps;

    /**
        产品描述.最大不超过25000个字符
     **/
    private $desc;

    /**
        是不是主图
     **/
    private $major;

    /**
        native_unkeyprops
     **/
    private $nativeUnkeyprops;

    /**
        加入垂直市场，目前只支持以鞋城卖家身份加入名鞋馆(暂时此字段还不起作用，不对外开放)
     **/
    private $verticalMarket;

    /**
        上市时间。目前只支持鞋城类目传入此参数
     **/
    private $marketTime;

    /**
        销售属性值别名。格式为pid1:vid1:alias1;pid1:vid2:alia2。只有少数销售属性值支持传入别名，比如颜色和尺寸
     **/
    private $propertyAlias;


    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
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

    public function getImage() : string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image = $image;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
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

    public function getCustomerProps() : string{
        return $this->customerProps;
    }

    public function setCustomerProps(string $customerProps){
        $this->customerProps = $customerProps;
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

    public function getVerticalMarket() : int{
        return $this->verticalMarket;
    }

    public function setVerticalMarket(int $verticalMarket){
        $this->verticalMarket = $verticalMarket;
    }

    public function getMarketTime() : string{
        return $this->marketTime;
    }

    public function setMarketTime(string $marketTime){
        $this->marketTime = $marketTime;
    }

    public function getPropertyAlias() : string{
        return $this->propertyAlias;
    }

    public function setPropertyAlias(string $propertyAlias){
        $this->propertyAlias = $propertyAlias;
    }


    public function getApiName() : string {
        return "taobao.product.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->price)) {
            $requestParam["price"] = TopUtil::convertBasic($this->price);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->props)) {
            $requestParam["props"] = TopUtil::convertBasic($this->props);
        }

        if (!TopUtil::checkEmpty($this->binds)) {
            $requestParam["binds"] = TopUtil::convertBasic($this->binds);
        }

        if (!TopUtil::checkEmpty($this->saleProps)) {
            $requestParam["sale_props"] = TopUtil::convertBasic($this->saleProps);
        }

        if (!TopUtil::checkEmpty($this->customerProps)) {
            $requestParam["customer_props"] = TopUtil::convertBasic($this->customerProps);
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

        if (!TopUtil::checkEmpty($this->verticalMarket)) {
            $requestParam["vertical_market"] = TopUtil::convertBasic($this->verticalMarket);
        }

        if (!TopUtil::checkEmpty($this->marketTime)) {
            $requestParam["market_time"] = TopUtil::convertBasic($this->marketTime);
        }

        if (!TopUtil::checkEmpty($this->propertyAlias)) {
            $requestParam["property_alias"] = TopUtil::convertBasic($this->propertyAlias);
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

