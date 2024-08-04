<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradesSoldIncrementvGetRequest {

    /**
        需要返回的字段列表，多个字段用半角逗号分隔，可选值为返回示例中能看到的所有字段。
     **/
    private $fields;

    /**
        查询入库开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
     **/
    private $startCreate;

    /**
        查询入库结束时间，必须大于入库开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss。<span style="color:red;font-weight: bold;">建议使用30分钟以内的时间跨度，能大大提高响应速度和成功率</span>。
     **/
    private $endCreate;

    /**
        交易状态（<a href="http://open.taobao.com/doc/detail.htm?id=102856" target="_blank">查看可选值</a>），默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。
     **/
    private $status;

    /**
        交易类型列表（<a href="http://open.taobao.com/doc/detail.htm?id=102855" target="_blank">查看可选值</a>），一次查询多种类型可用半角逗号分隔，默认同时查询guarantee_trade,auto_delivery,ec,cod,step这5种类型的数据。
     **/
    private $type;

    /**
        可选值有ershou(二手市场的订单）,service（商城服务子订单）mark（双十一大促活动异常订单）作为扩展类型筛选只能做单个ext_type查询，不能全部查询所有的ext_type类型
     **/
    private $extType;

    /**
        卖家对交易的自定义分组标签，目前可选值为：time_card（点卡软件代充），fee_card（话费软件代充）
     **/
    private $tag;

    /**
        页码。取值范围:大于零的整数;默认值:1。<span style="color:red;font-weight: bold;">注：必须采用倒序的分页方式（从最后一页往回取）才能避免漏单问题。</span>
     **/
    private $pageNo;

    /**
        每页条数。取值范围：1~100，默认值：40。<span style="color:red;font-weight: bold;">建议使用40~50，可以提高成功率，减少超时数量</span>。
     **/
    private $pageSize;

    /**
        是否启用has_next的分页方式，如果指定true,则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的的字段，<span style="color:red;font-weight: bold;">通过此种方式获取增量交易，效率在原有的基础上有80%的提升</span>。
     **/
    private $useHasNext;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getStartCreate() : string{
        return $this->startCreate;
    }

    public function setStartCreate(string $startCreate){
        $this->startCreate = $startCreate;
    }

    public function getEndCreate() : string{
        return $this->endCreate;
    }

    public function setEndCreate(string $endCreate){
        $this->endCreate = $endCreate;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getExtType() : string{
        return $this->extType;
    }

    public function setExtType(string $extType){
        $this->extType = $extType;
    }

    public function getTag() : string{
        return $this->tag;
    }

    public function setTag(string $tag){
        $this->tag = $tag;
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

    public function getUseHasNext() : bool{
        return $this->useHasNext;
    }

    public function setUseHasNext(bool $useHasNext){
        $this->useHasNext = $useHasNext;
    }


    public function getApiName() : string {
        return "taobao.trades.sold.incrementv.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->startCreate)) {
            $requestParam["start_create"] = TopUtil::convertBasic($this->startCreate);
        }

        if (!TopUtil::checkEmpty($this->endCreate)) {
            $requestParam["end_create"] = TopUtil::convertBasic($this->endCreate);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        if (!TopUtil::checkEmpty($this->extType)) {
            $requestParam["ext_type"] = TopUtil::convertBasic($this->extType);
        }

        if (!TopUtil::checkEmpty($this->tag)) {
            $requestParam["tag"] = TopUtil::convertBasic($this->tag);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->useHasNext)) {
            $requestParam["use_has_next"] = TopUtil::convertBasic($this->useHasNext);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

