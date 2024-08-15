<?php
namespace Topsdk\Topapi\Ability648;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability648\Request\TaobaoItemSkuAddRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoItemSkuUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradesSoldGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeMemoAddRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeMemoUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeFullinfoGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoAreasGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeConfirmfeeGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsTraceSearchRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsCompaniesGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsOrdersDetailGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsOrdersGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeOrderskuUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeAmountGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeShippingaddressUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsPartnersGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeReceivetimeDelayRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsAddressSearchRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsAddressRemoveRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsAddressModifyRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsAddressAddRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsOnlineCancelRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsDummySendRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradePostageUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplatesGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateDeleteRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateAddRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoItemPriceUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoItemSkuPriceUpdateRequest;

class Ability648 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        添加SKU
    **/
    public function taobaoItemSkuAdd(TaobaoItemSkuAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新SKU信息
    **/
    public function taobaoItemSkuUpdate(TaobaoItemSkuUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询卖家已卖出的交易数据（根据创建时间）
    **/
    public function taobaoTradesSoldGet(TaobaoTradesSoldGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trades.sold.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取单笔交易的部分信息(性能高)
    **/
    public function taobaoTradeGet(TaobaoTradeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        对一笔交易添加备注
    **/
    public function taobaoTradeMemoAdd(TaobaoTradeMemoAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.memo.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改交易备注
    **/
    public function taobaoTradeMemoUpdate(TaobaoTradeMemoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.memo.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取单笔交易的详细信息
    **/
    public function taobaoTradeFullinfoGet(TaobaoTradeFullinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.fullinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询地址区域
    **/
    public function taobaoAreasGet(TaobaoAreasGetRequest $request) {
        return $this->client->execute("taobao.areas.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取交易确认收货费用
    **/
    public function taobaoTradeConfirmfeeGet(TaobaoTradeConfirmfeeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.confirmfee.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        物流流转信息查询
    **/
    public function taobaoLogisticsTraceSearch(TaobaoLogisticsTraceSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.trace.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询物流公司信息
    **/
    public function taobaoLogisticsCompaniesGet(TaobaoLogisticsCompaniesGetRequest $request) {
        return $this->client->execute("taobao.logistics.companies.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        批量查询物流订单,返回详细信息
    **/
    public function taobaoLogisticsOrdersDetailGet(TaobaoLogisticsOrdersDetailGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.orders.detail.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量查询物流订单
    **/
    public function taobaoLogisticsOrdersGet(TaobaoLogisticsOrdersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.orders.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新交易的销售属性
    **/
    public function taobaoTradeOrderskuUpdate(TaobaoTradeOrderskuUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.ordersku.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        交易帐务查询
    **/
    public function taobaoTradeAmountGet(TaobaoTradeAmountGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.amount.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更改交易的收货地址
    **/
    public function taobaoTradeShippingaddressUpdate(TaobaoTradeShippingaddressUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.shippingaddress.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询支持起始地到目的地范围的物流公司
    **/
    public function taobaoLogisticsPartnersGet(TaobaoLogisticsPartnersGetRequest $request) {
        return $this->client->execute("taobao.logistics.partners.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        延长交易收货时间
    **/
    public function taobaoTradeReceivetimeDelay(TaobaoTradeReceivetimeDelayRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.receivetime.delay", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询卖家地址库
    **/
    public function taobaoLogisticsAddressSearch(TaobaoLogisticsAddressSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.address.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除卖家地址库
    **/
    public function taobaoLogisticsAddressRemove(TaobaoLogisticsAddressRemoveRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.address.remove", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家地址库修改
    **/
    public function taobaoLogisticsAddressModify(TaobaoLogisticsAddressModifyRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.address.modify", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家地址库新增接口
    **/
    public function taobaoLogisticsAddressAdd(TaobaoLogisticsAddressAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.address.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        取消物流订单接口
    **/
    public function taobaoLogisticsOnlineCancel(TaobaoLogisticsOnlineCancelRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.online.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        无需物流（虚拟）发货处理
    **/
    public function taobaoLogisticsDummySend(TaobaoLogisticsDummySendRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.dummy.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改交易邮费价格
    **/
    public function taobaoTradePostageUpdate(TaobaoTradePostageUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.postage.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取用户指定运费模板信息
    **/
    public function taobaoDeliveryTemplateGet(TaobaoDeliveryTemplateGetRequest $request) {
        return $this->client->execute("taobao.delivery.template.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取用户下所有模板
    **/
    public function taobaoDeliveryTemplatesGet(TaobaoDeliveryTemplatesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.templates.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除运费模板
    **/
    public function taobaoDeliveryTemplateDelete(TaobaoDeliveryTemplateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.template.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新增运费模板
    **/
    public function taobaoDeliveryTemplateAdd(TaobaoDeliveryTemplateAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.template.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改运费模板
    **/
    public function taobaoDeliveryTemplateUpdate(TaobaoDeliveryTemplateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.template.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新商品价格
    **/
    public function taobaoItemPriceUpdate(TaobaoItemPriceUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.price.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新商品SKU的价格
    **/
    public function taobaoItemSkuPriceUpdate(TaobaoItemSkuPriceUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.price.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
}