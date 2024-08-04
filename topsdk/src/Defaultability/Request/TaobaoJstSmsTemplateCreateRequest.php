<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsTemplateCreateAddSmsTemplateForIsvRequest;

class TaobaoJstSmsTemplateCreateRequest {

    /**
        申请模板入参
     **/
    private $smsTemplateForIsvRequest;


    public function getSmsTemplateForIsvRequest() : TaobaoJstSmsTemplateCreateAddSmsTemplateForIsvRequest{
        return $this->smsTemplateForIsvRequest;
    }

    public function setSmsTemplateForIsvRequest(TaobaoJstSmsTemplateCreateAddSmsTemplateForIsvRequest $smsTemplateForIsvRequest){
        $this->smsTemplateForIsvRequest = $smsTemplateForIsvRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.template.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->smsTemplateForIsvRequest)) {
            $requestParam["sms_template_for_isv_request"] = TopUtil::convertStruct($this->smsTemplateForIsvRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

