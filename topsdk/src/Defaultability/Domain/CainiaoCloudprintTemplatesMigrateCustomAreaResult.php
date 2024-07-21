<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintTemplatesMigrateCustomAreaResult {

    /**
        自定义区id
     **/
    public $custom_area_id;

    /**
        自定义区名称
     **/
    public $custom_area_name;

    /**
        自定义区url
     **/
    public $custom_area_url;

    /**
        变量
     **/
    public $keys;

    /**
        标准模板名称
     **/
    public $standard_template_id;

    /**
        标准模板url
     **/
    public $standard_template_url;

    /**
        用户模板id，等同于mystdtemplates.get中返回的用户模板id
     **/
    public $user_template_id;


    public function getCustomAreaId() : int{
        return $this->custom_area_id;
    }

    public function setCustomAreaId(int $customAreaId){
        $this->custom_area_id = $customAreaId;
    }

    public function getCustomAreaName() : string{
        return $this->custom_area_name;
    }

    public function setCustomAreaName(string $customAreaName){
        $this->custom_area_name = $customAreaName;
    }

    public function getCustomAreaUrl() : string{
        return $this->custom_area_url;
    }

    public function setCustomAreaUrl(string $customAreaUrl){
        $this->custom_area_url = $customAreaUrl;
    }

    public function getKeys() : array{
        return $this->keys;
    }

    public function setKeys(array $keys){
        $this->keys = $keys;
    }

    public function getStandardTemplateId() : int{
        return $this->standard_template_id;
    }

    public function setStandardTemplateId(int $standardTemplateId){
        $this->standard_template_id = $standardTemplateId;
    }

    public function getStandardTemplateUrl() : string{
        return $this->standard_template_url;
    }

    public function setStandardTemplateUrl(string $standardTemplateUrl){
        $this->standard_template_url = $standardTemplateUrl;
    }

    public function getUserTemplateId() : int{
        return $this->user_template_id;
    }

    public function setUserTemplateId(int $userTemplateId){
        $this->user_template_id = $userTemplateId;
    }


}

