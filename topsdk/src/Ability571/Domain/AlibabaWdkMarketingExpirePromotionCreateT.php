<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingExpirePromotionCreateT {

    /**
        商家code
     **/
    public $merchant_code;

    /**
        商品skucode
     **/
    public $sku_code;

    /**
        商品itemId
     **/
    public $item_id;

    /**
        门店id
     **/
    public $shop_id;

    /**
        错误码
     **/
    public $error_code;

    /**
        success
     **/
    public $success;

    /**
        错误信息
     **/
    public $error_msg;


    public function getMerchantCode() : string{
        return $this->merchant_code;
    }

    public function setMerchantCode(string $merchantCode){
        $this->merchant_code = $merchantCode;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getShopId() : string{
        return $this->shop_id;
    }

    public function setShopId(string $shopId){
        $this->shop_id = $shopId;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

