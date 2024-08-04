<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsTemplateQueryAccessBaseDTO {

    /**
        0--验证码 1--短信通知 2-- 推广短信 3--国际/港澳台消息
     **/
    public $template_type;

    /**
        0--待审核  1--通过  2--拒绝
     **/
    public $template_status;

    /**
        审核意见
     **/
    public $reason;

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
        创建时间
     **/
    public $create_date;


    public function getTemplateType() : int{
        return $this->template_type;
    }

    public function setTemplateType(int $templateType){
        $this->template_type = $templateType;
    }

    public function getTemplateStatus() : int{
        return $this->template_status;
    }

    public function setTemplateStatus(int $templateStatus){
        $this->template_status = $templateStatus;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
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

    public function getCreateDate() : string{
        return $this->create_date;
    }

    public function setCreateDate(string $createDate){
        $this->create_date = $createDate;
    }


}

