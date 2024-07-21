<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItembuygiftQueryitemsMarketPageResult {

    /**
        错误信息
     **/
    public $message;

    /**
        参加当前活动的商品总数
     **/
    public $total;

    /**
        页面大小
     **/
    public $page_size;

    /**
        错误码
     **/
    public $error_code;

    /**
        参加活动的买赠商品详情列表
     **/
    public $sku_list;

    /**
        当前分页
     **/
    public $current;

    /**
        总页数
     **/
    public $total_page;

    /**
        调用api是否成功
     **/
    public $success;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getSkuList() : array{
        return $this->sku_list;
    }

    public function setSkuList(array $skuList){
        $this->sku_list = $skuList;
    }

    public function getCurrent() : int{
        return $this->current;
    }

    public function setCurrent(int $current){
        $this->current = $current;
    }

    public function getTotalPage() : int{
        return $this->total_page;
    }

    public function setTotalPage(int $totalPage){
        $this->total_page = $totalPage;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

