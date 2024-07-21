<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoFenxiaoOrdersGetRequest {

    /**
        交易状态，不传默认查询所有采购单 根据用户角色选择自身状态可选值:  * 供应商： WAIT_SELLER_SEND_GOODS(等待发货)  WAIT_SELLER_CONFIRM_PAY(待确认收款)  WAIT_BUYER_PAY(等待付款)  WAIT_BUYER_CONFIRM_GOODS(已发货)  TRADE_REFUNDING(退款中)  TRADE_FINISHED(采购成功)  TRADE_CLOSED(已关闭)  * 分销商： WAIT_BUYER_PAY(等待付款)  WAIT_BUYER_CONFIRM_GOODS(待收货确认)   TRADE_FOR_PAY(已付款)  TRADE_REFUNDING(退款中)  TRADE_FINISHED(采购成功)  TRADE_CLOSED(已关闭)
     **/
    private $status;

    /**
        起始时间，格式 yyyy-MM-dd HH:mm:ss 支持到秒的查询。若不传时分秒，默认为0时0分0秒。当指定了purchase_order_id或者tc_order_id时，此值可选，否则此参数必传。 结束时间和开始时间的时间间隔不能超过7天，精确到秒。
     **/
    private $startCreated;

    /**
        结束时间，格式 yyyy-MM-dd HH:mm:ss 支持到秒的查询。若不传时分秒，默认为0时0分0秒。当指定了purchase_order_id或者tc_order_id时，此值可选，否则此参数必传。 结束时间和开始时间的时间间隔不能超过7天，精确到秒。
     **/
    private $endCreated;

    /**
        时间类型： trade_time_type(默认类型，按照采购单创建时间范围查询，推荐按照此时间类型查询) update_time_type(采购单按照更新时间范围查询)
     **/
    private $timeType;

    /**
        采购单编号或分销流水号。 当指定此参数后，其他可选参数可以为空
     **/
    private $purchaseOrderId;

    /**
        页码。（大于0的整数。默认为1）
     **/
    private $pageNo;

    /**
        每页条数。（每页条数不超过50条）
     **/
    private $pageSize;

    /**
        指定返回的字段（废弃该参数） 多个字段用","分隔。  fields 如果为空：返回所有采购单对象(purchase_orders)字段。 如果不为空：返回指定采购单对象(purchase_orders)字段。  例1： sub_purchase_orders.tc_order_id 表示只返回tc_order_id 例2： sub_purchase_orders表示只返回子采购单列表
     **/
    private $fields;

    /**
        消费者交易单号（采购单下游买家订单id）。 当在代销、寄售交易中，此单号存在。
     **/
    private $tcOrderId;

    /**
        渠道市场编码，可批量指定。 当不指定时，按照配置的分销市场生效 渠道编码枚举：1-供销平台（淘宝）；2-供销平台（天猫）；3-供销平台（天猫超市）；5-供销平台（淘乡甜）；110001-供销平台（全球购）；110007-淘分销；200002-消费电子市场
     **/
    private $channelCodes;

    /**
        当前查询用户的角色 当不指定时，默认为供应商 供应商：2，分销商：1
     **/
    private $userRoleType;

    /**
        查询的经营模式，当不指定时，默认查询代销订单 代销：1  经销：2  寄售（自营寄售）：5  平台寄售：6
     **/
    private $tradeTypes;


    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
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

    public function getTimeType() : string{
        return $this->timeType;
    }

    public function setTimeType(string $timeType){
        $this->timeType = $timeType;
    }

    public function getPurchaseOrderId() : int{
        return $this->purchaseOrderId;
    }

    public function setPurchaseOrderId(int $purchaseOrderId){
        $this->purchaseOrderId = $purchaseOrderId;
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

    public function getFields() : string{
        return $this->fields;
    }

    public function setFields(string $fields){
        $this->fields = $fields;
    }

    public function getTcOrderId() : int{
        return $this->tcOrderId;
    }

    public function setTcOrderId(int $tcOrderId){
        $this->tcOrderId = $tcOrderId;
    }

    public function getChannelCodes() : array{
        return $this->channelCodes;
    }

    public function setChannelCodes(array $channelCodes){
        $this->channelCodes = $channelCodes;
    }

    public function getUserRoleType() : int{
        return $this->userRoleType;
    }

    public function setUserRoleType(int $userRoleType){
        $this->userRoleType = $userRoleType;
    }

    public function getTradeTypes() : array{
        return $this->tradeTypes;
    }

    public function setTradeTypes(array $tradeTypes){
        $this->tradeTypes = $tradeTypes;
    }


    public function getApiName() : string {
        return "taobao.fenxiao.orders.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->startCreated)) {
            $requestParam["start_created"] = TopUtil::convertBasic($this->startCreated);
        }

        if (!TopUtil::checkEmpty($this->endCreated)) {
            $requestParam["end_created"] = TopUtil::convertBasic($this->endCreated);
        }

        if (!TopUtil::checkEmpty($this->timeType)) {
            $requestParam["time_type"] = TopUtil::convertBasic($this->timeType);
        }

        if (!TopUtil::checkEmpty($this->purchaseOrderId)) {
            $requestParam["purchase_order_id"] = TopUtil::convertBasic($this->purchaseOrderId);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasic($this->fields);
        }

        if (!TopUtil::checkEmpty($this->tcOrderId)) {
            $requestParam["tc_order_id"] = TopUtil::convertBasic($this->tcOrderId);
        }

        if (!TopUtil::checkEmpty($this->channelCodes)) {
            $requestParam["channel_codes"] = TopUtil::convertBasicList($this->channelCodes);
        }

        if (!TopUtil::checkEmpty($this->userRoleType)) {
            $requestParam["user_role_type"] = TopUtil::convertBasic($this->userRoleType);
        }

        if (!TopUtil::checkEmpty($this->tradeTypes)) {
            $requestParam["trade_types"] = TopUtil::convertBasicList($this->tradeTypes);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

