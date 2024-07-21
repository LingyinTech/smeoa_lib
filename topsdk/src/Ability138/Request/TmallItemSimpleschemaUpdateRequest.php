<?php
namespace Topsdk\Topapi\Ability138\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSimpleschemaUpdateRequest {

    /**
        商品id
     **/
    private $itemId;

    /**
        编辑商品时提交的xml信息
     **/
    private $schemaXmlFields;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getSchemaXmlFields() : string{
        return $this->schemaXmlFields;
    }

    public function setSchemaXmlFields(string $schemaXmlFields){
        $this->schemaXmlFields = $schemaXmlFields;
    }


    public function getApiName() : string {
        return "tmall.item.simpleschema.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

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

