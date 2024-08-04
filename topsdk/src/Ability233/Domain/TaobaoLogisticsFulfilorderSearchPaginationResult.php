<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsFulfilorderSearchPaginationResult {

    /**
        错误描述
     **/
    public $err_desc;

    /**
        分页查询结果的开始下标
     **/
    public $start;

    /**
        错误码
     **/
    public $err_code;

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

    /**
        当前查询条件下的总页数。可以使用 查询页数 >= 总页数 作为当前查询入参（不包含页数）的结束条件
     **/
    public $total_page;


    public function getErrDesc() : string{
        return $this->err_desc;
    }

    public function setErrDesc(string $errDesc){
        $this->err_desc = $errDesc;
    }

    public function getStart() : int{
        return $this->start;
    }

    public function setStart(int $start){
        $this->start = $start;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
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

    public function getTotalPage() : int{
        return $this->total_page;
    }

    public function setTotalPage(int $totalPage){
        $this->total_page = $totalPage;
    }


}

