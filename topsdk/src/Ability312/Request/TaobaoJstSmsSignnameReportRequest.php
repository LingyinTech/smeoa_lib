<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoJstSmsSignnameReportRequest {

    /**
        上传签名入参
     **/
    private $smsSignNameRequest;


    public function getSmsSignNameRequest() : array{
        return $this->smsSignNameRequest;
    }

    public function setSmsSignNameRequest(array $smsSignNameRequest){
        $this->smsSignNameRequest = $smsSignNameRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.signname.report";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->smsSignNameRequest)) {
            $requestParam["sms_sign_name_request"] = TopUtil::convertStructList($this->smsSignNameRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

