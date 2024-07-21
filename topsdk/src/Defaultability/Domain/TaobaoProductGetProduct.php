<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoProductGetProduct {

    /**
        产品ID
     **/
    public $product_id;

    /**
        外部产品ID
     **/
    public $outer_id;

    /**
        淘宝标准产品编码
     **/
    public $tsc;

    /**
        商品类目ID.必须是叶子类目ID
     **/
    public $cid;

    /**
        商品类目名称
     **/
    public $cat_name;

    /**
        产品的关键属性列表.格式：pid:vid;pid:vid
     **/
    public $props;

    /**
        产品的关键属性字符串列表.比如:品牌:诺基亚;型号:N73(<strong>注：</strong><font color="red">属性名称中的冒号":"被转换为："#cln#";  
分号";"被转换为："#scln#"
</font>)
     **/
    public $props_str;

    /**
        产品名称
     **/
    public $name;

    /**
        产品的非关键属性列表.格式:pid:vid;pid:vid.
     **/
    public $binds;

    /**
        产品的非关键属性字符串列表.格式同props_str(<strong>注：</strong><font color="red">属性名称中的冒号":"被转换为："#cln#";  
分号";"被转换为："#scln#"
</font>)
     **/
    public $binds_str;

    /**
        产品的销售属性列表.格式:pid:vid;pid:vid
     **/
    public $sale_props;

    /**
        产品的销售属性字符串列表.格式同props_str(<strong>注：</strong><font color="red">属性名称中的冒号":"被转换为："#cln#";  
分号";"被转换为："#scln#"
</font>)
     **/
    public $sale_props_str;

    /**
        产品的市场价.单位为元.精确到2位小数;如:200.07
     **/
    public $price;

    /**
        产品的描述.最大25000个字节
     **/
    public $desc;

    /**
        产品的主图片地址.(绝对地址,格式:http://host/image_path)
     **/
    public $pic_url;

    /**
        创建时间.格式:yyyy-mm-dd hh:mm:ss
     **/
    public $created;

    /**
        修改时间.格式:yyyy-mm-dd hh:mm:ss
     **/
    public $modified;

    /**
        当前状态(0 商家确认 1 屏蔽 3 小二确认 2 未确认 -1 删除)
     **/
    public $status;

    /**
        垂直市场,如：3（3C），4（鞋城）
     **/
    public $vertical_market;

    /**
        销售属性值别名。格式为pid1:vid1:alias1;pid1:vid2:alia2。
     **/
    public $property_alias;

    /**
        用户自定义属性,结构：pid1:value1;pid2:value2 例如：“20000:优衣库”，表示“品牌:优衣库”
     **/
    public $customer_props;

    /**
        产品卖点描述，长度限制20个汉字
     **/
    public $sell_pt;

    /**
        产品的子图片.目前最多支持4张。fields中设置为product_imgs.id、product_imgs.url、product_imgs.position 等形式就会返回相应的字段
     **/
    public $product_imgs;

    /**
        产品的属性图片.比如说黄色对应的产品图片,绿色对应的产品图片。fields中设置为product_prop_imgs.id、 
product_prop_imgs.props、product_prop_imgs.url、product_prop_imgs.position等形式就会返回相应的字段
     **/
    public $product_prop_imgs;


    public function getProductId() : int{
        return $this->product_id;
    }

    public function setProductId(int $productId){
        $this->product_id = $productId;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getTsc() : string{
        return $this->tsc;
    }

    public function setTsc(string $tsc){
        $this->tsc = $tsc;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getCatName() : string{
        return $this->cat_name;
    }

    public function setCatName(string $catName){
        $this->cat_name = $catName;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getPropsStr() : string{
        return $this->props_str;
    }

    public function setPropsStr(string $propsStr){
        $this->props_str = $propsStr;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getBinds() : string{
        return $this->binds;
    }

    public function setBinds(string $binds){
        $this->binds = $binds;
    }

    public function getBindsStr() : string{
        return $this->binds_str;
    }

    public function setBindsStr(string $bindsStr){
        $this->binds_str = $bindsStr;
    }

    public function getSaleProps() : string{
        return $this->sale_props;
    }

    public function setSaleProps(string $saleProps){
        $this->sale_props = $saleProps;
    }

    public function getSalePropsStr() : string{
        return $this->sale_props_str;
    }

    public function setSalePropsStr(string $salePropsStr){
        $this->sale_props_str = $salePropsStr;
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

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getVerticalMarket() : int{
        return $this->vertical_market;
    }

    public function setVerticalMarket(int $verticalMarket){
        $this->vertical_market = $verticalMarket;
    }

    public function getPropertyAlias() : string{
        return $this->property_alias;
    }

    public function setPropertyAlias(string $propertyAlias){
        $this->property_alias = $propertyAlias;
    }

    public function getCustomerProps() : string{
        return $this->customer_props;
    }

    public function setCustomerProps(string $customerProps){
        $this->customer_props = $customerProps;
    }

    public function getSellPt() : string{
        return $this->sell_pt;
    }

    public function setSellPt(string $sellPt){
        $this->sell_pt = $sellPt;
    }

    public function getProductImgs() : array{
        return $this->product_imgs;
    }

    public function setProductImgs(array $productImgs){
        $this->product_imgs = $productImgs;
    }

    public function getProductPropImgs() : array{
        return $this->product_prop_imgs;
    }

    public function setProductPropImgs(array $productPropImgs){
        $this->product_prop_imgs = $productPropImgs;
    }


}

