<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingOpenVersionApplySyncVersionBo;

class AlibabaWdkMarketingOpenVersionApplyRequest {

    /**
        同步版本信息
     **/
    private $syncVersion;


    public function getSyncVersion() : AlibabaWdkMarketingOpenVersionApplySyncVersionBo{
        return $this->syncVersion;
    }

    public function setSyncVersion(AlibabaWdkMarketingOpenVersionApplySyncVersionBo $syncVersion){
        $this->syncVersion = $syncVersion;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.open.version.apply";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->syncVersion)) {
            $requestParam["sync_version"] = TopUtil::convertStruct($this->syncVersion);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

