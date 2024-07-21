<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingItempoolAddcategoryItemPoolActivityCategory;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingItempoolAddcategoryCommonActivityParam;

class AlibabaWdkMarketingItempoolAddcategoryRequest {

    /**
        类目对象
     **/
    private $itemPoolActivityCategory;

    /**
        活动对象
     **/
    private $commonActivityParam;


    public function getItemPoolActivityCategory() : AlibabaWdkMarketingItempoolAddcategoryItemPoolActivityCategory{
        return $this->itemPoolActivityCategory;
    }

    public function setItemPoolActivityCategory(AlibabaWdkMarketingItempoolAddcategoryItemPoolActivityCategory $itemPoolActivityCategory){
        $this->itemPoolActivityCategory = $itemPoolActivityCategory;
    }

    public function getCommonActivityParam() : AlibabaWdkMarketingItempoolAddcategoryCommonActivityParam{
        return $this->commonActivityParam;
    }

    public function setCommonActivityParam(AlibabaWdkMarketingItempoolAddcategoryCommonActivityParam $commonActivityParam){
        $this->commonActivityParam = $commonActivityParam;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itempool.addcategory";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemPoolActivityCategory)) {
            $requestParam["item_pool_activity_category"] = TopUtil::convertStruct($this->itemPoolActivityCategory);
        }

        if (!TopUtil::checkEmpty($this->commonActivityParam)) {
            $requestParam["common_activity_param"] = TopUtil::convertStruct($this->commonActivityParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

