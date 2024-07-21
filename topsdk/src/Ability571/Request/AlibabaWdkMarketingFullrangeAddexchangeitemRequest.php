<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingFullrangeAddexchangeitemCommonActivityParam;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingFullrangeAddexchangeitemItemStairSku;

class AlibabaWdkMarketingFullrangeAddexchangeitemRequest {

    /**
        系统自动生成
     **/
    private $param0;

    /**
        系统自动生成
     **/
    private $param1;


    public function getParam0() : AlibabaWdkMarketingFullrangeAddexchangeitemItemStairSku{
        return $this->param0;
    }

    public function setParam0(AlibabaWdkMarketingFullrangeAddexchangeitemItemStairSku $param0){
        $this->param0 = $param0;
    }

    public function getParam1() : AlibabaWdkMarketingFullrangeAddexchangeitemCommonActivityParam{
        return $this->param1;
    }

    public function setParam1(AlibabaWdkMarketingFullrangeAddexchangeitemCommonActivityParam $param1){
        $this->param1 = $param1;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.fullrange.addexchangeitem";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        if (!TopUtil::checkEmpty($this->param1)) {
            $requestParam["param1"] = TopUtil::convertStruct($this->param1);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

