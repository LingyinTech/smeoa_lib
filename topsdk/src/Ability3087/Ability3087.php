<?php
namespace Topsdk\Topapi\Ability3087;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability3087\Request\TaobaoTopOnceTokenGetRequest;

class Ability3087 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        网关一次性token获取
    **/
    public function taobaoTopOnceTokenGet(TaobaoTopOnceTokenGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.once.token.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}