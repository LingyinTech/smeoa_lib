<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReverseorderErpSearchPaginationResult {

    /**
        错误描述
     **/
    public $error_desc;

    /**
        总页数
     **/
    public $total_page;

    /**
        记录偏移量
     **/
    public $start;

    /**
        错误码
     **/
    public $error_code;

    /**
        总数
     **/
    public $total_count;

    /**
        数据列表
     **/
    public $data_list;

    /**
        调用是否成功
     **/
    public $request_success;

    /**
        本次分页查询的数量限制
     **/
    public $limit;


    public function getErrorDesc() : string{
        return $this->error_desc;
    }

    public function setErrorDesc(string $errorDesc){
        $this->error_desc = $errorDesc;
    }

    public function getTotalPage() : int{
        return $this->total_page;
    }

    public function setTotalPage(int $totalPage){
        $this->total_page = $totalPage;
    }

    public function getStart() : int{
        return $this->start;
    }

    public function setStart(int $start){
        $this->start = $start;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getDataList() : array{
        return $this->data_list;
    }

    public function setDataList(array $dataList){
        $this->data_list = $dataList;
    }

    public function getRequestSuccess() : bool{
        return $this->request_success;
    }

    public function setRequestSuccess(bool $requestSuccess){
        $this->request_success = $requestSuccess;
    }

    public function getLimit() : int{
        return $this->limit;
    }

    public function setLimit(int $limit){
        $this->limit = $limit;
    }


}

