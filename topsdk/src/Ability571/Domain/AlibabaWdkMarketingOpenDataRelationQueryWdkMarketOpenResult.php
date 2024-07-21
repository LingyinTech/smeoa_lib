<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenDataRelationQueryWdkMarketOpenResult {

    /**
        结果数据
     **/
    public $datas;

    /**
        错误描述
     **/
    public $message;

    /**
        错误编码
     **/
    public $error_code;


    public function getDatas() : array{
        return $this->datas;
    }

    public function setDatas(array $datas){
        $this->datas = $datas;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }


}

