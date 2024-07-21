<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenHeartbeatHeartBeatBo {

    /**
        当前版本信息
     **/
    public $version_id;

    /**
        MARKET-营销，ITEM-商品
     **/
    public $biz_code;


    public function getVersionId() : int{
        return $this->version_id;
    }

    public function setVersionId(int $versionId){
        $this->version_id = $versionId;
    }

    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }


}

