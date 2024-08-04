<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsFulfilorderSearchErpSearchFulfilOrdersRequest {

    /**
        单据修改的结束时间。开始和结束时间必须成对出现；开始时间 到 结束时间 不能超过 30 分钟。时间范围查询和交易单号查询只能选择一个，不能同时传入。在传入的时间范围内，最多支持翻页到5000条数据，超过则需要自己缩减时间范围
     **/
    public $end_modify_time;

    /**
        单据修改的开始时间。开始和结束时间必须成对出现；开始时间 到 结束时间 不能超过 30 分钟。时间范围查询和交易单号查询只能选择一个，不能同时传入。在传入的时间范围内，最多支持翻页到5000条数据，超过则需要自己缩减时间范围
     **/
    public $start_modify_time;

    /**
        页码。必须为正数
     **/
    public $page_no;

    /**
        交易单号列表
     **/
    public $trade_id_list;

    /**
        分页大小。范围 1-100
     **/
    public $page_size;


    public function getEndModifyTime() : string{
        return $this->end_modify_time;
    }

    public function setEndModifyTime(string $endModifyTime){
        $this->end_modify_time = $endModifyTime;
    }

    public function getStartModifyTime() : string{
        return $this->start_modify_time;
    }

    public function setStartModifyTime(string $startModifyTime){
        $this->start_modify_time = $startModifyTime;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getTradeIdList() : array{
        return $this->trade_id_list;
    }

    public function setTradeIdList(array $tradeIdList){
        $this->trade_id_list = $tradeIdList;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }


}

