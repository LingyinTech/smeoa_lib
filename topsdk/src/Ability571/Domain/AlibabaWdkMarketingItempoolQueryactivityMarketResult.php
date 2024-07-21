<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItempoolQueryactivityMarketResult {

    /**
        错误码
     **/
    public $error_code;

    /**
        返回的商品池活动信息
     **/
    public $data;

    /**
        查询商品是否成功
     **/
    public $success;

    /**
        错误信息
     **/
    public $message;


    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getData() : AlibabaWdkMarketingItempoolQueryactivityItemPoolActivity{
        return $this->data;
    }

    public function setData(AlibabaWdkMarketingItempoolQueryactivityItemPoolActivity $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }


}

