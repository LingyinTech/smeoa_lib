<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsAddressRemoveRequest {

    /**
        地址库ID
     **/
    private $contactId;


    public function getContactId() : int{
        return $this->contactId;
    }

    public function setContactId(int $contactId){
        $this->contactId = $contactId;
    }


    public function getApiName() : string {
        return "taobao.logistics.address.remove";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->contactId)) {
            $requestParam["contact_id"] = TopUtil::convertBasic($this->contactId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

