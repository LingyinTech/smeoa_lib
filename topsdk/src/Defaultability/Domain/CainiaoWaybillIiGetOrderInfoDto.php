<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetOrderInfoDto {

    /**
        <a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.8cf9Nj&treeId=17&articleId=105085&docType=1#2">订单渠道平台编码</a>
     **/
    public $order_channels_type;

    /**
        订单号,数量限制100，订单号（只限传入数字、字母、下划线和中划线，为避免出现冲突，请按电商平台真实订单号传入，请避免使用同个订单号重复取号）
     **/
    public $trade_order_list;

    /**
        外部电商平台交易单号集合，非必填，数量限制100
     **/
    public $out_trade_order_list;

    /**
        外部电商平台交易子单号集合，非必填，数量限制100
     **/
    public $out_trade_sub_order_list;


    public function getOrderChannelsType() : string{
        return $this->order_channels_type;
    }

    public function setOrderChannelsType(string $orderChannelsType){
        $this->order_channels_type = $orderChannelsType;
    }

    public function getTradeOrderList() : array{
        return $this->trade_order_list;
    }

    public function setTradeOrderList(array $tradeOrderList){
        $this->trade_order_list = $tradeOrderList;
    }

    public function getOutTradeOrderList() : array{
        return $this->out_trade_order_list;
    }

    public function setOutTradeOrderList(array $outTradeOrderList){
        $this->out_trade_order_list = $outTradeOrderList;
    }

    public function getOutTradeSubOrderList() : array{
        return $this->out_trade_sub_order_list;
    }

    public function setOutTradeSubOrderList(array $outTradeSubOrderList){
        $this->out_trade_sub_order_list = $outTradeSubOrderList;
    }


}

