<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintStdtemplatesGetStandardTemplateResult {

    /**
        cp编码
     **/
    public $cp_code;

    /**
        该cp的所有标准模板
     **/
    public $standard_templates;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getStandardTemplates() : array{
        return $this->standard_templates;
    }

    public function setStandardTemplates(array $standardTemplates){
        $this->standard_templates = $standardTemplates;
    }


}

