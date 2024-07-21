<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenDarunfaActivitySkuSyncSyncActivitySkuResultBo {

    /**
        商品池ID
     **/
    public $pool_id;

    /**
        商品编码
     **/
    public $sku_code;

    /**
        活动Id
     **/
    public $promotion_id;

    /**
        版本Id
     **/
    public $version_id;


    public function getPoolId() : int{
        return $this->pool_id;
    }

    public function setPoolId(int $poolId){
        $this->pool_id = $poolId;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getPromotionId() : string{
        return $this->promotion_id;
    }

    public function setPromotionId(string $promotionId){
        $this->promotion_id = $promotionId;
    }

    public function getVersionId() : int{
        return $this->version_id;
    }

    public function setVersionId(int $versionId){
        $this->version_id = $versionId;
    }


}

