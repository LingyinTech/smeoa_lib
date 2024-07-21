<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingVersionCommitSeasonVersionCommitParam;

class AlibabaHmMarketingVersionCommitRequest {

    /**
        版本号提交参数
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingVersionCommitSeasonVersionCommitParam{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingVersionCommitSeasonVersionCommitParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.version.commit";
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

