<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsTemplateModifyTopModifySmsTemplateRequest;

class TaobaoJstSmsTemplateModifyRequest {

    /**
        修改模板的入参
     **/
    private $modifySmsTemplateRequest;


    public function getModifySmsTemplateRequest() : TaobaoJstSmsTemplateModifyTopModifySmsTemplateRequest{
        return $this->modifySmsTemplateRequest;
    }

    public function setModifySmsTemplateRequest(TaobaoJstSmsTemplateModifyTopModifySmsTemplateRequest $modifySmsTemplateRequest){
        $this->modifySmsTemplateRequest = $modifySmsTemplateRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.template.modify";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->modifySmsTemplateRequest)) {
            $requestParam["modify_sms_template_request"] = TopUtil::convertStruct($this->modifySmsTemplateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

