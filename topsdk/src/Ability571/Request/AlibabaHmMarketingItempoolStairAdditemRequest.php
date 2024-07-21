<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingItempoolStairAdditemCommonActivityParam;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingItempoolStairAdditemItemPoolSku;

class AlibabaHmMarketingItempoolStairAdditemRequest {

    /**
        系统自动生成
     **/
    private $param0;

    /**
        系统自动生成
     **/
    private $param1;


    public function getParam0() : AlibabaHmMarketingItempoolStairAdditemItemPoolSku{
        return $this->param0;
    }

    public function setParam0(AlibabaHmMarketingItempoolStairAdditemItemPoolSku $param0){
        $this->param0 = $param0;
    }

    public function getParam1() : AlibabaHmMarketingItempoolStairAdditemCommonActivityParam{
        return $this->param1;
    }

    public function setParam1(AlibabaHmMarketingItempoolStairAdditemCommonActivityParam $param1){
        $this->param1 = $param1;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itempool.stair.additem";
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

