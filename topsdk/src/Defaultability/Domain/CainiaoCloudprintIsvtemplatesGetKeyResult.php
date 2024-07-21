<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintIsvtemplatesGetKeyResult {

    /**
        key名称
     **/
    public $key_name;


    public function getKeyName() : string{
        return $this->key_name;
    }

    public function setKeyName(string $keyName){
        $this->key_name = $keyName;
    }


}

