<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFulfillmentOrderAssembleOrderGroupResponse {

    /**
        入参中的groupId
     **/
    public $group_id;

    /**
        回传结果
     **/
    public $result;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息描述
     **/
    public $error_msg;


    public function getGroupId() : string{
        return $this->group_id;
    }

    public function setGroupId(string $groupId){
        $this->group_id = $groupId;
    }

    public function getResult() : bool{
        return $this->result;
    }

    public function setResult(bool $result){
        $this->result = $result;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

