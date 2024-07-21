<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaWdkMarketingOpenDarunfaActivitySkuSyncRequest {

    /**
        淘鲜达活动商品信息
     **/
    private $activitySkuList;

    /**
        大润发活动Id
     **/
    private $activityId;

    /**
        活动对应的门店Id
     **/
    private $shopId;

    /**
        数据版本Id
     **/
    private $versionId;


    public function getActivitySkuList() : array{
        return $this->activitySkuList;
    }

    public function setActivitySkuList(array $activitySkuList){
        $this->activitySkuList = $activitySkuList;
    }

    public function getActivityId() : string{
        return $this->activityId;
    }

    public function setActivityId(string $activityId){
        $this->activityId = $activityId;
    }

    public function getShopId() : string{
        return $this->shopId;
    }

    public function setShopId(string $shopId){
        $this->shopId = $shopId;
    }

    public function getVersionId() : int{
        return $this->versionId;
    }

    public function setVersionId(int $versionId){
        $this->versionId = $versionId;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.open.darunfa.activity.sku.sync";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->activitySkuList)) {
            $requestParam["activity_sku_list"] = TopUtil::convertStructList($this->activitySkuList);
        }

        if (!TopUtil::checkEmpty($this->activityId)) {
            $requestParam["activity_id"] = TopUtil::convertBasic($this->activityId);
        }

        if (!TopUtil::checkEmpty($this->shopId)) {
            $requestParam["shop_id"] = TopUtil::convertBasic($this->shopId);
        }

        if (!TopUtil::checkEmpty($this->versionId)) {
            $requestParam["version_id"] = TopUtil::convertBasic($this->versionId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

