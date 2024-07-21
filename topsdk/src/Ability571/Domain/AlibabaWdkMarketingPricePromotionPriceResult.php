<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingPricePromotionPriceResult {

    /**
        总数量
     **/
    public $total;

    /**
        总页数
     **/
    public $page_count;

    /**
        促销信息记录
     **/
    public $item_list;

    /**
        错误信息
     **/
    public $err_msg;

    /**
        单页数据大小
     **/
    public $page_size;

    /**
        错误编码
     **/
    public $err_code;

    /**
        是否成功
     **/
    public $success;

    /**
        页码
     **/
    public $page_index;


    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function getPageCount() : int{
        return $this->page_count;
    }

    public function setPageCount(int $pageCount){
        $this->page_count = $pageCount;
    }

    public function getItemList() : array{
        return $this->item_list;
    }

    public function setItemList(array $itemList){
        $this->item_list = $itemList;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getPageIndex() : int{
        return $this->page_index;
    }

    public function setPageIndex(int $pageIndex){
        $this->page_index = $pageIndex;
    }


}

