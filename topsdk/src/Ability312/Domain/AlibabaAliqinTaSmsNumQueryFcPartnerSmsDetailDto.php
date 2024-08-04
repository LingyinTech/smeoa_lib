<?php
namespace Topsdk\Topapi\Ability312\Domain;

class AlibabaAliqinTaSmsNumQueryFcPartnerSmsDetailDto {

    /**
        公共回传参数
     **/
    public $extend;

    /**
        短信接收号码
     **/
    public $rec_num;

    /**
        错误码
     **/
    public $result_code;

    /**
        模板编码
     **/
    public $sms_code;

    /**
        短信内容
     **/
    public $sms_content;

    /**
        短信接收时间
     **/
    public $sms_receiver_time;

    /**
        短信发送时间
     **/
    public $sms_send_time;

    /**
        发送状态 1：等待回执，2：发送失败，3：发送成功
     **/
    public $sms_status;


    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getRecNum() : string{
        return $this->rec_num;
    }

    public function setRecNum(string $recNum){
        $this->rec_num = $recNum;
    }

    public function getResultCode() : string{
        return $this->result_code;
    }

    public function setResultCode(string $resultCode){
        $this->result_code = $resultCode;
    }

    public function getSmsCode() : string{
        return $this->sms_code;
    }

    public function setSmsCode(string $smsCode){
        $this->sms_code = $smsCode;
    }

    public function getSmsContent() : string{
        return $this->sms_content;
    }

    public function setSmsContent(string $smsContent){
        $this->sms_content = $smsContent;
    }

    public function getSmsReceiverTime() : string{
        return $this->sms_receiver_time;
    }

    public function setSmsReceiverTime(string $smsReceiverTime){
        $this->sms_receiver_time = $smsReceiverTime;
    }

    public function getSmsSendTime() : string{
        return $this->sms_send_time;
    }

    public function setSmsSendTime(string $smsSendTime){
        $this->sms_send_time = $smsSendTime;
    }

    public function getSmsStatus() : int{
        return $this->sms_status;
    }

    public function setSmsStatus(int $smsStatus){
        $this->sms_status = $smsStatus;
    }


}

