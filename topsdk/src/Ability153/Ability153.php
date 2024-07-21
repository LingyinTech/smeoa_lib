<?php
namespace Topsdk\Topapi\Ability153;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability153\Request\CainiaoWaybillIiDeliveryRequest;
use Topsdk\Topapi\Ability153\Request\CainiaoReachableBatchjudgeRequest;
use Topsdk\Topapi\Ability153\Request\CainiaoWaybillIiConfirmRequest;
use Topsdk\Topapi\Ability153\Request\CainiaoWaybillIiLogisticsdetailUrlGetRequest;
use Topsdk\Topapi\Ability153\Request\CainiaoWaybillPrivacySubscriptionGetRequest;
use Topsdk\Topapi\Ability153\Request\CainiaoWaybillPrivacySellerOrderGetRequest;

class Ability153 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        派件通知接口
    **/
    public function cainiaoWaybillIiDelivery(CainiaoWaybillIiDeliveryRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.delivery", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        是否派送可达判定批量查询接口
    **/
    public function cainiaoReachableBatchjudge(CainiaoReachableBatchjudgeRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.reachable.batchjudge", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        物流订单确认接口
    **/
    public function cainiaoWaybillIiConfirm(CainiaoWaybillIiConfirmRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.confirm", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        电子面单物流详情授权url获取
    **/
    public function cainiaoWaybillIiLogisticsdetailUrlGet(CainiaoWaybillIiLogisticsdetailUrlGetRequest $request) {
        return $this->client->execute("cainiao.waybill.ii.logisticsdetail.url.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        隐私面单商家订购查询
    **/
    public function cainiaoWaybillPrivacySubscriptionGet(CainiaoWaybillPrivacySubscriptionGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.privacy.subscription.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        隐私面单商家订单查询
    **/
    public function cainiaoWaybillPrivacySellerOrderGet(CainiaoWaybillPrivacySellerOrderGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.privacy.seller.order.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}