<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsSignnameCreateTopAddSmsSignRequest;

class TaobaoJstSmsSignnameCreateRequest {

    /**
        创建签名入参
     **/
    private $addSmsSignRequest;


    public function getAddSmsSignRequest() : TaobaoJstSmsSignnameCreateTopAddSmsSignRequest{
        return $this->addSmsSignRequest;
    }

    public function setAddSmsSignRequest(TaobaoJstSmsSignnameCreateTopAddSmsSignRequest $addSmsSignRequest){
        $this->addSmsSignRequest = $addSmsSignRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.signname.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->addSmsSignRequest)) {
            $requestParam["add_sms_sign_request"] = TopUtil::convertStruct($this->addSmsSignRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

