<?php
namespace Topsdk\Topapi\Ability138\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSimpleschemaAddRequest {

    /**
        根据tmall.item.add.simpleschema.get生成的商品发布规则入参数据
     **/
    private $schemaXmlFields;


    public function getSchemaXmlFields() : string{
        return $this->schemaXmlFields;
    }

    public function setSchemaXmlFields(string $schemaXmlFields){
        $this->schemaXmlFields = $schemaXmlFields;
    }


    public function getApiName() : string {
        return "tmall.item.simpleschema.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->schemaXmlFields)) {
            $requestParam["schema_xml_fields"] = TopUtil::convertBasic($this->schemaXmlFields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

