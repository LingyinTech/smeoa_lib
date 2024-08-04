<?php
namespace Topsdk\Topapi\Ability312\Domain;

class TaobaoJstSmsTemplateReportSmsTemplateRequest {

    /**
        0--验证码 1--短信通知 2-- 推广短信 3--国际/港澳台消息
     **/
    public $template_type;

    /**
        模板名称
     **/
    public $template_name;

    /**
        模板内容
     **/
    public $template_content;

    /**
        模板CODE
     **/
    public $template_code;

    /**
        描述信息
     **/
    public $desc;

    /**
        1-- 普通模板  2--数字短信模板
     **/
    public $template_class;


    public function getTemplateType() : string{
        return $this->template_type;
    }

    public function setTemplateType(string $templateType){
        $this->template_type = $templateType;
    }

    public function getTemplateName() : string{
        return $this->template_name;
    }

    public function setTemplateName(string $templateName){
        $this->template_name = $templateName;
    }

    public function getTemplateContent() : string{
        return $this->template_content;
    }

    public function setTemplateContent(string $templateContent){
        $this->template_content = $templateContent;
    }

    public function getTemplateCode() : string{
        return $this->template_code;
    }

    public function setTemplateCode(string $templateCode){
        $this->template_code = $templateCode;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getTemplateClass() : string{
        return $this->template_class;
    }

    public function setTemplateClass(string $templateClass){
        $this->template_class = $templateClass;
    }


}

