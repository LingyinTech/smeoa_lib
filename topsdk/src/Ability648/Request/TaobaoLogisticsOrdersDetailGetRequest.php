<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsOrdersDetailGetRequest {

    /**
        需返回的字段列表.可选值:Shipping 物流数据结构中所有字段.fileds中可以指定返回以上任意一个或者多个字段,以","分隔.
     **/
    private $fields;

    /**
        交易ID.如果加入tid参数的话,不用传其他的参数,但是仅会返回一条物流订单信息.
     **/
    private $tid;

    /**
        买家昵称
     **/
    private $buyerNick;

    /**
        物流状态.可查看数据结构 Shipping 中的status字段.
     **/
    private $status;

    /**
        卖家是否发货.可选值:yes(是),no(否).如:yes.
     **/
    private $sellerConfirm;

    /**
        收货人姓名
     **/
    private $receiverName;

    /**
        创建时间开始.格式:yyyy-MM-dd HH:mm:ss
     **/
    private $startCreated;

    /**
        创建时间结束.格式:yyyy-MM-dd HH:mm:ss
     **/
    private $endCreated;

    /**
        谁承担运费.可选值:buyer(买家),seller(卖家).如:buyer
     **/
    private $freightPayer;

    /**
        物流方式.可选值:post(平邮),express(快递),ems(EMS).如:post
     **/
    private $type;

    /**
        页码.该字段没传 或 值<1 ,则默认page_no为1
     **/
    private $pageNo;

    /**
        每页条数.该字段没传 或 值<1 ，则默认page_size为40
     **/
    private $pageSize;

    /**
        系统自动生成
     **/
    private $ouid;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getBuyerNick() : string{
        return $this->buyerNick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyerNick = $buyerNick;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getSellerConfirm() : string{
        return $this->sellerConfirm;
    }

    public function setSellerConfirm(string $sellerConfirm){
        $this->sellerConfirm = $sellerConfirm;
    }

    public function getReceiverName() : string{
        return $this->receiverName;
    }

    public function setReceiverName(string $receiverName){
        $this->receiverName = $receiverName;
    }

    public function getStartCreated() : string{
        return $this->startCreated;
    }

    public function setStartCreated(string $startCreated){
        $this->startCreated = $startCreated;
    }

    public function getEndCreated() : string{
        return $this->endCreated;
    }

    public function setEndCreated(string $endCreated){
        $this->endCreated = $endCreated;
    }

    public function getFreightPayer() : string{
        return $this->freightPayer;
    }

    public function setFreightPayer(string $freightPayer){
        $this->freightPayer = $freightPayer;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
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

    public function getOuid() : string{
        return $this->ouid;
    }

    public function setOuid(string $ouid){
        $this->ouid = $ouid;
    }


    public function getApiName() : string {
        return "taobao.logistics.orders.detail.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->buyerNick)) {
            $requestParam["buyer_nick"] = TopUtil::convertBasic($this->buyerNick);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->sellerConfirm)) {
            $requestParam["seller_confirm"] = TopUtil::convertBasic($this->sellerConfirm);
        }

        if (!TopUtil::checkEmpty($this->receiverName)) {
            $requestParam["receiver_name"] = TopUtil::convertBasic($this->receiverName);
        }

        if (!TopUtil::checkEmpty($this->startCreated)) {
            $requestParam["start_created"] = TopUtil::convertBasic($this->startCreated);
        }

        if (!TopUtil::checkEmpty($this->endCreated)) {
            $requestParam["end_created"] = TopUtil::convertBasic($this->endCreated);
        }

        if (!TopUtil::checkEmpty($this->freightPayer)) {
            $requestParam["freight_payer"] = TopUtil::convertBasic($this->freightPayer);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->ouid)) {
            $requestParam["ouid"] = TopUtil::convertBasic($this->ouid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

