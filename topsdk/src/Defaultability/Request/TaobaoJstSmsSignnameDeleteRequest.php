<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsSignnameDeleteTopDeleteSmsSignRequest;

class TaobaoJstSmsSignnameDeleteRequest {

    /**
        删除签名入参
     **/
    private $deleteSmsSignRequest;


    public function getDeleteSmsSignRequest() : TaobaoJstSmsSignnameDeleteTopDeleteSmsSignRequest{
        return $this->deleteSmsSignRequest;
    }

    public function setDeleteSmsSignRequest(TaobaoJstSmsSignnameDeleteTopDeleteSmsSignRequest $deleteSmsSignRequest){
        $this->deleteSmsSignRequest = $deleteSmsSignRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.signname.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->deleteSmsSignRequest)) {
            $requestParam["delete_sms_sign_request"] = TopUtil::convertStruct($this->deleteSmsSignRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

