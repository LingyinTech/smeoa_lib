<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoCloudprintCustomaresGetRequest {

    /**
        用户使用的标准模板id
     **/
    private $templateId;


    public function getTemplateId() : int{
        return $this->templateId;
    }

    public function setTemplateId(int $templateId){
        $this->templateId = $templateId;
    }


    public function getApiName() : string {
        return "cainiao.cloudprint.customares.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

