<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoCloudprintTemplatesMigrateRequest {

    /**
        标准电子面单模板的id
     **/
    private $tempalteId;

    /**
        自定义区名称
     **/
    private $customAreaName;

    /**
        自定义区内容
     **/
    private $customAreaContent;


    public function getTempalteId() : int{
        return $this->tempalteId;
    }

    public function setTempalteId(int $tempalteId){
        $this->tempalteId = $tempalteId;
    }

    public function getCustomAreaName() : string{
        return $this->customAreaName;
    }

    public function setCustomAreaName(string $customAreaName){
        $this->customAreaName = $customAreaName;
    }

    public function getCustomAreaContent() : string{
        return $this->customAreaContent;
    }

    public function setCustomAreaContent(string $customAreaContent){
        $this->customAreaContent = $customAreaContent;
    }


    public function getApiName() : string {
        return "cainiao.cloudprint.templates.migrate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tempalteId)) {
            $requestParam["tempalte_id"] = TopUtil::convertBasic($this->tempalteId);
        }

        if (!TopUtil::checkEmpty($this->customAreaName)) {
            $requestParam["custom_area_name"] = TopUtil::convertBasic($this->customAreaName);
        }

        if (!TopUtil::checkEmpty($this->customAreaContent)) {
            $requestParam["custom_area_content"] = TopUtil::convertBasic($this->customAreaContent);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

