<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetIdentifyLogisticsInfo {

    /**
        子订单号
     **/
    public $detail_order_id;

    /**
        物流公司
     **/
    public $logistics_company;

    /**
        阶段号
     **/
    public $stage_no;

    /**
        运单号
     **/
    public $invoice_no;

    /**
        退款单号
     **/
    public $refund_id;

    /**
        是否退货
     **/
    public $refund;


    public function getDetailOrderId() : int{
        return $this->detail_order_id;
    }

    public function setDetailOrderId(int $detailOrderId){
        $this->detail_order_id = $detailOrderId;
    }

    public function getLogisticsCompany() : string{
        return $this->logistics_company;
    }

    public function setLogisticsCompany(string $logisticsCompany){
        $this->logistics_company = $logisticsCompany;
    }

    public function getStageNo() : int{
        return $this->stage_no;
    }

    public function setStageNo(int $stageNo){
        $this->stage_no = $stageNo;
    }

    public function getInvoiceNo() : string{
        return $this->invoice_no;
    }

    public function setInvoiceNo(string $invoiceNo){
        $this->invoice_no = $invoiceNo;
    }

    public function getRefundId() : string{
        return $this->refund_id;
    }

    public function setRefundId(string $refundId){
        $this->refund_id = $refundId;
    }

    public function getRefund() : bool{
        return $this->refund;
    }

    public function setRefund(bool $refund){
        $this->refund = $refund;
    }


}

