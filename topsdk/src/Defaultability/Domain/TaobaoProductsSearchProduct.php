<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoProductsSearchProduct {

    /**
        产品ID
     **/
    public $product_id;

    /**
        产品名称
     **/
    public $name;

    /**
        产品的主图片地址.(绝对地址,格式:http://host/image_path)
     **/
    public $pic_url;

    /**
        商品类目ID.必须是叶子类目ID
     **/
    public $cid;

    /**
        产品的关键属性列表.格式：pid:vid;pid:vid
     **/
    public $props;

    /**
        产品的市场价.单位为元.精确到2位小数;如:200.07
     **/
    public $price;

    /**
        淘宝标准产品编码
     **/
    public $tsc;

    /**
        当前状态(0 商家确认 1 屏蔽 3 小二确认 2 未确认 -1 删除)
     **/
    public $status;


    public function getProductId() : int{
        return $this->product_id;
    }

    public function setProductId(int $productId){
        $this->product_id = $productId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getTsc() : string{
        return $this->tsc;
    }

    public function setTsc(string $tsc){
        $this->tsc = $tsc;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

