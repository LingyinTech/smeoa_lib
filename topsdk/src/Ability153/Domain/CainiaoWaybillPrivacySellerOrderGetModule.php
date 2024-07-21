<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoWaybillPrivacySellerOrderGetModule {

    /**
        商家ID
     **/
    public $seller_id;

    /**
        隐私次数
     **/
    public $privacy_count;

    /**
        日期
     **/
    public $order_date;

    /**
        订单渠道
     **/
    public $order_channel;

    /**
        店铺id
     **/
    public $shop_id;


    public function getSellerId() : string{
        return $this->seller_id;
    }

    public function setSellerId(string $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getPrivacyCount() : int{
        return $this->privacy_count;
    }

    public function setPrivacyCount(int $privacyCount){
        $this->privacy_count = $privacyCount;
    }

    public function getOrderDate() : string{
        return $this->order_date;
    }

    public function setOrderDate(string $orderDate){
        $this->order_date = $orderDate;
    }

    public function getOrderChannel() : string{
        return $this->order_channel;
    }

    public function setOrderChannel(string $orderChannel){
        $this->order_channel = $orderChannel;
    }

    public function getShopId() : string{
        return $this->shop_id;
    }

    public function setShopId(string $shopId){
        $this->shop_id = $shopId;
    }


}

