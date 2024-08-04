<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoJstSmsSignnameQueryTopQuerySmsSignRequest;

class TaobaoJstSmsSignnameQueryRequest {

    /**
        签名查询的入参
     **/
    private $querySmsSignRequest;


    public function getQuerySmsSignRequest() : TaobaoJstSmsSignnameQueryTopQuerySmsSignRequest{
        return $this->querySmsSignRequest;
    }

    public function setQuerySmsSignRequest(TaobaoJstSmsSignnameQueryTopQuerySmsSignRequest $querySmsSignRequest){
        $this->querySmsSignRequest = $querySmsSignRequest;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.signname.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->querySmsSignRequest)) {
            $requestParam["query_sms_sign_request"] = TopUtil::convertStruct($this->querySmsSignRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

