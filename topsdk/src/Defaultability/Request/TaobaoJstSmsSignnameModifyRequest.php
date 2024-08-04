<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsSignnameModifyTopModifySmsSignRequest;

class TaobaoJstSmsSignnameModifyRequest {

    /**
        修改签名入参
     **/
    private $modifySmsSignRequest;


    public function getModifySmsSignRequest() : TaobaoJstSmsSignnameModifyTopModifySmsSignRequest{
        return $this->modifySmsSignRequest;
    }

    public function setModifySmsSignRequest(TaobaoJstSmsSignnameModifyTopModifySmsSignRequest $modifySmsSignRequest){
        $this->modifySmsSignRequest = $modifySmsSignRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.signname.modify";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->modifySmsSignRequest)) {
            $requestParam["modify_sms_sign_request"] = TopUtil::convertStruct($this->modifySmsSignRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

