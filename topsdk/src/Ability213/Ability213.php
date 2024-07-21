<?php
namespace Topsdk\Topapi\Ability213;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability213\Request\TmallItemCombineGetRequest;
use Topsdk\Topapi\Ability213\Request\AlibabaGpuAddSchemaGetRequest;
use Topsdk\Topapi\Ability213\Request\AlibabaGpuSchemaAddRequest;
use Topsdk\Topapi\Ability213\Request\AlibabaGpuUpdateSchemaGetRequest;
use Topsdk\Topapi\Ability213\Request\AlibabaGpuSchemaUpdateRequest;
use Topsdk\Topapi\Ability213\Request\AlibabaGpuSchemaCatsearchRequest;

class Ability213 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        组合商品获取接口
    **/
    public function tmallItemCombineGet(TmallItemCombineGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.combine.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取产品发布规则接口
    **/
    public function alibabaGpuAddSchemaGet(AlibabaGpuAddSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.gpu.add.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        使用schema文件发布产品
    **/
    public function alibabaGpuSchemaAdd(AlibabaGpuSchemaAddRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.gpu.schema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取产品编辑schema规则的接口
    **/
    public function alibabaGpuUpdateSchemaGet(AlibabaGpuUpdateSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.gpu.update.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        产品更新接口
    **/
    public function alibabaGpuSchemaUpdate(AlibabaGpuSchemaUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.gpu.schema.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        按类目查询spu接口
    **/
    public function alibabaGpuSchemaCatsearch(AlibabaGpuSchemaCatsearchRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.gpu.schema.catsearch", $request->toMap(), $request->toFileParamMap(), $session);
    }
}