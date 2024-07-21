<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingItemdiscountQueryitemsActivitySkuQuery;

class AlibabaWdkMarketingItemdiscountQueryitemsRequest {

    /**
        查询入参
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingItemdiscountQueryitemsActivitySkuQuery{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingItemdiscountQueryitemsActivitySkuQuery $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itemdiscount.queryitems";
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

