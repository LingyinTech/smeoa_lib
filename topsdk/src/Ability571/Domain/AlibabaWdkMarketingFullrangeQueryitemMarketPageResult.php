<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingFullrangeQueryitemMarketPageResult {

    /**
        总数
     **/
    public $total;

    /**
        查询结果信息
     **/
    public $message;

    /**
        当前页数
     **/
    public $current;

    /**
        查询结果数据
     **/
    public $sku_list;

    /**
        错误码
     **/
    public $error_code;

    /**
        页数size
     **/
    public $page_size;

    /**
        是否成功
     **/
    public $success;

    /**
        总页数
     **/
    public $total_page;


    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getCurrent() : int{
        return $this->current;
    }

    public function setCurrent(int $current){
        $this->current = $current;
    }

    public function getSkuList() : array{
        return $this->sku_list;
    }

    public function setSkuList(array $skuList){
        $this->sku_list = $skuList;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getTotalPage() : int{
        return $this->total_page;
    }

    public function setTotalPage(int $totalPage){
        $this->total_page = $totalPage;
    }


}

