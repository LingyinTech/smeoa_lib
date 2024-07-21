<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingVersionCommitSeasonVersionCommitParam;

class AlibabaWdkMarketingVersionCommitRequest {

    /**
        版本号提交参数
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingVersionCommitSeasonVersionCommitParam{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingVersionCommitSeasonVersionCommitParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.version.commit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

