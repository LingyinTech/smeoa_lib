<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingVersionGenerateSeasonVersionParam;

class AlibabaHmMarketingVersionGenerateRequest {

    /**
        档期版本号参数信息
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingVersionGenerateSeasonVersionParam{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingVersionGenerateSeasonVersionParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.version.generate";
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

