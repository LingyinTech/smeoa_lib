<?php
namespace Topsdk\Topapi\Ability305;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability305\Request\TaobaoTmcQueueGetRequest;
use Topsdk\Topapi\Ability305\Request\TaobaoTmcUserTopicsGetRequest;

class Ability305 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取消息队列积压情况
    **/
    public function taobaoTmcQueueGet(TaobaoTmcQueueGetRequest $request) {
        return $this->client->execute("taobao.tmc.queue.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取用户开通的topic列表
    **/
    public function taobaoTmcUserTopicsGet(TaobaoTmcUserTopicsGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.topics.get", $request->toMap(), $request->toFileParamMap());
    }
}