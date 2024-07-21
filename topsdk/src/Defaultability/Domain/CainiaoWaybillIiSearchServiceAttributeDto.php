<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiSearchServiceAttributeDto {

    /**
        属性的值，用户实际传入的值
     **/
    public $attribute_code;

    /**
        属性的名称，可以用于前端的展示
     **/
    public $attribute_name;

    /**
        属性的类型，可能值有 [number, string, enum]
     **/
    public $attribute_type;

    /**
        枚举类型的枚举值，key为用户选中的需要传值的数据，value为对应的描述，可以作为前端的展示
     **/
    public $type_desc;


    public function getAttributeCode() : string{
        return $this->attribute_code;
    }

    public function setAttributeCode(string $attributeCode){
        $this->attribute_code = $attributeCode;
    }

    public function getAttributeName() : string{
        return $this->attribute_name;
    }

    public function setAttributeName(string $attributeName){
        $this->attribute_name = $attributeName;
    }

    public function getAttributeType() : string{
        return $this->attribute_type;
    }

    public function setAttributeType(string $attributeType){
        $this->attribute_type = $attributeType;
    }

    public function getTypeDesc() : string{
        return $this->type_desc;
    }

    public function setTypeDesc(string $typeDesc){
        $this->type_desc = $typeDesc;
    }


}

