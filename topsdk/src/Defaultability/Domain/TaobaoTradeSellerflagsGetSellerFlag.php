<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTradeSellerflagsGetSellerFlag {

    /**
        卖家ID
     **/
    public $seller_id;

    /**
        插旗ID
     **/
    public $flag_id;

    /**
        插旗备注
     **/
    public $tag_content;


    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getFlagId() : int{
        return $this->flag_id;
    }

    public function setFlagId(int $flagId){
        $this->flag_id = $flagId;
    }

    public function getTagContent() : string{
        return $this->tag_content;
    }

    public function setTagContent(string $tagContent){
        $this->tag_content = $tagContent;
    }


}

