<?php
namespace Topsdk\Topapi\Ability229\Request;
use Topsdk\Topapi\TopUtil;

class CainiaoCloudprintSingleCustomareaGetRequest {

    /**
        这是商家用户id
     **/
    private $sellerId;


    public function getSellerId() : int{
        return $this->sellerId;
    }

    public function setSellerId(int $sellerId){
        $this->sellerId = $sellerId;
    }


    public function getApiName() : string {
        return "cainiao.cloudprint.single.customarea.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->sellerId)) {
            $requestParam["seller_id"] = TopUtil::convertBasic($this->sellerId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

