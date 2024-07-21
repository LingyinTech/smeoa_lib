<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItempoolStairQueryitemBasePageQuery {

    /**
        当前页数
     **/
    public $current;

    /**
        分页大小
     **/
    public $page_size;


    public function getCurrent() : int{
        return $this->current;
    }

    public function setCurrent(int $current){
        $this->current = $current;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }


}

