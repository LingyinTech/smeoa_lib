<?php
namespace Topsdk\Topapi\Ability3087\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopOnceTokenGetRequest {

    /**
        sec_token
     **/
    private $secToken;


    public function getSecToken() : string{
        return $this->secToken;
    }

    public function setSecToken(string $secToken){
        $this->secToken = $secToken;
    }


    public function getApiName() : string {
        return "taobao.top.once.token.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->secToken)) {
            $requestParam["sec_token"] = TopUtil::convertBasic($this->secToken);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

