<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintStdtemplatesGetStandardTemplateDo {

    /**
        模板id
     **/
    public $standard_template_id;

    /**
        模板名称
     **/
    public $standard_template_name;

    /**
        模板url
     **/
    public $standard_template_url;

    /**
        1 快递标准面单 ,2 快递三联面单, 3 快递便携式三联单, 4 快运标准面单, 5 快运三联面单, 6 快递一联单,7 快递蓝牙标准面单,8 快递蓝牙一联单,9 快运一联单,10 快运二联
     **/
    public $standard_waybill_type;

    /**
        如果没有 brandCode,则为 default
     **/
    public $brand_code;


    public function getStandardTemplateId() : int{
        return $this->standard_template_id;
    }

    public function setStandardTemplateId(int $standardTemplateId){
        $this->standard_template_id = $standardTemplateId;
    }

    public function getStandardTemplateName() : string{
        return $this->standard_template_name;
    }

    public function setStandardTemplateName(string $standardTemplateName){
        $this->standard_template_name = $standardTemplateName;
    }

    public function getStandardTemplateUrl() : string{
        return $this->standard_template_url;
    }

    public function setStandardTemplateUrl(string $standardTemplateUrl){
        $this->standard_template_url = $standardTemplateUrl;
    }

    public function getStandardWaybillType() : int{
        return $this->standard_waybill_type;
    }

    public function setStandardWaybillType(int $standardWaybillType){
        $this->standard_waybill_type = $standardWaybillType;
    }

    public function getBrandCode() : string{
        return $this->brand_code;
    }

    public function setBrandCode(string $brandCode){
        $this->brand_code = $brandCode;
    }


}

