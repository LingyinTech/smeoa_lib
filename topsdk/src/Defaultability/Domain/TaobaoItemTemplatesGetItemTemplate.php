<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemTemplatesGetItemTemplate {

    /**
        宝贝详情模板的名称
     **/
    public $template_name;

    /**
        宝贝模板的id
     **/
    public $template_id;

    /**
        用于区分宝贝模板属于内店和外店
     **/
    public $shop_type;


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

    public function getShopType() : int{
        return $this->shop_type;
    }

    public function setShopType(int $shopType){
        $this->shop_type = $shopType;
    }


}

