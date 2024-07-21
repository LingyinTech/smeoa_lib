<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenDarunfaActivitySyncSyncActivityResultBo {

    /**
        门店ID
     **/
    public $store_ids;

    /**
        版本ID
     **/
    public $version_id;

    /**
        大润发活动ID
     **/
    public $promotion_id;


    public function getStoreIds() : string{
        return $this->store_ids;
    }

    public function setStoreIds(string $storeIds){
        $this->store_ids = $storeIds;
    }

    public function getVersionId() : int{
        return $this->version_id;
    }

    public function setVersionId(int $versionId){
        $this->version_id = $versionId;
    }

    public function getPromotionId() : string{
        return $this->promotion_id;
    }

    public function setPromotionId(string $promotionId){
        $this->promotion_id = $promotionId;
    }


}

