<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoProductGetProductPropImg {

    /**
        产品属性图片ID
     **/
    public $id;

    /**
        图片所属产品的ID
     **/
    public $product_id;

    /**
        属性串(pid:vid),目前只有颜色属性.如:颜色:红色表示为　1627207:28326
     **/
    public $props;

    /**
        图片地址.(绝对地址,格式:http://host/image_path)
     **/
    public $url;

    /**
        图片序号。产品里的图片展示顺序，数据越小越靠前。要求是正整数。
     **/
    public $position;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getProductId() : int{
        return $this->product_id;
    }

    public function setProductId(int $productId){
        $this->product_id = $productId;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getPosition() : int{
        return $this->position;
    }

    public function setPosition(int $position){
        $this->position = $position;
    }


}

