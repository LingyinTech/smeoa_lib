<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaWdkMarketingOpenDarunfaActivitySyncRequest {

    /**
        大润发活动数据
     **/
    private $activityList;

    /**
        门店Id
     **/
    private $shopId;

    /**
        版本ID
     **/
    private $versionId;


    public function getActivityList() : array{
        return $this->activityList;
    }

    public function setActivityList(array $activityList){
        $this->activityList = $activityList;
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
        return "alibaba.wdk.marketing.open.darunfa.activity.sync";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->activityList)) {
            $requestParam["activity_list"] = TopUtil::convertStructList($this->activityList);
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

