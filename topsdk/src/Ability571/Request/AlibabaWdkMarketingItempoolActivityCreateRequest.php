<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingItempoolActivityCreateItemPoolActivity;

class AlibabaWdkMarketingItempoolActivityCreateRequest {

    /**
        创建活动请求入参
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingItempoolActivityCreateItemPoolActivity{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingItempoolActivityCreateItemPoolActivity $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itempool.activity.create";
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

