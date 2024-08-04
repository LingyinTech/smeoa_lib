<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetCombineLogisticsDetail {

    /**
        运单号
     **/
    public $invoice_no;

    /**
        物流公司
     **/
    public $logistics_company;

    /**
        子订单id
     **/
    public $sub_order_id;

    /**
        包裹详情（仅支持成分品）
     **/
    public $send_goods_details;


    public function getInvoiceNo() : string{
        return $this->invoice_no;
    }

    public function setInvoiceNo(string $invoiceNo){
        $this->invoice_no = $invoiceNo;
    }

    public function getLogisticsCompany() : string{
        return $this->logistics_company;
    }

    public function setLogisticsCompany(string $logisticsCompany){
        $this->logistics_company = $logisticsCompany;
    }

    public function getSubOrderId() : string{
        return $this->sub_order_id;
    }

    public function setSubOrderId(string $subOrderId){
        $this->sub_order_id = $subOrderId;
    }

    public function getSendGoodsDetails() : array{
        return $this->send_goods_details;
    }

    public function setSendGoodsDetails(array $sendGoodsDetails){
        $this->send_goods_details = $sendGoodsDetails;
    }


}

