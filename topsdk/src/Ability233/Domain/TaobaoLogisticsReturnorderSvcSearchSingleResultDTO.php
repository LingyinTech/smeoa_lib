<?php
namespace Topsdk\Topapi\Ability233\Domain;

class TaobaoLogisticsReturnorderSvcSearchSingleResultDTO {

    /**
        错误码
     **/
    public $err_code;

    /**
        错误描述
     **/
    public $err_desc;

    /**
        数据
     **/
    public $return_order_list;

    /**
        调用结果
     **/
    public $success;


    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrDesc() : string{
        return $this->err_desc;
    }

    public function setErrDesc(string $errDesc){
        $this->err_desc = $errDesc;
    }

    public function getReturnOrderList() : array{
        return $this->return_order_list;
    }

    public function setReturnOrderList(array $returnOrderList){
        $this->return_order_list = $returnOrderList;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

