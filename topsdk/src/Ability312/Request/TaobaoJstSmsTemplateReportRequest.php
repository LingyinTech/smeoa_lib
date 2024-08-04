<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoJstSmsTemplateReportRequest {

    /**
        存量短信模板上报入参
     **/
    private $smsTemplateRequest;


    public function getSmsTemplateRequest() : array{
        return $this->smsTemplateRequest;
    }

    public function setSmsTemplateRequest(array $smsTemplateRequest){
        $this->smsTemplateRequest = $smsTemplateRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.template.report";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->smsTemplateRequest)) {
            $requestParam["sms_template_request"] = TopUtil::convertStructList($this->smsTemplateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

