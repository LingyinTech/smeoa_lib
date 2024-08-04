<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsTemplateDeleteTopDeleteSmsTemplateRequest;

class TaobaoJstSmsTemplateDeleteRequest {

    /**
        删除模板的入参
     **/
    private $deleteSmsTemplateRequest;


    public function getDeleteSmsTemplateRequest() : TaobaoJstSmsTemplateDeleteTopDeleteSmsTemplateRequest{
        return $this->deleteSmsTemplateRequest;
    }

    public function setDeleteSmsTemplateRequest(TaobaoJstSmsTemplateDeleteTopDeleteSmsTemplateRequest $deleteSmsTemplateRequest){
        $this->deleteSmsTemplateRequest = $deleteSmsTemplateRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.template.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->deleteSmsTemplateRequest)) {
            $requestParam["delete_sms_template_request"] = TopUtil::convertStruct($this->deleteSmsTemplateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

