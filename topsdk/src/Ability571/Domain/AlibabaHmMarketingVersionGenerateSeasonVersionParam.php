<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingVersionGenerateSeasonVersionParam {

    /**
        商家档期号
     **/
    public $out_season_id;

    /**
        参与换挡的门店列表
     **/
    public $shop_ids;


    public function getOutSeasonId() : string{
        return $this->out_season_id;
    }

    public function setOutSeasonId(string $outSeasonId){
        $this->out_season_id = $outSeasonId;
    }

    public function getShopIds() : array{
        return $this->shop_ids;
    }

    public function setShopIds(array $shopIds){
        $this->shop_ids = $shopIds;
    }


}

