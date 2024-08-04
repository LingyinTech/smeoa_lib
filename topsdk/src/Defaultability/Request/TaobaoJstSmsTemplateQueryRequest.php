<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsTemplateQueryTopQuerySmsTemplateRequest;

class TaobaoJstSmsTemplateQueryRequest {

    /**
        查询短信模板的入参
     **/
    private $querySmsTemplateRequest;


    public function getQuerySmsTemplateRequest() : TaobaoJstSmsTemplateQueryTopQuerySmsTemplateRequest{
        return $this->querySmsTemplateRequest;
    }

    public function setQuerySmsTemplateRequest(TaobaoJstSmsTemplateQueryTopQuerySmsTemplateRequest $querySmsTemplateRequest){
        $this->querySmsTemplateRequest = $querySmsTemplateRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.template.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->querySmsTemplateRequest)) {
            $requestParam["query_sms_template_request"] = TopUtil::convertStruct($this->querySmsTemplateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

