<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsTemplateCreateAddSmsTemplateForIsvRequest {

    /**
        0--验证码 1--短信通知 2-- 推广短信 3--国际/港澳台消息
     **/
    public $template_type;

    /**
        NORMAL -- 普通模板  DIGITAL--数字短信模板
     **/
    public $template_type_class;

    /**
        上传文件
     **/
    public $template_infos;

    /**
        使用场景说明
     **/
    public $remark;

    /**
        模板名称
     **/
    public $template_name;

    /**
        模板内容，占位符用${}标识
     **/
    public $template_content;


    public function getTemplateType() : int{
        return $this->template_type;
    }

    public function setTemplateType(int $templateType){
        $this->template_type = $templateType;
    }

    public function getTemplateTypeClass() : string{
        return $this->template_type_class;
    }

    public function setTemplateTypeClass(string $templateTypeClass){
        $this->template_type_class = $templateTypeClass;
    }

    public function getTemplateInfos() : array{
        return $this->template_infos;
    }

    public function setTemplateInfos(array $templateInfos){
        $this->template_infos = $templateInfos;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
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


}

