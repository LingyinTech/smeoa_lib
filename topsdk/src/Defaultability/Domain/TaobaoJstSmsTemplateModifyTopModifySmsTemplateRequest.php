<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsTemplateModifyTopModifySmsTemplateRequest {

    /**
        不能修改
     **/
    public $template_type;

    /**
        使用场景说明，可以修改
     **/
    public $remark;

    /**
        不能修改
     **/
    public $template_code;

    /**
        模板名称，可以修改
     **/
    public $template_name;

    /**
        模板内容，占位符用${}标识，可以修改
     **/
    public $template_content;


    public function getTemplateType() : int{
        return $this->template_type;
    }

    public function setTemplateType(int $templateType){
        $this->template_type = $templateType;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getTemplateCode() : string{
        return $this->template_code;
    }

    public function setTemplateCode(string $templateCode){
        $this->template_code = $templateCode;
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

