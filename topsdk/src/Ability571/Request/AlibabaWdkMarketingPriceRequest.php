<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaWdkMarketingPriceRequest {

    /**
        单页大小
     **/
    private $pageSize;

    /**
        页码
     **/
    private $pageIndex;

    /**
        商品sku
     **/
    private $skuCodes;

    /**
        门店标识数组
     **/
    private $shopIds;

    /**
        查询结束时间(sku_codes非空无效)
     **/
    private $endTime;

    /**
        查询开始时间(sku_codes非空无效)
     **/
    private $beginTime;


    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageIndex() : int{
        return $this->pageIndex;
    }

    public function setPageIndex(int $pageIndex){
        $this->pageIndex = $pageIndex;
    }

    public function getSkuCodes() : array{
        return $this->skuCodes;
    }

    public function setSkuCodes(array $skuCodes){
        $this->skuCodes = $skuCodes;
    }

    public function getShopIds() : array{
        return $this->shopIds;
    }

    public function setShopIds(array $shopIds){
        $this->shopIds = $shopIds;
    }

    public function getEndTime() : string{
        return $this->endTime;
    }

    public function setEndTime(string $endTime){
        $this->endTime = $endTime;
    }

    public function getBeginTime() : string{
        return $this->beginTime;
    }

    public function setBeginTime(string $beginTime){
        $this->beginTime = $beginTime;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.price";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageIndex)) {
            $requestParam["page_index"] = TopUtil::convertBasic($this->pageIndex);
        }

        if (!TopUtil::checkEmpty($this->skuCodes)) {
            $requestParam["sku_codes"] = TopUtil::convertBasicList($this->skuCodes);
        }

        if (!TopUtil::checkEmpty($this->shopIds)) {
            $requestParam["shop_ids"] = TopUtil::convertBasicList($this->shopIds);
        }

        if (!TopUtil::checkEmpty($this->endTime)) {
            $requestParam["end_time"] = TopUtil::convertBasic($this->endTime);
        }

        if (!TopUtil::checkEmpty($this->beginTime)) {
            $requestParam["begin_time"] = TopUtil::convertBasic($this->beginTime);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

