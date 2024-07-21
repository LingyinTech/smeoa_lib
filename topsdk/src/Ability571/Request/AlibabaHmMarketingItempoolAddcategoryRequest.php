<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingItempoolAddcategoryItemPoolActivityCategory;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingItempoolAddcategoryCommonActivityParam;

class AlibabaHmMarketingItempoolAddcategoryRequest {

    /**
        类目对象
     **/
    private $itemPoolActivityCategory;

    /**
        活动对象
     **/
    private $commonActivityParam;


    public function getItemPoolActivityCategory() : AlibabaHmMarketingItempoolAddcategoryItemPoolActivityCategory{
        return $this->itemPoolActivityCategory;
    }

    public function setItemPoolActivityCategory(AlibabaHmMarketingItempoolAddcategoryItemPoolActivityCategory $itemPoolActivityCategory){
        $this->itemPoolActivityCategory = $itemPoolActivityCategory;
    }

    public function getCommonActivityParam() : AlibabaHmMarketingItempoolAddcategoryCommonActivityParam{
        return $this->commonActivityParam;
    }

    public function setCommonActivityParam(AlibabaHmMarketingItempoolAddcategoryCommonActivityParam $commonActivityParam){
        $this->commonActivityParam = $commonActivityParam;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itempool.addcategory";
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

