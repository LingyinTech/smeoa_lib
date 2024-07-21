<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingVersionCommitSeasonVersionCommitParam {

    /**
        generate的版本号
     **/
    public $season_version;


    public function getSeasonVersion() : int{
        return $this->season_version;
    }

    public function setSeasonVersion(int $seasonVersion){
        $this->season_version = $seasonVersion;
    }


}

