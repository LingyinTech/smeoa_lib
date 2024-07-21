<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingExpirePromotionDeleteExpirePromotionResult {

    /**
        errorMsg
     **/
    public $error_msg;

    /**
        errorCode
     **/
    public $error_code;

    /**
        itemId
     **/
    public $item_id;

    /**
        success
     **/
    public $success;

    /**
        skuCode
     **/
    public $sku_code;

    /**
        merchantCode
     **/
    public $merchant_code;

    /**
        shopId
     **/
    public $shop_id;


    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getMerchantCode() : string{
        return $this->merchant_code;
    }

    public function setMerchantCode(string $merchantCode){
        $this->merchant_code = $merchantCode;
    }

    public function getShopId() : string{
        return $this->shop_id;
    }

    public function setShopId(string $shopId){
        $this->shop_id = $shopId;
    }


}

