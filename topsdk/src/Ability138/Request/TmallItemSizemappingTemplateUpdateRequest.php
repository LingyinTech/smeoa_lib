<?php
namespace Topsdk\Topapi\Ability138\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSizemappingTemplateUpdateRequest {

    /**
        尺码表模板ID
     **/
    private $templateId;

    /**
        尺码表模板名称
     **/
    private $templateName;

    /**
        尺码表模板内容，格式为"尺码值:维度名称:数值,尺码值:维度名称:数值"。其中，数值的单位，长度单位为厘米（cm），体重单位为公斤（kg）。尺码值，维度数据不能包含数字，特殊字符。数值为0-999.9的数字，且最多一位小数。
     **/
    private $templateContent;


    public function getTemplateId() : int{
        return $this->templateId;
    }

    public function setTemplateId(int $templateId){
        $this->templateId = $templateId;
    }

    public function getTemplateName() : string{
        return $this->templateName;
    }

    public function setTemplateName(string $templateName){
        $this->templateName = $templateName;
    }

    public function getTemplateContent() : string{
        return $this->templateContent;
    }

    public function setTemplateContent(string $templateContent){
        $this->templateContent = $templateContent;
    }


    public function getApiName() : string {
        return "tmall.item.sizemapping.template.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        if (!TopUtil::checkEmpty($this->templateName)) {
            $requestParam["template_name"] = TopUtil::convertBasic($this->templateName);
        }

        if (!TopUtil::checkEmpty($this->templateContent)) {
            $requestParam["template_content"] = TopUtil::convertBasic($this->templateContent);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

