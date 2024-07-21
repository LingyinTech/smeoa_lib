<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintMystdtemplatesGetUserTemplateResult {

    /**
        cp编码
     **/
    public $cp_code;

    /**
        用户使用的模板数据
     **/
    public $user_std_templates;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getUserStdTemplates() : array{
        return $this->user_std_templates;
    }

    public function setUserStdTemplates(array $userStdTemplates){
        $this->user_std_templates = $userStdTemplates;
    }


}

