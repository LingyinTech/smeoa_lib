<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsAddressReachablebatchGetRequest {

    /**
        筛单用户输入地址结构
     **/
    private $addressList;


    public function getAddressList() : array{
        return $this->addressList;
    }

    public function setAddressList(array $addressList){
        $this->addressList = $addressList;
    }


    public function getApiName() : string {
        return "taobao.logistics.address.reachablebatch.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->addressList)) {
            $requestParam["address_list"] = TopUtil::convertStructList($this->addressList);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

