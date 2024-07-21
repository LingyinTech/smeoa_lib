<?php
namespace Topsdk\Topapi\Ability138;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability138\Request\TaobaoItemUpdateDelistingTmallRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemSimpleschemaUpdateRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemQuantityUpdateRequest;
use Topsdk\Topapi\Ability138\Request\TaobaoItemUpdateListingTmallRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemDescModulesGetRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemSizemappingTemplatesListRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemSizemappingTemplateGetRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemSizemappingTemplateDeleteRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemSizemappingTemplateUpdateRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemSizemappingTemplateCreateRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemShiptimeUpdateRequest;
use Topsdk\Topapi\Ability138\Request\TmallItemSimpleschemaAddRequest;
use Topsdk\Topapi\Ability138\Request\TaobaoItemPermitCheckRequest;

class Ability138 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        taobao.item.update.delisting.tmall
    **/
    public function taobaoItemUpdateDelistingTmall(TaobaoItemUpdateDelistingTmallRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.update.delisting.tmall", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫简化编辑商品
    **/
    public function tmallItemSimpleschemaUpdate(TmallItemSimpleschemaUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.simpleschema.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫商品/SKU库存更新接口
    **/
    public function tmallItemQuantityUpdate(TmallItemQuantityUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.quantity.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        taobao.item.update.listing天猫分流
    **/
    public function taobaoItemUpdateListingTmall(TaobaoItemUpdateListingTmallRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.update.listing.tmall", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品描述模块信息获取
    **/
    public function tmallItemDescModulesGet(TmallItemDescModulesGetRequest $request) {
        return $this->client->execute("tmall.item.desc.modules.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取天猫商品尺码表模板列表
    **/
    public function tmallItemSizemappingTemplatesList(TmallItemSizemappingTemplatesListRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.sizemapping.templates.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取天猫商品尺码表模板
    **/
    public function tmallItemSizemappingTemplateGet(TmallItemSizemappingTemplateGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.sizemapping.template.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除天猫商品尺码表模板
    **/
    public function tmallItemSizemappingTemplateDelete(TmallItemSizemappingTemplateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.sizemapping.template.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新天猫商品尺码表模板
    **/
    public function tmallItemSizemappingTemplateUpdate(TmallItemSizemappingTemplateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.sizemapping.template.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新增天猫商品尺码表模板
    **/
    public function tmallItemSizemappingTemplateCreate(TmallItemSizemappingTemplateCreateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.sizemapping.template.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新商品发货时间
    **/
    public function tmallItemShiptimeUpdate(TmallItemShiptimeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.shiptime.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫简化发布商品
    **/
    public function tmallItemSimpleschemaAdd(TmallItemSimpleschemaAddRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.simpleschema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发品资质校验
    **/
    public function taobaoItemPermitCheck(TaobaoItemPermitCheckRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.permit.check", $request->toMap(), $request->toFileParamMap(), $session);
    }
}