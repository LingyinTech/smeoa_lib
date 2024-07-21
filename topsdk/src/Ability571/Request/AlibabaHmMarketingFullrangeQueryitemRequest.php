<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingFullrangeQueryitemActivitySkuQuery;

class AlibabaHmMarketingFullrangeQueryitemRequest {

    /**
        换购商品查询参数
     **/
    private $param0;


    public function getParam0() : AlibabaHmMarketingFullrangeQueryitemActivitySkuQuery{
        return $this->param0;
    }

    public function setParam0(AlibabaHmMarketingFullrangeQueryitemActivitySkuQuery $param0){
        $this->param0 = $param0;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.fullrange.queryitem";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

