<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIProductWaybillProductTypeRequest {

    /**
        物流商编码CODE
     **/
    public $cp_code;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }


}

