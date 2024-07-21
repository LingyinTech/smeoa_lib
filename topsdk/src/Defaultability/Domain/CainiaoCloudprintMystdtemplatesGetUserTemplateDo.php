<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintMystdtemplatesGetUserTemplateDo {

    /**
        keys
     **/
    public $keys;

    /**
        用户使用模板的url
     **/
    public $user_std_template_url;

    /**
        用户使用模板的id
     **/
    public $user_std_template_id;

    /**
        用户使用模板名称
     **/
    public $user_std_template_name;

    /**
        品牌 code
     **/
    public $brand_code;


    public function getKeys() : array{
        return $this->keys;
    }

    public function setKeys(array $keys){
        $this->keys = $keys;
    }

    public function getUserStdTemplateUrl() : string{
        return $this->user_std_template_url;
    }

    public function setUserStdTemplateUrl(string $userStdTemplateUrl){
        $this->user_std_template_url = $userStdTemplateUrl;
    }

    public function getUserStdTemplateId() : int{
        return $this->user_std_template_id;
    }

    public function setUserStdTemplateId(int $userStdTemplateId){
        $this->user_std_template_id = $userStdTemplateId;
    }

    public function getUserStdTemplateName() : string{
        return $this->user_std_template_name;
    }

    public function setUserStdTemplateName(string $userStdTemplateName){
        $this->user_std_template_name = $userStdTemplateName;
    }

    public function getBrandCode() : string{
        return $this->brand_code;
    }

    public function setBrandCode(string $brandCode){
        $this->brand_code = $brandCode;
    }


}

