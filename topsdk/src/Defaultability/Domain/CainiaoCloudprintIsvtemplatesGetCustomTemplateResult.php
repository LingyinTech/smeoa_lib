<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintIsvtemplatesGetCustomTemplateResult {

    /**
        isv模板的id
     **/
    public $isv_template_id;

    /**
        isv模板的名称
     **/
    public $isv_template_name;

    /**
        isv模板的url
     **/
    public $isv_template_url;

    /**
        模板的keys
     **/
    public $keys;

    /**
        版本号
     **/
    public $version;


    public function getIsvTemplateId() : int{
        return $this->isv_template_id;
    }

    public function setIsvTemplateId(int $isvTemplateId){
        $this->isv_template_id = $isvTemplateId;
    }

    public function getIsvTemplateName() : string{
        return $this->isv_template_name;
    }

    public function setIsvTemplateName(string $isvTemplateName){
        $this->isv_template_name = $isvTemplateName;
    }

    public function getIsvTemplateUrl() : string{
        return $this->isv_template_url;
    }

    public function setIsvTemplateUrl(string $isvTemplateUrl){
        $this->isv_template_url = $isvTemplateUrl;
    }

    public function getKeys() : array{
        return $this->keys;
    }

    public function setKeys(array $keys){
        $this->keys = $keys;
    }

    public function getVersion() : string{
        return $this->version;
    }

    public function setVersion(string $version){
        $this->version = $version;
    }


}

