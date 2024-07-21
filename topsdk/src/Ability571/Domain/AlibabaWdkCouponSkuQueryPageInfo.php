<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkCouponSkuQueryPageInfo {

    /**
        第几页
     **/
    public $page_num;

    /**
        每页条数
     **/
    public $page_size;

    /**
        总共多少页
     **/
    public $pages;

    /**
        总共多少条
     **/
    public $total;


    public function getPageNum() : int{
        return $this->page_num;
    }

    public function setPageNum(int $pageNum){
        $this->page_num = $pageNum;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getPages() : int{
        return $this->pages;
    }

    public function setPages(int $pages){
        $this->pages = $pages;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }


}

