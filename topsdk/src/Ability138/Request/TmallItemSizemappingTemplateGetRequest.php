<?php
namespace Topsdk\Topapi\Ability138\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSizemappingTemplateGetRequest {

    /**
        尺码表模板ID
     **/
    private $templateId;


    public function getTemplateId() : int{
        return $this->templateId;
    }

    public function setTemplateId(int $templateId){
        $this->templateId = $templateId;
    }


    public function getApiName() : string {
        return "tmall.item.sizemapping.template.get";
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

