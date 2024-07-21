<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoProductsSearchRequest {

    /**
        需返回的字段列表.可选值:Product数据结构中的以下字段:product_id,name,pic_url,cid,props,price,tsc;多个字段之间用","分隔.新增字段status(product的当前状态)
     **/
    private $fields;

    /**
        搜索的关键词是用来搜索产品的title.　注:q,cid和props至少传入一个
     **/
    private $q;

    /**
        商品类目ID.调用taobao.itemcats.get获取.
     **/
    private $cid;

    /**
        属性,属性值的组合.格式:pid:vid;pid:vid;调用taobao.itemprops.get获取类目属性pid 
,再用taobao.itempropvalues.get取得vid.
     **/
    private $props;

    /**
        想要获取的产品的状态列表，支持多个状态并列获取，多个状态之间用","分隔，最多同时指定5种状态。例如，只获取小二确认的spu传入"3",只要商家确认的传入"0"，既要小二确认又要商家确认的传入"0,3"。目前只支持者两种类型的状态搜索，输入其他状态无效。
     **/
    private $status;

    /**
        页码.传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始.
     **/
    private $pageNo;

    /**
        每页条数.每页返回最多返回100条,默认值为40.
     **/
    private $pageSize;

    /**
        传入值为：3表示3C表示3C垂直市场产品，4表示鞋城垂直市场产品，8表示网游垂直市场产品。一次只能指定一种垂直市场类型
     **/
    private $verticalMarket;

    /**
        用户自定义关键属性,结构：pid1:value1;pid2:value2，如果有型号，系列等子属性用: 隔开 例如：“20000:优衣库:型号:001;632501:1234”，表示“品牌:优衣库:型号:001;货号:1234”
     **/
    private $customerProps;

    /**
        按关联产品规格specs搜索套装产品
     **/
    private $suiteItemsStr;

    /**
        按条码搜索产品信息,多个逗号隔开，不支持条码为全零的方式
     **/
    private $barcodeStr;

    /**
        市场ID，1为取C2C市场的产品信息， 2为取B2C市场的产品信息。  不填写此值则默认取C2C的产品信息。
     **/
    private $marketId;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getQ() : string{
        return $this->q;
    }

    public function setQ(string $q){
        $this->q = $q;
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

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getVerticalMarket() : int{
        return $this->verticalMarket;
    }

    public function setVerticalMarket(int $verticalMarket){
        $this->verticalMarket = $verticalMarket;
    }

    public function getCustomerProps() : string{
        return $this->customerProps;
    }

    public function setCustomerProps(string $customerProps){
        $this->customerProps = $customerProps;
    }

    public function getSuiteItemsStr() : string{
        return $this->suiteItemsStr;
    }

    public function setSuiteItemsStr(string $suiteItemsStr){
        $this->suiteItemsStr = $suiteItemsStr;
    }

    public function getBarcodeStr() : string{
        return $this->barcodeStr;
    }

    public function setBarcodeStr(string $barcodeStr){
        $this->barcodeStr = $barcodeStr;
    }

    public function getMarketId() : string{
        return $this->marketId;
    }

    public function setMarketId(string $marketId){
        $this->marketId = $marketId;
    }


    public function getApiName() : string {
        return "taobao.products.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->q)) {
            $requestParam["q"] = TopUtil::convertBasic($this->q);
        }

        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->props)) {
            $requestParam["props"] = TopUtil::convertBasic($this->props);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->verticalMarket)) {
            $requestParam["vertical_market"] = TopUtil::convertBasic($this->verticalMarket);
        }

        if (!TopUtil::checkEmpty($this->customerProps)) {
            $requestParam["customer_props"] = TopUtil::convertBasic($this->customerProps);
        }

        if (!TopUtil::checkEmpty($this->suiteItemsStr)) {
            $requestParam["suite_items_str"] = TopUtil::convertBasic($this->suiteItemsStr);
        }

        if (!TopUtil::checkEmpty($this->barcodeStr)) {
            $requestParam["barcode_str"] = TopUtil::convertBasic($this->barcodeStr);
        }

        if (!TopUtil::checkEmpty($this->marketId)) {
            $requestParam["market_id"] = TopUtil::convertBasic($this->marketId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

