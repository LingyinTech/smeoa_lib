<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoProductGetRequest {

    /**
        需返回的字段列表.可选值:Product数据结构中的所有字段;多个字段之间用","分隔.
     **/
    private $fields;

    /**
        Product的id.两种方式来查看一个产品:1.传入product_id来查询 2.传入cid和props来查询
     **/
    private $productId;

    /**
        商品类目id.调用taobao.itemcats.get获取;必须是叶子类目id,如果没有传product_id,那么cid和props必须要传.
     **/
    private $cid;

    /**
        比如:诺基亚N73这个产品的关键属性列表就是:品牌:诺基亚;型号:N73,对应的PV值就是10005:10027;10006:29729.
     **/
    private $props;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
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


    public function getApiName() : string {
        return "taobao.product.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->props)) {
            $requestParam["props"] = TopUtil::convertBasic($this->props);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

