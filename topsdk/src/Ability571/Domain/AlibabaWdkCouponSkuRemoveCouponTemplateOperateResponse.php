<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuRemoveCouponTemplateOperateResponse {

    /**
        创建结果
     **/
    public $fail_elements;

    /**
        模板表主键
     **/
    public $id;

    /**
        ump模板ID
     **/
    public $source_id;


    public function getFailElements() : array{
        return $this->fail_elements;
    }

    public function setFailElements(array $failElements){
        $this->fail_elements = $failElements;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getSourceId() : int{
        return $this->source_id;
    }

    public function setSourceId(int $sourceId){
        $this->source_id = $sourceId;
    }


}

