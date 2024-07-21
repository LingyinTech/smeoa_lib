<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaWdkMarketingOpenVersionCountRequest {

    /**
        查询版本号
     **/
    private $versionId;

    /**
        操作Id
     **/
    private $operateId;


    public function getVersionId() : int{
        return $this->versionId;
    }

    public function setVersionId(int $versionId){
        $this->versionId = $versionId;
    }

    public function getOperateId() : string{
        return $this->operateId;
    }

    public function setOperateId(string $operateId){
        $this->operateId = $operateId;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.open.version.count";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->versionId)) {
            $requestParam["version_id"] = TopUtil::convertBasic($this->versionId);
        }

        if (!TopUtil::checkEmpty($this->operateId)) {
            $requestParam["operate_id"] = TopUtil::convertBasic($this->operateId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

