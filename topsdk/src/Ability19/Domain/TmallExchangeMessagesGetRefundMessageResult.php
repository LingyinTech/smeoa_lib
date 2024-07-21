<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeMessagesGetRefundMessageResult {

    /**
        当前页面的留言条数
     **/
    public $page_results;

    /**
        留言记录
     **/
    public $results;

    /**
        所有留言记录数
     **/
    public $total_results;

    /**
        是否有下一页
     **/
    public $has_next;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;


    public function getPageResults() : int{
        return $this->page_results;
    }

    public function setPageResults(int $pageResults){
        $this->page_results = $pageResults;
    }

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

    public function getHasNext() : bool{
        return $this->has_next;
    }

    public function setHasNext(bool $hasNext){
        $this->has_next = $hasNext;
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

