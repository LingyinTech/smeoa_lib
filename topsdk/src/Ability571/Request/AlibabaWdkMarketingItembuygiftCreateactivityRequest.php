<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingItembuygiftCreateactivityItemBuyGiftActivity;

class AlibabaWdkMarketingItembuygiftCreateactivityRequest {

    /**
        创建活动请求入参
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingItembuygiftCreateactivityItemBuyGiftActivity{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingItembuygiftCreateactivityItemBuyGiftActivity $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itembuygift.createactivity";
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

