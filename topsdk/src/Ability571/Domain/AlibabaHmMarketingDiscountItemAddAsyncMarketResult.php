<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingDiscountItemAddAsyncMarketResult {

    /**
        处理结果
     **/
    public $message;

    /**
        错误编码
     **/
    public $error_code;

    /**
        结果数据
     **/
    public $datas;

    /**
        success
     **/
    public $success;


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

    public function getDatas() : array{
        return $this->datas;
    }

    public function setDatas(array $datas){
        $this->datas = $datas;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

