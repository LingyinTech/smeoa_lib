<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoCloudprintSingleCustomareaGetKeyResult {

    /**
        动态key的名称
     **/
    public $key_name;


    public function getKeyName() : string{
        return $this->key_name;
    }

    public function setKeyName(string $keyName){
        $this->key_name = $keyName;
    }


}

