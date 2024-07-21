<?php
namespace Topsdk\Topapi\Ability571;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingOpenDataRelationQueryRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingOpenVersionCountRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingOpenVersionApplyRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingOpenDarunfaActivitySkuSyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingOpenDarunfaActivitySyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingOpenPosDiscountCodeCreateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponAbandonRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponSkuQueryRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponSkuRemoveRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItembuygiftCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponTemplateQueryRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItembuygiftQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponTemplateTerminateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItembuygiftDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponSpreadApplyRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItemdiscountQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponSkuAddRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponTemplateCreateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolAdditemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItembuygiftQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItembuygiftRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItembuygiftAdditemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponTemplateUpdateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingFullrangeRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingCouponCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingFullrangeQueryitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingFullrangeQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingFullrangeDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingFullrangeCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingFullrangeAddexchangeitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingVersionCommitRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingExpirePromotionDeleteRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingExpirePromotionCreateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkTradeDiscountBillGetRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingExpirePromotionQueryRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingCouponSendmaRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolAddcategoryRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolExcludeskucodeRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkCouponTemplateQueryumpactidRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolActivityCreateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolAdditemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingFullrangeRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItemdiscountCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingCouponQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingFullrangeAddexchangeitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItemdiscountDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItemdiscountQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItemdiscountRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItemdiscountAdditemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItemdiscountQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingBuygiftItemRemoveAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingBuygiftItemAddAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingCouponEndactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingCouponCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingDiscountItemAddAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingCouponSendmaRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingExpirePromotionQueryRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingDiscountItemRemoveAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingFullrangeDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingFullrangeCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItembuygiftDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingFullrangeQueryitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItembuygiftQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItembuygiftQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolExcludeskucodeRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolAddcategoryRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolItemRemoveAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolItemAddAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItemdiscountCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolStairQueryitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingCouponQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolStairAdditemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingVersionCommitRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingCouponEndactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItempoolStairRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItembuygiftCreateactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingVersionGenerateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingExpirePromotionCreateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingFullrangeQueryactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItembuygiftAdditemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingExpirePromotionDeleteRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItemdiscountDeleteactivityRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaHmMarketingItembuygiftRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItemdiscountQueryitemsRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingVersionGenerateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolActivityCreateRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolItemAddAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolItemRemoveAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingDiscountItemAddAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingDiscountItemRemoveAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingBuygiftItemAddAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingBuygiftItemRemoveAsyncRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingOpenHeartbeatRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingPriceRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolStairRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolStairAdditemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItempoolStairQueryitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItemdiscountRemoveitemRequest;
use Topsdk\Topapi\Ability571\Request\AlibabaWdkMarketingItemdiscountAdditemRequest;

class Ability571 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        数据关联关系查询
    **/
    public function alibabaWdkMarketingOpenDataRelationQuery(AlibabaWdkMarketingOpenDataRelationQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.open.data.relation.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        版本数量查询
    **/
    public function alibabaWdkMarketingOpenVersionCount(AlibabaWdkMarketingOpenVersionCountRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.open.version.count", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        数据同步版本号申请
    **/
    public function alibabaWdkMarketingOpenVersionApply(AlibabaWdkMarketingOpenVersionApplyRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.open.version.apply", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        营销商品数据同步
    **/
    public function alibabaWdkMarketingOpenDarunfaActivitySkuSync(AlibabaWdkMarketingOpenDarunfaActivitySkuSyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.open.darunfa.activity.sku.sync", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        活动数据同步
    **/
    public function alibabaWdkMarketingOpenDarunfaActivitySync(AlibabaWdkMarketingOpenDarunfaActivitySyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.open.darunfa.activity.sync", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商品池活动下的商品
    **/
    public function alibabaWdkMarketingItempoolQueryitems(AlibabaWdkMarketingItempoolQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        pos一物一码创建
    **/
    public function alibabaWdkMarketingOpenPosDiscountCodeCreate(AlibabaWdkMarketingOpenPosDiscountCodeCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.open.pos.discount.code.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        废券
    **/
    public function alibabaWdkCouponAbandon(AlibabaWdkCouponAbandonRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.abandon", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券商品查询
    **/
    public function alibabaWdkCouponSkuQuery(AlibabaWdkCouponSkuQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.sku.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券商品删除
    **/
    public function alibabaWdkCouponSkuRemove(AlibabaWdkCouponSkuRemoveRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.sku.remove", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建买赠活动
    **/
    public function alibabaWdkMarketingItembuygiftCreateactivity(AlibabaWdkMarketingItembuygiftCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itembuygift.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券模版查询
    **/
    public function alibabaWdkCouponTemplateQuery(AlibabaWdkCouponTemplateQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.template.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询买赠活动
    **/
    public function alibabaWdkMarketingItembuygiftQueryactivity(AlibabaWdkMarketingItembuygiftQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itembuygift.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券模版终止
    **/
    public function alibabaWdkCouponTemplateTerminate(AlibabaWdkCouponTemplateTerminateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.template.terminate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除买赠活动
    **/
    public function alibabaWdkMarketingItembuygiftDeleteactivity(AlibabaWdkMarketingItembuygiftDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itembuygift.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        普通发券
    **/
    public function alibabaWdkCouponSpreadApply(AlibabaWdkCouponSpreadApplyRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.spread.apply", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查找特价活动
    **/
    public function alibabaWdkMarketingItemdiscountQueryactivity(AlibabaWdkMarketingItemdiscountQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itemdiscount.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券商品增加
    **/
    public function alibabaWdkCouponSkuAdd(AlibabaWdkCouponSkuAddRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.sku.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        移除商品池里面的商品
    **/
    public function alibabaWdkMarketingItempoolRemoveitem(AlibabaWdkMarketingItempoolRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券模版创建
    **/
    public function alibabaWdkCouponTemplateCreate(AlibabaWdkCouponTemplateCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.template.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        增加商品池里面的商品
    **/
    public function alibabaWdkMarketingItempoolAdditem(AlibabaWdkMarketingItempoolAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除商品池活动
    **/
    public function alibabaWdkMarketingItempoolDeleteactivity(AlibabaWdkMarketingItempoolDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查找商品池活动
    **/
    public function alibabaWdkMarketingItempoolQueryactivity(AlibabaWdkMarketingItempoolQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加商品池活动
    **/
    public function alibabaWdkMarketingItempoolCreateactivity(AlibabaWdkMarketingItempoolCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询买赠活动下的商品
    **/
    public function alibabaWdkMarketingItembuygiftQueryitems(AlibabaWdkMarketingItembuygiftQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itembuygift.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        移除买赠活动下的商品。【注意，此接口暂不支持并发！】
    **/
    public function alibabaWdkMarketingItembuygiftRemoveitem(AlibabaWdkMarketingItembuygiftRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itembuygift.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        增加买赠活动商品。【注意，此接口暂不支持并发！】
    **/
    public function alibabaWdkMarketingItembuygiftAdditem(AlibabaWdkMarketingItembuygiftAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itembuygift.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券模版修改
    **/
    public function alibabaWdkCouponTemplateUpdate(AlibabaWdkCouponTemplateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.template.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动删除购品
    **/
    public function alibabaWdkMarketingFullrangeRemoveitem(AlibabaWdkMarketingFullrangeRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.fullrange.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券活动创建
    **/
    public function alibabaWdkMarketingCouponCreateactivity(AlibabaWdkMarketingCouponCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.coupon.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动查询换购品
    **/
    public function alibabaWdkMarketingFullrangeQueryitem(AlibabaWdkMarketingFullrangeQueryitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.fullrange.queryitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动查询活动
    **/
    public function alibabaWdkMarketingFullrangeQueryactivity(AlibabaWdkMarketingFullrangeQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.fullrange.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动删除活动接口
    **/
    public function alibabaWdkMarketingFullrangeDeleteactivity(AlibabaWdkMarketingFullrangeDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.fullrange.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建全场活动
    **/
    public function alibabaWdkMarketingFullrangeCreateactivity(AlibabaWdkMarketingFullrangeCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.fullrange.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场增加换购品
    **/
    public function alibabaWdkMarketingFullrangeAddexchangeitem(AlibabaWdkMarketingFullrangeAddexchangeitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.fullrange.addexchangeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        提交版本号
    **/
    public function alibabaWdkMarketingVersionCommit(AlibabaWdkMarketingVersionCommitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.version.commit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        短保优惠删除
    **/
    public function alibabaWdkMarketingExpirePromotionDelete(AlibabaWdkMarketingExpirePromotionDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.expire.promotion.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        短保优惠创建
    **/
    public function alibabaWdkMarketingExpirePromotionCreate(AlibabaWdkMarketingExpirePromotionCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.expire.promotion.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订单优惠账单查询
    **/
    public function alibabaWdkTradeDiscountBillGet(AlibabaWdkTradeDiscountBillGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.trade.discount.bill.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        短保优惠查询
    **/
    public function alibabaWdkMarketingExpirePromotionQuery(AlibabaWdkMarketingExpirePromotionQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.expire.promotion.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发放匿名码
    **/
    public function alibabaWdkMarketingCouponSendma(AlibabaWdkMarketingCouponSendmaRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.coupon.sendma", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        增加商品池里面的类目
    **/
    public function alibabaWdkMarketingItempoolAddcategory(AlibabaWdkMarketingItempoolAddcategoryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.addcategory", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池排除商品【品类优惠使用】
    **/
    public function alibabaWdkMarketingItempoolExcludeskucode(AlibabaWdkMarketingItempoolExcludeskucodeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.excludeskucode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过券模板查询券活动id接口
    **/
    public function alibabaWdkCouponTemplateQueryumpactid(AlibabaWdkCouponTemplateQueryumpactidRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.coupon.template.queryumpactid", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加商品池活动
    **/
    public function alibabaHmMarketingItempoolCreateactivity(AlibabaHmMarketingItempoolCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除商品池活动
    **/
    public function alibabaHmMarketingItempoolDeleteactivity(AlibabaHmMarketingItempoolDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建活动新接口
    **/
    public function alibabaHmMarketingItempoolActivityCreate(AlibabaHmMarketingItempoolActivityCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.activity.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        增加商品池里面的商品
    **/
    public function alibabaHmMarketingItempoolAdditem(AlibabaHmMarketingItempoolAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查找商品池活动
    **/
    public function alibabaHmMarketingItempoolQueryactivity(AlibabaHmMarketingItempoolQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        移除商品池里面的商品
    **/
    public function alibabaHmMarketingItempoolRemoveitem(AlibabaHmMarketingItempoolRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商品池活动下面的商品
    **/
    public function alibabaHmMarketingItempoolQueryitems(AlibabaHmMarketingItempoolQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动删除购品
    **/
    public function alibabaHmMarketingFullrangeRemoveitem(AlibabaHmMarketingFullrangeRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.fullrange.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建商品特价活动
    **/
    public function alibabaHmMarketingItemdiscountCreateactivity(AlibabaHmMarketingItemdiscountCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itemdiscount.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询优惠券活动下的商品
    **/
    public function alibabaHmMarketingCouponQueryitems(AlibabaHmMarketingCouponQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.coupon.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场增加换购品
    **/
    public function alibabaHmMarketingFullrangeAddexchangeitem(AlibabaHmMarketingFullrangeAddexchangeitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.fullrange.addexchangeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除商品特价活动
    **/
    public function alibabaHmMarketingItemdiscountDeleteactivity(AlibabaHmMarketingItemdiscountDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itemdiscount.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查找特价活动
    **/
    public function alibabaHmMarketingItemdiscountQueryactivity(AlibabaHmMarketingItemdiscountQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itemdiscount.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        移除报名的商品
    **/
    public function alibabaHmMarketingItemdiscountRemoveitem(AlibabaHmMarketingItemdiscountRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itemdiscount.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        报名特价商品
    **/
    public function alibabaHmMarketingItemdiscountAdditem(AlibabaHmMarketingItemdiscountAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itemdiscount.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询特价商品
    **/
    public function alibabaHmMarketingItemdiscountQueryitems(AlibabaHmMarketingItemdiscountQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itemdiscount.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量删除买赠商品
    **/
    public function alibabaHmMarketingBuygiftItemRemoveAsync(AlibabaHmMarketingBuygiftItemRemoveAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.buygift.item.remove.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量发布买赠商品
    **/
    public function alibabaHmMarketingBuygiftItemAddAsync(AlibabaHmMarketingBuygiftItemAddAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.buygift.item.add.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        结束优惠券活动
    **/
    public function alibabaHmMarketingCouponEndactivity(AlibabaHmMarketingCouponEndactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.coupon.endactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        优惠券活动创建
    **/
    public function alibabaHmMarketingCouponCreateactivity(AlibabaHmMarketingCouponCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.coupon.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        特价批量新增商品
    **/
    public function alibabaHmMarketingDiscountItemAddAsync(AlibabaHmMarketingDiscountItemAddAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.discount.item.add.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发放匿名码
    **/
    public function alibabaHmMarketingCouponSendma(AlibabaHmMarketingCouponSendmaRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.coupon.sendma", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        短保优惠查询
    **/
    public function alibabaHmMarketingExpirePromotionQuery(AlibabaHmMarketingExpirePromotionQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.expire.promotion.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        特价批量移除商品
    **/
    public function alibabaHmMarketingDiscountItemRemoveAsync(AlibabaHmMarketingDiscountItemRemoveAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.discount.item.remove.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动删除活动接口
    **/
    public function alibabaHmMarketingFullrangeDeleteactivity(AlibabaHmMarketingFullrangeDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.fullrange.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建全场活动
    **/
    public function alibabaHmMarketingFullrangeCreateactivity(AlibabaHmMarketingFullrangeCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.fullrange.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除买赠活动
    **/
    public function alibabaHmMarketingItembuygiftDeleteactivity(AlibabaHmMarketingItembuygiftDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itembuygift.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动查询换购品
    **/
    public function alibabaHmMarketingFullrangeQueryitem(AlibabaHmMarketingFullrangeQueryitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.fullrange.queryitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询买赠活动下的商品
    **/
    public function alibabaHmMarketingItembuygiftQueryitems(AlibabaHmMarketingItembuygiftQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itembuygift.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询买赠活动
    **/
    public function alibabaHmMarketingItembuygiftQueryactivity(AlibabaHmMarketingItembuygiftQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itembuygift.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池排除商品【品类优惠使用】
    **/
    public function alibabaHmMarketingItempoolExcludeskucode(AlibabaHmMarketingItempoolExcludeskucodeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.excludeskucode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        增加商品池里面的类目
    **/
    public function alibabaHmMarketingItempoolAddcategory(AlibabaHmMarketingItempoolAddcategoryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.addcategory", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池删除商品
    **/
    public function alibabaHmMarketingItempoolItemRemoveAsync(AlibabaHmMarketingItempoolItemRemoveAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.item.remove.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池新增商品
    **/
    public function alibabaHmMarketingItempoolItemAddAsync(AlibabaHmMarketingItempoolItemAddAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.item.add.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建商品特价活动
    **/
    public function alibabaWdkMarketingItemdiscountCreateactivity(AlibabaWdkMarketingItemdiscountCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itemdiscount.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        换购商品查询
    **/
    public function alibabaHmMarketingItempoolStairQueryitem(AlibabaHmMarketingItempoolStairQueryitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.stair.queryitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询优惠券活动下的商品
    **/
    public function alibabaWdkMarketingCouponQueryitems(AlibabaWdkMarketingCouponQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.coupon.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池阶梯商品添加
    **/
    public function alibabaHmMarketingItempoolStairAdditem(AlibabaHmMarketingItempoolStairAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.stair.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        提交版本号
    **/
    public function alibabaHmMarketingVersionCommit(AlibabaHmMarketingVersionCommitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.version.commit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        结束优惠券活动
    **/
    public function alibabaWdkMarketingCouponEndactivity(AlibabaWdkMarketingCouponEndactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.coupon.endactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除换购活动商品
    **/
    public function alibabaHmMarketingItempoolStairRemoveitem(AlibabaHmMarketingItempoolStairRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itempool.stair.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建买赠活动
    **/
    public function alibabaHmMarketingItembuygiftCreateactivity(AlibabaHmMarketingItembuygiftCreateactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itembuygift.createactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        生成发布使用的版本号
    **/
    public function alibabaHmMarketingVersionGenerate(AlibabaHmMarketingVersionGenerateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.version.generate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        短保优惠创建
    **/
    public function alibabaHmMarketingExpirePromotionCreate(AlibabaHmMarketingExpirePromotionCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.expire.promotion.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        全场活动查询活动
    **/
    public function alibabaHmMarketingFullrangeQueryactivity(AlibabaHmMarketingFullrangeQueryactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.fullrange.queryactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        增加买赠活动商品。【注意，此接口暂不支持并发！】
    **/
    public function alibabaHmMarketingItembuygiftAdditem(AlibabaHmMarketingItembuygiftAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itembuygift.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        短保优惠删除
    **/
    public function alibabaHmMarketingExpirePromotionDelete(AlibabaHmMarketingExpirePromotionDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.expire.promotion.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除商品特价活动
    **/
    public function alibabaWdkMarketingItemdiscountDeleteactivity(AlibabaWdkMarketingItemdiscountDeleteactivityRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itemdiscount.deleteactivity", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        移除买赠活动下的商品。【注意，此接口暂不支持并发！】
    **/
    public function alibabaHmMarketingItembuygiftRemoveitem(AlibabaHmMarketingItembuygiftRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.hm.marketing.itembuygift.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询特价商品
    **/
    public function alibabaWdkMarketingItemdiscountQueryitems(AlibabaWdkMarketingItemdiscountQueryitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itemdiscount.queryitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        生成发布使用的版本号
    **/
    public function alibabaWdkMarketingVersionGenerate(AlibabaWdkMarketingVersionGenerateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.version.generate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建活动新接口
    **/
    public function alibabaWdkMarketingItempoolActivityCreate(AlibabaWdkMarketingItempoolActivityCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.activity.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池新增商品
    **/
    public function alibabaWdkMarketingItempoolItemAddAsync(AlibabaWdkMarketingItempoolItemAddAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.item.add.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池删除商品
    **/
    public function alibabaWdkMarketingItempoolItemRemoveAsync(AlibabaWdkMarketingItempoolItemRemoveAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.item.remove.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        特价批量新增商品
    **/
    public function alibabaWdkMarketingDiscountItemAddAsync(AlibabaWdkMarketingDiscountItemAddAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.discount.item.add.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        特价批量移除商品
    **/
    public function alibabaWdkMarketingDiscountItemRemoveAsync(AlibabaWdkMarketingDiscountItemRemoveAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.discount.item.remove.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量发布买赠商品
    **/
    public function alibabaWdkMarketingBuygiftItemAddAsync(AlibabaWdkMarketingBuygiftItemAddAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.buygift.item.add.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量删除买赠商品
    **/
    public function alibabaWdkMarketingBuygiftItemRemoveAsync(AlibabaWdkMarketingBuygiftItemRemoveAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.buygift.item.remove.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        心跳服务【10s一次】
    **/
    public function alibabaWdkMarketingOpenHeartbeat(AlibabaWdkMarketingOpenHeartbeatRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.open.heartbeat", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        促销价签服务
    **/
    public function alibabaWdkMarketingPrice(AlibabaWdkMarketingPriceRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.price", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除换购活动商品
    **/
    public function alibabaWdkMarketingItempoolStairRemoveitem(AlibabaWdkMarketingItempoolStairRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.stair.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品池阶梯商品添加
    **/
    public function alibabaWdkMarketingItempoolStairAdditem(AlibabaWdkMarketingItempoolStairAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.stair.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        换购商品查询
    **/
    public function alibabaWdkMarketingItempoolStairQueryitem(AlibabaWdkMarketingItempoolStairQueryitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itempool.stair.queryitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        移除报名的商品
    **/
    public function alibabaWdkMarketingItemdiscountRemoveitem(AlibabaWdkMarketingItemdiscountRemoveitemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itemdiscount.removeitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        报名特价商品
    **/
    public function alibabaWdkMarketingItemdiscountAdditem(AlibabaWdkMarketingItemdiscountAdditemRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.wdk.marketing.itemdiscount.additem", $request->toMap(), $request->toFileParamMap(), $session);
    }
}