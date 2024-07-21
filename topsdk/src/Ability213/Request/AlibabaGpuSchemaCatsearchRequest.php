<?php
namespace Topsdk\Topapi\Ability213\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaGpuSchemaCatsearchRequest {

    /**
        叶子类目ID
     **/
    private $leafCatId;

    /**
        当前页
     **/
    private $currentPage;

    /**
        每页大小
     **/
    private $pageSize;

    /**
        渠道Id，如0代表天猫，8代表淘宝
     **/
    private $providerId;


    public function getLeafCatId() : int{
        return $this->leafCatId;
    }

    public function setLeafCatId(int $leafCatId){
        $this->leafCatId = $leafCatId;
    }

    public function getCurrentPage() : int{
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage){
        $this->currentPage = $currentPage;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getProviderId() : int{
        return $this->providerId;
    }

    public function setProviderId(int $providerId){
        $this->providerId = $providerId;
    }


    public function getApiName() : string {
        return "alibaba.gpu.schema.catsearch";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->leafCatId)) {
            $requestParam["leaf_cat_id"] = TopUtil::convertBasic($this->leafCatId);
        }

        if (!TopUtil::checkEmpty($this->currentPage)) {
            $requestParam["current_page"] = TopUtil::convertBasic($this->currentPage);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->providerId)) {
            $requestParam["provider_id"] = TopUtil::convertBasic($this->providerId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

