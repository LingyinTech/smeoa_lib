<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaWdkMarketingOpenDataRelationQueryRequest {

    /**
        外部数据Id
     **/
    private $outDataIds;

    /**
        数据类型：WDK_MARKET:五道口营销
     **/
    private $bizCode;

    /**
        数据子类型：ACTIVITY:营销活动数据
     **/
    private $subBizCode;


    public function getOutDataIds() : array{
        return $this->outDataIds;
    }

    public function setOutDataIds(array $outDataIds){
        $this->outDataIds = $outDataIds;
    }

    public function getBizCode() : string{
        return $this->bizCode;
    }

    public function setBizCode(string $bizCode){
        $this->bizCode = $bizCode;
    }

    public function getSubBizCode() : string{
        return $this->subBizCode;
    }

    public function setSubBizCode(string $subBizCode){
        $this->subBizCode = $subBizCode;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.open.data.relation.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->outDataIds)) {
            $requestParam["out_data_ids"] = TopUtil::convertBasicList($this->outDataIds);
        }

        if (!TopUtil::checkEmpty($this->bizCode)) {
            $requestParam["biz_code"] = TopUtil::convertBasic($this->bizCode);
        }

        if (!TopUtil::checkEmpty($this->subBizCode)) {
            $requestParam["sub_biz_code"] = TopUtil::convertBasic($this->subBizCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

