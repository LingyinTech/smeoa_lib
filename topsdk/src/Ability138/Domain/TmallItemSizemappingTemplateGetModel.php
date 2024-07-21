<?php
namespace Topsdk\Topapi\Ability138\Domain;

class TmallItemSizemappingTemplateGetModel {

    /**
        尺码表模板内容，格式为"尺码值:维度名称:数值,尺码值:维度名称:数值"。其中，数值的单位，长度单位为厘米（cm），体重单位为公斤（kg）。
     **/
    public $template_content;

    /**
        尺码表模板名称
     **/
    public $template_name;

    /**
        尺码表模板ID
     **/
    public $template_id;


    public function getTemplateContent() : string{
        return $this->template_content;
    }

    public function setTemplateContent(string $templateContent){
        $this->template_content = $templateContent;
    }

    public function getTemplateName() : string{
        return $this->template_name;
    }

    public function setTemplateName(string $templateName){
        $this->template_name = $templateName;
    }

    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }


}

