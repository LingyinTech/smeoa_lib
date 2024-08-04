<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReverseorderErpSearchErpSearchReverseOrdersRequest {

    /**
        销退单最后修改时间查询条件的结束时间
     **/
    public $end_modified_time;

    /**
        扩展字段
     **/
    public $extend_fields;

    /**
        分页信息
     **/
    public $page_no;

    /**
        分页大小
     **/
    public $page_size;

    /**
        销退单最后修改时间查询条件的开始时间
     **/
    public $start_modified_time;

    /**
        交易订单ID
     **/
    public $trade_ids;

    /**
        逆向仓储单号
     **/
    public $wlb_order_code_list;

    /**
        逆向物流单号
     **/
    public $lg_order_code_list;


    public function getEndModifiedTime() : string{
        return $this->end_modified_time;
    }

    public function setEndModifiedTime(string $endModifiedTime){
        $this->end_modified_time = $endModifiedTime;
    }

    public function getExtendFields() : array{
        return $this->extend_fields;
    }

    public function setExtendFields(array $extendFields){
        $this->extend_fields = $extendFields;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getStartModifiedTime() : string{
        return $this->start_modified_time;
    }

    public function setStartModifiedTime(string $startModifiedTime){
        $this->start_modified_time = $startModifiedTime;
    }

    public function getTradeIds() : array{
        return $this->trade_ids;
    }

    public function setTradeIds(array $tradeIds){
        $this->trade_ids = $tradeIds;
    }

    public function getWlbOrderCodeList() : array{
        return $this->wlb_order_code_list;
    }

    public function setWlbOrderCodeList(array $wlbOrderCodeList){
        $this->wlb_order_code_list = $wlbOrderCodeList;
    }

    public function getLgOrderCodeList() : array{
        return $this->lg_order_code_list;
    }

    public function setLgOrderCodeList(array $lgOrderCodeList){
        $this->lg_order_code_list = $lgOrderCodeList;
    }


}

