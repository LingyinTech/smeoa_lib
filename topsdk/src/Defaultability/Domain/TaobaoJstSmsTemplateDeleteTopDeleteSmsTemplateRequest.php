<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsTemplateDeleteTopDeleteSmsTemplateRequest {

    /**
        待删除的模板code
     **/
    public $template_code;


    public function getTemplateCode() : string{
        return $this->template_code;
    }

    public function setTemplateCode(string $templateCode){
        $this->template_code = $templateCode;
    }


}

