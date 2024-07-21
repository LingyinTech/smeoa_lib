<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintCustomaresGetCustomAreaResult {

    /**
        自定义区id
     **/
    public $custom_area_id;

    /**
        自定义区url
     **/
    public $custom_area_url;

    /**
        keys
     **/
    public $keys;


    public function getCustomAreaId() : int{
        return $this->custom_area_id;
    }

    public function setCustomAreaId(int $customAreaId){
        $this->custom_area_id = $customAreaId;
    }

    public function getCustomAreaUrl() : string{
        return $this->custom_area_url;
    }

    public function setCustomAreaUrl(string $customAreaUrl){
        $this->custom_area_url = $customAreaUrl;
    }

    public function getKeys() : array{
        return $this->keys;
    }

    public function setKeys(array $keys){
        $this->keys = $keys;
    }


}

