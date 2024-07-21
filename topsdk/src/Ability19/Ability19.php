<?php
namespace Topsdk\Topapi\Ability19;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability19\Request\TmallExchangeConfirmConsignRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeGetRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeReceiveGetRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeReturngoodsAgreeRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeMessageAddRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeMessagesGetRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeAgreeRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeRefuseRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeReturngoodsRefuseRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeRefusereasonGetRequest;
use Topsdk\Topapi\Ability19\Request\TmallExchangeConsigngoodsRequest;

class Ability19 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        换货商家确认收货并发货
    **/
    public function tmallExchangeConfirmConsign(TmallExchangeConfirmConsignRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.confirm.consign", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取单笔换货详情
    **/
    public function tmallExchangeGet(TmallExchangeGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家查询换货列表
    **/
    public function tmallExchangeReceiveGet(TmallExchangeReceiveGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.receive.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家确认收货
    **/
    public function tmallExchangeReturngoodsAgree(TmallExchangeReturngoodsAgreeRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.returngoods.agree", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家创建换货留言
    **/
    public function tmallExchangeMessageAdd(TmallExchangeMessageAddRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.message.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询换货订单留言列表
    **/
    public function tmallExchangeMessagesGet(TmallExchangeMessagesGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.messages.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家同意换货申请
    **/
    public function tmallExchangeAgree(TmallExchangeAgreeRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.agree", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家拒绝换货申请
    **/
    public function tmallExchangeRefuse(TmallExchangeRefuseRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.refuse", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家拒绝确认收货
    **/
    public function tmallExchangeReturngoodsRefuse(TmallExchangeReturngoodsRefuseRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.returngoods.refuse", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取拒绝换货原因列表
    **/
    public function tmallExchangeRefusereasonGet(TmallExchangeRefusereasonGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.refusereason.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        卖家发货
    **/
    public function tmallExchangeConsigngoods(TmallExchangeConsigngoodsRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.exchange.consigngoods", $request->toMap(), $request->toFileParamMap(), $session);
    }
}