<?php
namespace Topsdk\Topapi\Ability213\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaGpuSchemaAddRequest {

    /**
        叶子类目ID
     **/
    private $leafCatId;

    /**
        品牌ID
     **/
    private $brandId;

    /**
        根据alibaba.gpu.add.schema.get获取的规则提交上来的schema
     **/
    private $schemaXmlFields;

    /**
        当前用户所在渠道如0代表天猫，8代表淘宝
     **/
    private $providerId;


    public function getLeafCatId() : int{
        return $this->leafCatId;
    }

    public function setLeafCatId(int $leafCatId){
        $this->leafCatId = $leafCatId;
    }

    public function getBrandId() : int{
        return $this->brandId;
    }

    public function setBrandId(int $brandId){
        $this->brandId = $brandId;
    }

    public function getSchemaXmlFields() : string{
        return $this->schemaXmlFields;
    }

    public function setSchemaXmlFields(string $schemaXmlFields){
        $this->schemaXmlFields = $schemaXmlFields;
    }

    public function getProviderId() : int{
        return $this->providerId;
    }

    public function setProviderId(int $providerId){
        $this->providerId = $providerId;
    }


    public function getApiName() : string {
        return "alibaba.gpu.schema.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->leafCatId)) {
            $requestParam["leaf_cat_id"] = TopUtil::convertBasic($this->leafCatId);
        }

        if (!TopUtil::checkEmpty($this->brandId)) {
            $requestParam["brand_id"] = TopUtil::convertBasic($this->brandId);
        }

        if (!TopUtil::checkEmpty($this->schemaXmlFields)) {
            $requestParam["schema_xml_fields"] = TopUtil::convertBasic($this->schemaXmlFields);
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

