<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuQueryCouponTemplateOperateResponse {

    /**
        模板表主键
     **/
    public $id;

    /**
        分页信息
     **/
    public $page_info;

    /**
        券圈品设置
     **/
    public $prom_act_sku_list;

    /**
        ump模板ID
     **/
    public $source_id;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPageInfo() : AlibabaWdkCouponSkuQueryPageInfo{
        return $this->page_info;
    }

    public function setPageInfo(AlibabaWdkCouponSkuQueryPageInfo $pageInfo){
        $this->page_info = $pageInfo;
    }

    public function getPromActSkuList() : array{
        return $this->prom_act_sku_list;
    }

    public function setPromActSkuList(array $promActSkuList){
        $this->prom_act_sku_list = $promActSkuList;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }


}

