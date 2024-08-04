<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsFulfilorderSearchFulfilOrderDTO {

    /**
        配送资源code
     **/
    public $tms_code;

    /**
        修改时间
     **/
    public $gmt_modified;

    /**
        分销场景下，分销toC交易单
     **/
    public $fx_trade_id;

    /**
        状态，新建=0； 下发履行处理中=50； 下发仓生产中=100； 仓库生产完毕=200； 配送中=300；
     **/
    public $order_status;

    /**
        货主
     **/
    public $owner_id;

    /**
        业务状态，declareType（清关方式）：cbd（跨境）、pgd（邮关）； distributorId（分销商SellerId）； distributorNick（分销商SellerNick）； g_logistics（物流模式）：cainiao（菜鸟）、ecology（生态；  outbound_time（出库时间）；   split_flag（拆单标记）=1； merge_flag（合单标记）=1；  invQlty（临期品可售场景）=139 gift_type（赠品类型）：1（普通品）、5（交易赠品）、2（供应链赠品）；  新建=0； 下发履行处理中=50； 下发仓生产中=100； 仓库生产完毕=200； 配送中=300；  新建=100100； 待促销处理=100331； 待分仓占库存=100341； 缺货等待=100345； 待智能审单=100351； 待客服处理=100355； 待合单处理=100361； 合单等待=100365； 业务控单中=100369； 待发货=100371； 拆单废弃=200100； 取消=400300； 履行调度Hold单中=500200； 履行接单完成=500300； 已下发给仓库=600100； 仓库已接单=600200； 生产中=600300； 仓库已打印=600310； 仓库已拣选=600320； 已打包=600330； 部分出库中=600400； 仓库拒单=600800； 全部出库=700100； 全部揽收=800100； 配揽收=800110； 全部签收=800900； 部分签收=800910； 部分签收部分拒签=800920； 部分拒签=800940； 全部拒签=800950； 拦截成功=800960； 订单已出库=7070； 订单关闭=7120； 已签收=7130；拦截成功=7150；
     **/
    public $biz_order_status;

    /**
        交易创建时间
     **/
    public $trade_create_time;

    /**
        仓储单号
     **/
    public $store_order_no;

    /**
        分销类型。0=toC单据，1=分销场景的B2B订单，2=分销场景的B2C订单。
     **/
    public $fx_trade_type;

    /**
        卖家id
     **/
    public $seller_id;

    /**
        交易付款时间
     **/
    public $trade_pay_time;

    /**
        分销场景下，toC卖家
     **/
    public $fx_seller_id;

    /**
        物流履约单号
     **/
    public $order_code;

    /**
        运单号（列表，逗号分隔）
     **/
    public $mail_nos;

    /**
        交易单号
     **/
    public $trade_id;

    /**
        仓code
     **/
    public $store_code;

    /**
        单据来源
     **/
    public $platform_source;

    /**
        扩展信息，declareType（清关方式）：cbd（跨境）、pgd（邮关）； distributorId（分销商SellerId）； distributorNick（分销商SellerNick）； g_logistics（物流模式）：cainiao（菜鸟）、ecology（生态；
     **/
    public $feature_map;

    /**
        时间节点，outbound_time（出库时间）；
     **/
    public $fulfil_time_map;

    /**
        标记信息，split_flag（拆单标记）=1； merge_flag（合单标记）=1；
     **/
    public $flag_feature_map;

    /**
        错误编码
     **/
    public $error_code;

    /**
        错误描述
     **/
    public $error_message;

    /**
        交易LP
     **/
    public $source_lg_order_code;

    /**
        发货LP
     **/
    public $consign_lg_order_code;


    public function getTmsCode() : string{
        return $this->tms_code;
    }

    public function setTmsCode(string $tmsCode){
        $this->tms_code = $tmsCode;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getFxTradeId() : string{
        return $this->fx_trade_id;
    }

    public function setFxTradeId(string $fxTradeId){
        $this->fx_trade_id = $fxTradeId;
    }

    public function getOrderStatus() : int{
        return $this->order_status;
    }

    public function setOrderStatus(int $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getOwnerId() : int{
        return $this->owner_id;
    }

    public function setOwnerId(int $ownerId){
        $this->owner_id = $ownerId;
    }

    public function getBizOrderStatus() : int{
        return $this->biz_order_status;
    }

    public function setBizOrderStatus(int $bizOrderStatus){
        $this->biz_order_status = $bizOrderStatus;
    }

    public function getTradeCreateTime() : string{
        return $this->trade_create_time;
    }

    public function setTradeCreateTime(string $tradeCreateTime){
        $this->trade_create_time = $tradeCreateTime;
    }

    public function getStoreOrderNo() : string{
        return $this->store_order_no;
    }

    public function setStoreOrderNo(string $storeOrderNo){
        $this->store_order_no = $storeOrderNo;
    }

    public function getFxTradeType() : int{
        return $this->fx_trade_type;
    }

    public function setFxTradeType(int $fxTradeType){
        $this->fx_trade_type = $fxTradeType;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getTradePayTime() : string{
        return $this->trade_pay_time;
    }

    public function setTradePayTime(string $tradePayTime){
        $this->trade_pay_time = $tradePayTime;
    }

    public function getFxSellerId() : string{
        return $this->fx_seller_id;
    }

    public function setFxSellerId(string $fxSellerId){
        $this->fx_seller_id = $fxSellerId;
    }

    public function getOrderCode() : string{
        return $this->order_code;
    }

    public function setOrderCode(string $orderCode){
        $this->order_code = $orderCode;
    }

    public function getMailNos() : string{
        return $this->mail_nos;
    }

    public function setMailNos(string $mailNos){
        $this->mail_nos = $mailNos;
    }

    public function getTradeId() : string{
        return $this->trade_id;
    }

    public function setTradeId(string $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }

    public function getPlatformSource() : int{
        return $this->platform_source;
    }

    public function setPlatformSource(int $platformSource){
        $this->platform_source = $platformSource;
    }

    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }

    public function getFulfilTimeMap() : array{
        return $this->fulfil_time_map;
    }

    public function setFulfilTimeMap(array $fulfilTimeMap){
        $this->fulfil_time_map = $fulfilTimeMap;
    }

    public function getFlagFeatureMap() : array{
        return $this->flag_feature_map;
    }

    public function setFlagFeatureMap(array $flagFeatureMap){
        $this->flag_feature_map = $flagFeatureMap;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMessage() : string{
        return $this->error_message;
    }

    public function setErrorMessage(string $errorMessage){
        $this->error_message = $errorMessage;
    }

    public function getSourceLgOrderCode() : string{
        return $this->source_lg_order_code;
    }

    public function setSourceLgOrderCode(string $sourceLgOrderCode){
        $this->source_lg_order_code = $sourceLgOrderCode;
    }

    public function getConsignLgOrderCode() : string{
        return $this->consign_lg_order_code;
    }

    public function setConsignLgOrderCode(string $consignLgOrderCode){
        $this->consign_lg_order_code = $consignLgOrderCode;
    }


}

