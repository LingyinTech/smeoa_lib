<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkTradeDiscountBillGetOrderDiscountBillQueryRequest {

    /**
        查询结束时间
     **/
    public $end_time;

    /**
        传入上一次查询结果的next_id，第一次查询时传0
     **/
    public $next_id;

    /**
        每页数量
     **/
    public $page_size;

    /**
        查询开始时间
     **/
    public $start_time;

    /**
        经营店id，store_id和out_shop_code不能同时为空
     **/
    public $store_id;

    /**
        订单渠道 1代表"轻POS",2代表"淘鲜达",默认为 1
     **/
    public $order_channel;

    /**
        外部门店编码
     **/
    public $out_shop_code;


    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getNextId() : int{
        return $this->next_id;
    }

    public function setNextId(int $nextId){
        $this->next_id = $nextId;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getStoreId() : string{
        return $this->store_id;
    }

    public function setStoreId(string $storeId){
        $this->store_id = $storeId;
    }

    public function getOrderChannel() : int{
        return $this->order_channel;
    }

    public function setOrderChannel(int $orderChannel){
        $this->order_channel = $orderChannel;
    }

    public function getOutShopCode() : string{
        return $this->out_shop_code;
    }

    public function setOutShopCode(string $outShopCode){
        $this->out_shop_code = $outShopCode;
    }


}

