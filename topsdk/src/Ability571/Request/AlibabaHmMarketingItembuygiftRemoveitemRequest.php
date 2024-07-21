<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingItembuygiftRemoveitemItemBuyGiftSku;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingItembuygiftRemoveitemCommonActivityParam;

class AlibabaHmMarketingItembuygiftRemoveitemRequest {

    /**
        商品对象
     **/
    private $param0;

    /**
        活动基本信息
     **/
    private $param1;


    public function getParam0() : AlibabaHmMarketingItembuygiftRemoveitemItemBuyGiftSku{
        return $this->param0;
    }

    public function setParam0(AlibabaHmMarketingItembuygiftRemoveitemItemBuyGiftSku $param0){
        $this->param0 = $param0;
    }

    public function getParam1() : AlibabaHmMarketingItembuygiftRemoveitemCommonActivityParam{
        return $this->param1;
    }

    public function setParam1(AlibabaHmMarketingItembuygiftRemoveitemCommonActivityParam $param1){
        $this->param1 = $param1;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itembuygift.removeitem";
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

