<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReverseorderErpSearchErpReverseOrderViewDTO {

    /**
        销退单单号
     **/
    public $order_code;

    /**
        系统状态->100 待下发状态 200 下发履行成功状态 300 配作业状态 400 仓作业状态 500 二次入区状态 900 完结状态
     **/
    public $order_status;

    /**
        业务状态->创建	100101L 问题订单	100115L 待人工审核	100155L 待合单决策	100161L 待合单	100165L 待下发	100181L 下发履行成功状态	 下发履行成功	200105L 配作业状态	 配接单	300105L 已预约	300125L 预约异常	300130L 取件成功	300165L 城市中转仓入库	300205L 退供审核	300215L 待中转仓出库	300225L 城市中转仓出库成功	300235L 仓作业状态	 仓接单(等待退货到仓)	400105L 退货已到仓	400125L 质检完成/收货	400145L 区外仓调拨上架	400165L 二次入区状态	 区外仓调拨出库	500105L 清关成功	500125L 清关失败	500130L 调拨入区内仓-仓配交接	500135L 完结状态	 退货完成	900110L 取消	900120L 仓拒收	900130L 取件失败	900140L 调拨入区外仓	900150L 保税仓调拨入库	900160L
     **/
    public $biz_order_status;

    /**
        运单号
     **/
    public $mail_no;

    /**
        逆向仓储单号
     **/
    public $wlb_order_code;

    /**
        配送公司编码
     **/
    public $tms_code;

    /**
        正向履约单号
     **/
    public $prev_scp_ordercode;

    /**
        销退类型->(1, "客退") (2, "运配异常") (3, "拒签退回") (4, "拦截退回") (5, "上门取退") (6, "清关退运")
     **/
    public $return_type;

    /**
        业务来源->(1 "手工创建") (2 "退款自动创建") (3 "拒签自动创建") (4 "拦截自动创建") (5 "无指令登记自动创建") (6 "配送异常退回自动创建") (7 "外部系统创建") (8 "下游拉单创建") (9 "ERP推单创建") (10 "正向清关失败退回") (-1 "历史迁移数据") (-2 "历史多段退数据") (11 "跨租户协同调用创建") (12 "渠道推单创建")
     **/
    public $source_biz;

    /**
        修改时间
     **/
    public $gmt_modified;

    /**
        货主
     **/
    public $owner_id;

    /**
        卖家
     **/
    public $seller_id;

    /**
        退货仓code
     **/
    public $store_code;

    /**
        交易单号
     **/
    public $trade_id;

    /**
        履行时间-> key(含义) WMS_ACCEPT(仓接单) WMS_ARRIVE(到仓)  CUSTOMS_REFUND_AUDIT_SUCCESS(逆向海关通过) WMS_ON_SHELF(仓上架)  EXTERNAL_WMS_OUT(区外仓出库)  BONDED_RETURN_IN(保税仓入库)  SEND_FULFIL(下发履行)  -> value 为时间戳
     **/
    public $fulfil_time_info;

    /**
        g_logistics：物流模式 tc_order_id：2C交易订单 distributorId：分销商ID distributorNick：分销商名称 distributeMode：银河 fxBizCode：淘分销 scpMergeFlag：合单 preLgOrderCode：正向发货LP cancelReason：取消原因 signRejectReason：拒收原因 receiveFailReason：收货失败原因 closeOrderReason：关单原因 picUrls：仓库回传验货图片 manualRemark：备注
     **/
    public $feature_map;

    /**
        逆向物流订单号
     **/
    public $lg_order_code;

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        业务错误码
     **/
    public $biz_error_code;

    /**
        系统错误信息
     **/
    public $biz_error_message;


    public function getOrderCode() : string{
        return $this->order_code;
    }

    public function setOrderCode(string $orderCode){
        $this->order_code = $orderCode;
    }

    public function getOrderStatus() : int{
        return $this->order_status;
    }

    public function setOrderStatus(int $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getBizOrderStatus() : int{
        return $this->biz_order_status;
    }

    public function setBizOrderStatus(int $bizOrderStatus){
        $this->biz_order_status = $bizOrderStatus;
    }

    public function getMailNo() : string{
        return $this->mail_no;
    }

    public function setMailNo(string $mailNo){
        $this->mail_no = $mailNo;
    }

    public function getWlbOrderCode() : string{
        return $this->wlb_order_code;
    }

    public function setWlbOrderCode(string $wlbOrderCode){
        $this->wlb_order_code = $wlbOrderCode;
    }

    public function getTmsCode() : string{
        return $this->tms_code;
    }

    public function setTmsCode(string $tmsCode){
        $this->tms_code = $tmsCode;
    }

    public function getPrevScpOrdercode() : string{
        return $this->prev_scp_ordercode;
    }

    public function setPrevScpOrdercode(string $prevScpOrdercode){
        $this->prev_scp_ordercode = $prevScpOrdercode;
    }

    public function getReturnType() : int{
        return $this->return_type;
    }

    public function setReturnType(int $returnType){
        $this->return_type = $returnType;
    }

    public function getSourceBiz() : int{
        return $this->source_biz;
    }

    public function setSourceBiz(int $sourceBiz){
        $this->source_biz = $sourceBiz;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getOwnerId() : int{
        return $this->owner_id;
    }

    public function setOwnerId(int $ownerId){
        $this->owner_id = $ownerId;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }

    public function getTradeId() : string{
        return $this->trade_id;
    }

    public function setTradeId(string $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getFulfilTimeInfo() : array{
        return $this->fulfil_time_info;
    }

    public function setFulfilTimeInfo(array $fulfilTimeInfo){
        $this->fulfil_time_info = $fulfilTimeInfo;
    }

    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }

    public function getLgOrderCode() : string{
        return $this->lg_order_code;
    }

    public function setLgOrderCode(string $lgOrderCode){
        $this->lg_order_code = $lgOrderCode;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getBizErrorCode() : string{
        return $this->biz_error_code;
    }

    public function setBizErrorCode(string $bizErrorCode){
        $this->biz_error_code = $bizErrorCode;
    }

    public function getBizErrorMessage() : string{
        return $this->biz_error_message;
    }

    public function setBizErrorMessage(string $bizErrorMessage){
        $this->biz_error_message = $bizErrorMessage;
    }


}

