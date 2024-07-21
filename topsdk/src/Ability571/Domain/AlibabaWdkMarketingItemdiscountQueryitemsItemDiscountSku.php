<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItemdiscountQueryitemsItemDiscountSku {

    /**
        通用限购信息，-1为不限制，默认为不限制
     **/
    public $limit_info;

    /**
        淘宝item和shop的对应关系， k-itemId, v-shopId
     **/
    public $item_shop_relation;

    /**
        <优惠明细,分为单位>优惠类型为[减价],则代表直降金额[如700,表示商品直降7元];优惠券类型为[一口价],则代表一口价[如700,表示商品一口价为7元];优惠券类型为[打折],则代表折扣[如700,表示打7折]
     **/
    public $value;

    /**
        商品名称
     **/
    public $sku_name;

    /**
        商品的skuCode
     **/
    public $sku_code;

    /**
        积分值
     **/
    public $condition_num;

    /**
        积分类型
     **/
    public $condition_type;


    public function getLimitInfo() : AlibabaWdkMarketingItemdiscountQueryitemsLimitInfo{
        return $this->limit_info;
    }

    public function setLimitInfo(AlibabaWdkMarketingItemdiscountQueryitemsLimitInfo $limitInfo){
        $this->limit_info = $limitInfo;
    }

    public function getItemShopRelation() : array{
        return $this->item_shop_relation;
    }

    public function setItemShopRelation(array $itemShopRelation){
        $this->item_shop_relation = $itemShopRelation;
    }

    public function getValue() : int{
        return $this->value;
    }

    public function setValue(int $value){
        $this->value = $value;
    }

    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getConditionNum() : int{
        return $this->condition_num;
    }

    public function setConditionNum(int $conditionNum){
        $this->condition_num = $conditionNum;
    }

    public function getConditionType() : int{
        return $this->condition_type;
    }

    public function setConditionType(int $conditionType){
        $this->condition_type = $conditionType;
    }


}

