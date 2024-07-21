<?php
namespace Topsdk\Topapi\Ability213\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaGpuSchemaUpdateRequest {

    /**
        产品ID
     **/
    private $productId;

    /**
        更新产品提交的schema数据
     **/
    private $schemaXmlFields;

    /**
        当前用户所在渠道如0代表天猫，8代表淘宝
     **/
    private $providerId;


    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
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
        return "alibaba.gpu.schema.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
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

