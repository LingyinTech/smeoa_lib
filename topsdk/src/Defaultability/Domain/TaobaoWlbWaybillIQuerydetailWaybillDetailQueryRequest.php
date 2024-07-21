<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIQuerydetailWaybillDetailQueryRequest {

    /**
        需要查询的订单号
     **/
    public $trade_order_list;

    /**
        CP快递公司编码
     **/
    public $cp_code;

    /**
        0:根据cp_code和waybil_code查询;1:根据订单号查询(默认根据cp_code和waybill_code查询)
     **/
    public $query_by;

    /**
        电子面单单号
     **/
    public $waybill_codes;


    public function getTradeOrderList() : array{
        return $this->trade_order_list;
    }

    public function setTradeOrderList(array $tradeOrderList){
        $this->trade_order_list = $tradeOrderList;
    }

    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getQueryBy() : int{
        return $this->query_by;
    }

    public function setQueryBy(int $queryBy){
        $this->query_by = $queryBy;
    }

    public function getWaybillCodes() : array{
        return $this->waybill_codes;
    }

    public function setWaybillCodes(array $waybillCodes){
        $this->waybill_codes = $waybillCodes;
    }


}

