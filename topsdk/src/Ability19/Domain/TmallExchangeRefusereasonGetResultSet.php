<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeRefusereasonGetResultSet {

    /**
        拒绝原因列表
     **/
    public $results;

    /**
        拒绝原因总数
     **/
    public $total_results;

    /**
        异常信息
     **/
    public $exception;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }

    public function getTotalResults() : int{
        return $this->total_results;
    }

    public function setTotalResults(int $totalResults){
        $this->total_results = $totalResults;
    }

    public function getException() : array{
        return $this->exception;
    }

    public function setException(array $exception){
        $this->exception = $exception;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

