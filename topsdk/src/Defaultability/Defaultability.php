<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoProductGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoProductsSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoProductAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoProductImgUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoProductPropimgUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoProductUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoProductsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoLogisticsAddressReachablebatchGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsOnsaleGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemImgUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemImgDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemPropimgDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemPropimgUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkuGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkusGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoShopcatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoShopUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintStdtemplatesGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintMystdtemplatesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuSaleLinkGenRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUploadRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiProductRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemJointImgRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemJointPropimgRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsConsignModifyRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsAuthorizeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsInventoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSkusCustomGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintCustomaresGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFenxiaoOrdersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserFullinfoGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserDepartmentsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserDutysGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserInfoUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryAddRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditFastupdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoAppstoreSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoLogisticsInstantTraceSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkuDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIFullupdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIPrintRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIQuerydetailRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillICancelRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsSellerWriteoffRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsSellerSendRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsSellerOrdersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIProductRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasOrderSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemQuantityUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemBarcodeUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFulfillmentOrderAssembleRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemTemplatesGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishMarketGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTradesSoldQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcMessageProduceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserPermitRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiQueryByTradecodeRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiQueryByWaybillcodeRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintIsvtemplatesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallItemOuteridUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterUserPermissionsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemPromotionRuleGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubuserPermissionsRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRoleAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuScoresGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsOfflineSendRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsConsignResendRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureReplaceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUserinfoGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureIsreferencedGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSkusQuantityUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallItemPriceUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishSubmitRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSubmitRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemOperateDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemOperateDownshelfRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemOperateUpshelfRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishPropsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductAddSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductMatchSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaMatchRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoLogisticsOrderCreateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintIsvResourcesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFenxiaoOrderRemarkUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUserSellerGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintTemplatesMigrateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemAnchorGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPicturePicturesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPicturePicturesCountRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取一个产品的信息
    **/
    public function taobaoProductGet(TaobaoProductGetRequest $request) {
        return $this->client->execute("taobao.product.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        搜索产品信息
    **/
    public function taobaoProductsSearch(TaobaoProductsSearchRequest $request) {
        return $this->client->execute("taobao.products.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        上传一个产品，不包括产品非主图和属性图片
    **/
    public function taobaoProductAdd(TaobaoProductAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.product.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上传单张产品非主图，如果需要传多张，可调多次
    **/
    public function taobaoProductImgUpload(TaobaoProductImgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.product.img.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上传单张产品属性图片，如果需要传多张，可调多次
    **/
    public function taobaoProductPropimgUpload(TaobaoProductPropimgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.product.propimg.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改一个产品，可以修改主图，不能修改子图片
    **/
    public function taobaoProductUpdate(TaobaoProductUpdateRequest $request) {
        return $this->client->execute("taobao.product.update", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取产品列表
    **/
    public function taobaoProductsGet(TaobaoProductsGetRequest $request) {
        return $this->client->execute("taobao.products.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        批量判定服务是否可达
    **/
    public function taobaoLogisticsAddressReachablebatchGet(TaobaoLogisticsAddressReachablebatchGetRequest $request) {
        return $this->client->execute("taobao.logistics.address.reachablebatch.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取当前会话用户出售中的商品列表
    **/
    public function taobaoItemsOnsaleGet(TaobaoItemsOnsaleGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.onsale.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新商品信息
    **/
    public function taobaoItemUpdate(TaobaoItemUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加一个商品
    **/
    public function taobaoItemAdd(TaobaoItemAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加商品图片
    **/
    public function taobaoItemImgUpload(TaobaoItemImgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.img.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除商品图片
    **/
    public function taobaoItemImgDelete(TaobaoItemImgDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.img.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除属性图片
    **/
    public function taobaoItemPropimgDelete(TaobaoItemPropimgDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.propimg.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家所在分组及其已授权(广播)消息topics
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        添加或修改属性图片
    **/
    public function taobaoItemPropimgUpload(TaobaoItemPropimgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.propimg.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取SKU
    **/
    public function taobaoItemSkuGet(TaobaoItemSkuGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据商品ID列表获取SKU信息
    **/
    public function taobaoItemSkusGet(TaobaoItemSkusGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.skus.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取前台展示的店铺类目
    **/
    public function taobaoShopcatsListGet(TaobaoShopcatsListGetRequest $request) {
        return $this->client->execute("taobao.shopcats.list.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取前台展示的店铺内卖家自定义商品类目
    **/
    public function taobaoSellercatsListGet(TaobaoSellercatsListGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加卖家自定义类目
    **/
    public function taobaoSellercatsListAdd(TaobaoSellercatsListAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新卖家自定义类目
    **/
    public function taobaoSellercatsListUpdate(TaobaoSellercatsListUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新店铺基本信息
    **/
    public function taobaoShopUpdate(TaobaoShopUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.shop.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取后台供卖家发布商品的标准商品类目
    **/
    public function taobaoItemcatsGet(TaobaoItemcatsGetRequest $request) {
        return $this->client->execute("taobao.itemcats.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取所有的菜鸟标准电子面单模板
    **/
    public function cainiaoCloudprintStdtemplatesGet(CainiaoCloudprintStdtemplatesGetRequest $request) {
        return $this->client->execute("cainiao.cloudprint.stdtemplates.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取用户使用的菜鸟电子面单模板信息
    **/
    public function cainiaoCloudprintMystdtemplatesGet(CainiaoCloudprintMystdtemplatesGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.mystdtemplates.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取图片分类信息
    **/
    public function taobaoPictureCategoryGet(TaobaoPictureCategoryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.category.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务平台营销链接生成接口
    **/
    public function taobaoFuwuSaleLinkGen(TaobaoFuwuSaleLinkGenRequest $request) {
        return $this->client->execute("taobao.fuwu.sale.link.gen", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取图片信息
    **/
    public function taobaoPictureGet(TaobaoPictureGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上传单张图片
    **/
    public function taobaoPictureUpload(TaobaoPictureUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家查询物流商产品类型接口
    **/
    public function cainiaoWaybillIiProduct(CainiaoWaybillIiProductRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.product", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家取消获取的电子面单号
    **/
    public function cainiaoWaybillIiCancel(CainiaoWaybillIiCancelRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品关联子图
    **/
    public function taobaoItemJointImg(TaobaoItemJointImgRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.joint.img", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品关联属性图
    **/
    public function taobaoItemJointPropimg(TaobaoItemJointPropimgRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.joint.propimg", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改物流公司和运单号
    **/
    public function alibabaAscpLogisticsConsignModify(AlibabaAscpLogisticsConsignModifyRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.consign.modify", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商家被授权品牌列表和类目列表
    **/
    public function taobaoItemcatsAuthorizeGet(TaobaoItemcatsAuthorizeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.itemcats.authorize.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        得到当前会话用户库存中的商品列表
    **/
    public function taobaoItemsInventoryGet(TaobaoItemsInventoryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.inventory.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据外部ID取商品SKU
    **/
    public function taobaoSkusCustomGet(TaobaoSkusCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.skus.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家的自定义区模板信息
    **/
    public function cainiaoCloudprintCustomaresGet(CainiaoCloudprintCustomaresGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.customares.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询采购单信息
    **/
    public function taobaoFenxiaoOrdersGet(TaobaoFenxiaoOrdersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.fenxiao.orders.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的子账号简易信息列表
    **/
    public function taobaoSubusersGet(TaobaoSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户子账号的详细信息
    **/
    public function taobaoSubuserFullinfoGet(TaobaoSubuserFullinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.fullinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的所有部门列表
    **/
    public function taobaoSubuserDepartmentsGet(TaobaoSubuserDepartmentsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.departments.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的所有职务信息列表
    **/
    public function taobaoSubuserDutysGet(TaobaoSubuserDutysGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.dutys.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改指定账户子账号的基本信息
    **/
    public function taobaoSubuserInfoUpdate(TaobaoSubuserInfoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.info.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新增图片分类信息
    **/
    public function taobaoPictureCategoryAdd(TaobaoPictureCategoryAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.category.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        电子面单云打印接口
    **/
    public function cainiaoWaybillIiGet(CainiaoWaybillIiGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        电子面单云打印更新接口
    **/
    public function cainiaoWaybillIiUpdate(CainiaoWaybillIiUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品编辑增量更新
    **/
    public function alibabaItemEditFastupdate(AlibabaItemEditFastupdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.fastupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询appstore应用订购关系
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request) {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        物流详情查询
    **/
    public function taobaoLogisticsInstantTraceSearch(TaobaoLogisticsInstantTraceSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.instant.trace.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除SKU
    **/
    public function taobaoItemSkuDelete(TaobaoItemSkuDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取物流服务商电子面单号v1.0
    **/
    public function taobaoWlbWaybillIGet(TaobaoWlbWaybillIGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        面单信息更新接口v1.0
    **/
    public function taobaoWlbWaybillIFullupdate(TaobaoWlbWaybillIFullupdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.fullupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        打印确认接口v1.0
    **/
    public function taobaoWlbWaybillIPrint(TaobaoWlbWaybillIPrintRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.print", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查面单号状态v1.0
    **/
    public function taobaoWlbWaybillIQuerydetail(TaobaoWlbWaybillIQuerydetailRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.querydetail", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家取消获取的电子面单号v1.0
    **/
    public function taobaoWlbWaybillICancel(TaobaoWlbWaybillICancelRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家配送核销
    **/
    public function alibabaAscpLogisticsSellerWriteoff(AlibabaAscpLogisticsSellerWriteoffRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.seller.writeoff", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家配送发货
    **/
    public function alibabaAscpLogisticsSellerSend(AlibabaAscpLogisticsSellerSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.seller.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家配送核销订单列表查询
    **/
    public function alibabaAscpLogisticsSellerOrdersGet(AlibabaAscpLogisticsSellerOrdersGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.seller.orders.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家查询物流商产品类型接口
    **/
    public function taobaoWlbWaybillIProduct(TaobaoWlbWaybillIProductRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.product", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订购关系查询
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request) {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订单记录导出
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request) {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订购记录导出
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request) {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        宝贝/SKU库存修改
    **/
    public function taobaoItemQuantityUpdate(TaobaoItemQuantityUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.quantity.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新商品条形码信息
    **/
    public function taobaoItemBarcodeUpdate(TaobaoItemBarcodeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.barcode.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        拆合单结果回传接口
    **/
    public function taobaoFulfillmentOrderAssemble(TaobaoFulfillmentOrderAssembleRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.fulfillment.order.assemble", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取用户宝贝详情页模板名称
    **/
    public function taobaoItemTemplatesGet(TaobaoItemTemplatesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.templates.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家可发布商品的市场信息
    **/
    public function alibabaItemPublishMarketGet(AlibabaItemPublishMarketGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.publish.market.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据收件人信息查询交易单号
    **/
    public function taobaoTradesSoldQuery(TaobaoTradesSoldQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trades.sold.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布单条消息
    **/
    public function taobaoTmcMessageProduce(TaobaoTmcMessageProduceRequest $request) {
        return $this->client->execute("taobao.tmc.message.produce", $request->toMap(), $request->toFileParamMap());
    }
    /**
        取消用户的消息服务
    **/
    public function taobaoTmcUserCancel(TaobaoTmcUserCancelRequest $request) {
        return $this->client->execute("taobao.tmc.user.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        为已授权的用户开通消息服务
    **/
    public function taobaoTmcUserPermit(TaobaoTmcUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过订单号查询电子面单通接口
    **/
    public function cainiaoWaybillIiQueryByTradecode(CainiaoWaybillIiQueryByTradecodeRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.query.by.tradecode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过面单号查询面单打印报文
    **/
    public function cainiaoWaybillIiQueryByWaybillcode(CainiaoWaybillIiQueryByWaybillcodeRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.query.by.waybillcode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家使用的标准模板
    **/
    public function cainiaoCloudprintIsvtemplatesGet(CainiaoCloudprintIsvtemplatesGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.isvtemplates.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫商品/SKU商家编码更新接口
    **/
    public function tmallItemOuteridUpdate(TmallItemOuteridUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.outerid.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询面单服务订购及面单使用情况
    **/
    public function cainiaoWaybillIiSearch(CainiaoWaybillIiSearchRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询指定账户的子账号列表
    **/
    public function taobaoSellercenterSubusersGet(TaobaoSellercenterSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定用户的权限集合
    **/
    public function taobaoSellercenterUserPermissionsGet(TaobaoSellercenterUserPermissionsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.user.permissions.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商品已生效营销活动更新规则
    **/
    public function taobaoItemPromotionRuleGet(TaobaoItemPromotionRuleGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.promotion.rule.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询指定的子账号的权限和角色信息
    **/
    public function taobaoSellercenterSubuserPermissionsRolesGet(TaobaoSellercenterSubuserPermissionsRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subuser.permissions.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定卖家的角色列表
    **/
    public function taobaoSellercenterRolesGet(TaobaoSellercenterRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        子账号角色的新增（指定卖家）
    **/
    public function taobaoSellercenterRoleAdd(TaobaoSellercenterRoleAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.role.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务平台评价查询接口
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request) {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        自己联系物流发货
    **/
    public function alibabaAscpLogisticsOfflineSend(AlibabaAscpLogisticsOfflineSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.offline.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改物流公司和运单号
    **/
    public function alibabaAscpLogisticsConsignResend(AlibabaAscpLogisticsConsignResendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.consign.resend", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新图片分类
    **/
    public function taobaoPictureCategoryUpdate(TaobaoPictureCategoryUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.category.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        替换图片
    **/
    public function taobaoPictureReplace(TaobaoPictureReplaceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.replace", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改图片名字
    **/
    public function taobaoPictureUpdate(TaobaoPictureUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询图片空间用户的信息
    **/
    public function taobaoPictureUserinfoGet(TaobaoPictureUserinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.userinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片是否被引用
    **/
    public function taobaoPictureIsreferencedGet(TaobaoPictureIsreferencedGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.isreferenced.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        SKU库存修改
    **/
    public function taobaoSkusQuantityUpdate(TaobaoSkusQuantityUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.skus.quantity.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商品发布规则信息
    **/
    public function alibabaItemPublishSchemaGet(AlibabaItemPublishSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.publish.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫商品/SKU价格更新接口
    **/
    public function tmallItemPriceUpdate(TmallItemPriceUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.price.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品发布
    **/
    public function alibabaItemPublishSubmit(AlibabaItemPublishSubmitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.publish.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品编辑获取schema信息
    **/
    public function alibabaItemEditSchemaGet(AlibabaItemEditSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品编辑提交schema信息
    **/
    public function alibabaItemEditSubmit(AlibabaItemEditSubmitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品删除
    **/
    public function alibabaItemOperateDelete(AlibabaItemOperateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.operate.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品下架
    **/
    public function alibabaItemOperateDownshelf(AlibabaItemOperateDownshelfRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.operate.downshelf", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品上架
    **/
    public function alibabaItemOperateUpshelf(AlibabaItemOperateUpshelfRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.operate.upshelf", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品级联属性信息获取
    **/
    public function alibabaItemPublishPropsGet(AlibabaItemPublishPropsGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.publish.props.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        产品发布规则获取接口
    **/
    public function tmallProductAddSchemaGet(TmallProductAddSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.add.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取匹配产品规则
    **/
    public function tmallProductMatchSchemaGet(TmallProductMatchSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.match.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        product匹配接口
    **/
    public function tmallProductSchemaMatch(TmallProductSchemaMatchRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.match", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        使用Schema文件发布一个产品
    **/
    public function tmallProductSchemaAdd(TmallProductSchemaAddRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过主账号登陆态分页查询子账号列表
    **/
    public function taobaoSellercenterSubusersPage(TaobaoSellercenterSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建物流订单
    **/
    public function taobaoLogisticsOrderCreate(TaobaoLogisticsOrderCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.order.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        分页获取指定账户的子账号简易信息列表（新isv建议使用taobao.sellercenter.subusers.page接口）
    **/
    public function taobaoSubusersPage(TaobaoSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        isv资源查询
    **/
    public function cainiaoCloudprintIsvResourcesGet(CainiaoCloudprintIsvResourcesGetRequest $request) {
        return $this->client->execute("cainiao.cloudprint.isv.resources.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        修改采购单备注
    **/
    public function taobaoFenxiaoOrderRemarkUpdate(TaobaoFenxiaoOrderRemarkUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.fenxiao.order.remark.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询卖家用户信息
    **/
    public function taobaoUserSellerGet(TaobaoUserSellerGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.user.seller.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        云打印模板迁移接口
    **/
    public function cainiaoCloudprintTemplatesMigrate(CainiaoCloudprintTemplatesMigrateRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.templates.migrate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据当前子账号登陆态，获取该子账号基本信息
    **/
    public function taobaoSubusersInfoQuery(TaobaoSubusersInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取可用宝贝描述规范化模块
    **/
    public function taobaoItemAnchorGet(TaobaoItemAnchorGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.anchor.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片获取
    **/
    public function taobaoPicturePicturesGet(TaobaoPicturePicturesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.pictures.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片总数查询
    **/
    public function taobaoPicturePicturesCount(TaobaoPicturePicturesCountRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.pictures.count", $request->toMap(), $request->toFileParamMap(), $session);
    }
}