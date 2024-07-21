<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingBuygiftItemRemoveAsyncCommonActivityParam;

class AlibabaHmMarketingBuygiftItemRemoveAsyncRequest {

    /**
        sku信息
     **/
    private $param0;

    /**
        系统自动生成
     **/
    private $param1;

    /**
        alibaba.wdk.marketing.version.generate接口生成
     **/
    private $version;


    public function getParam0() : array{
        return $this->param0;
    }

    public function setParam0(array $param0){
        $this->param0 = $param0;
    }

    public function getParam1() : AlibabaHmMarketingBuygiftItemRemoveAsyncCommonActivityParam{
        return $this->param1;
    }

    public function setParam1(AlibabaHmMarketingBuygiftItemRemoveAsyncCommonActivityParam $param1){
        $this->param1 = $param1;
    }

    public function getVersion() : int{
        return $this->version;
    }

    public function setVersion(int $version){
        $this->version = $version;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.buygift.item.remove.async";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStructList($this->param0);
        }

        if (!TopUtil::checkEmpty($this->param1)) {
            $requestParam["param1"] = TopUtil::convertStruct($this->param1);
        }

        if (!TopUtil::checkEmpty($this->version)) {
            $requestParam["version"] = TopUtil::convertBasic($this->version);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

