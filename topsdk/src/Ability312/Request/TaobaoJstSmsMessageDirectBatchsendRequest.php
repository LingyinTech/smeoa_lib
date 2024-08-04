<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoJstSmsMessageDirectBatchsendRequest {

    /**
        短信签名（如果是通过OAID发送短信则签名需要是数组格式，数组长度需要和OAID数量保持一致。）
     **/
    private $signName;

    /**
        废弃字段
     **/
    private $url;

    /**
        短信模版Code（明文发送短信和OAID发送均不要传数组格式）
     **/
    private $smsTemplateCode;

    /**
        短信接收号码，json格式，最多200个号码
     **/
    private $recNum;

    /**
        模板参数替换方式："[{\"msg\":\"hello1\",\"date\":\"2021-12-03\"},{\"msg\":\"hello2\",\"date\":\"2021-12-04\"},{\"msg\":\"hello3\",\"date\":\"2021-12-05\"}]"
     **/
    private $smsContent;

    /**
        短信扩展码（JSON字符串数组格式），拓展码个数需要和电话号码个数一致。
     **/
    private $extendNum;

    /**
        废弃字段
     **/
    private $taskCode;

    /**
        对于taskSign相同的请求平台认为是商家的同一次短信发送，可用于对OAID的明文号码去重。
     **/
    private $taskSign;

    /**
        OAID批量发短信的入参，传该参数的时候rec_num不需要传，最大50个。
     **/
    private $oaids;

    /**
        OAID批量发短信时必传，为OAID一一对应的订单ID。
     **/
    private $orderIds;

    /**
        如果传，必须是一个JSON对象格式的字符串。
     **/
    private $extraData;


    public function getSignName() : string{
        return $this->signName;
    }

    public function setSignName(string $signName){
        $this->signName = $signName;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getSmsTemplateCode() : string{
        return $this->smsTemplateCode;
    }

    public function setSmsTemplateCode(string $smsTemplateCode){
        $this->smsTemplateCode = $smsTemplateCode;
    }

    public function getRecNum() : string{
        return $this->recNum;
    }

    public function setRecNum(string $recNum){
        $this->recNum = $recNum;
    }

    public function getSmsContent() : string{
        return $this->smsContent;
    }

    public function setSmsContent(string $smsContent){
        $this->smsContent = $smsContent;
    }

    public function getExtendNum() : string{
        return $this->extendNum;
    }

    public function setExtendNum(string $extendNum){
        $this->extendNum = $extendNum;
    }

    public function getTaskCode() : string{
        return $this->taskCode;
    }

    public function setTaskCode(string $taskCode){
        $this->taskCode = $taskCode;
    }

    public function getTaskSign() : string{
        return $this->taskSign;
    }

    public function setTaskSign(string $taskSign){
        $this->taskSign = $taskSign;
    }

    public function getOaids() : string{
        return $this->oaids;
    }

    public function setOaids(string $oaids){
        $this->oaids = $oaids;
    }

    public function getOrderIds() : string{
        return $this->orderIds;
    }

    public function setOrderIds(string $orderIds){
        $this->orderIds = $orderIds;
    }

    public function getExtraData() : string{
        return $this->extraData;
    }

    public function setExtraData(string $extraData){
        $this->extraData = $extraData;
    }


    public function getApiName() : string {
        return "taobao.jst.sms.message.direct.batchsend";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->signName)) {
            $requestParam["sign_name"] = TopUtil::convertBasic($this->signName);
        }

        if (!TopUtil::checkEmpty($this->url)) {
            $requestParam["url"] = TopUtil::convertBasic($this->url);
        }

        if (!TopUtil::checkEmpty($this->smsTemplateCode)) {
            $requestParam["sms_template_code"] = TopUtil::convertBasic($this->smsTemplateCode);
        }

        if (!TopUtil::checkEmpty($this->recNum)) {
            $requestParam["rec_num"] = TopUtil::convertBasic($this->recNum);
        }

        if (!TopUtil::checkEmpty($this->smsContent)) {
            $requestParam["sms_content"] = TopUtil::convertBasic($this->smsContent);
        }

        if (!TopUtil::checkEmpty($this->extendNum)) {
            $requestParam["extend_num"] = TopUtil::convertBasic($this->extendNum);
        }

        if (!TopUtil::checkEmpty($this->taskCode)) {
            $requestParam["task_code"] = TopUtil::convertBasic($this->taskCode);
        }

        if (!TopUtil::checkEmpty($this->taskSign)) {
            $requestParam["task_sign"] = TopUtil::convertBasic($this->taskSign);
        }

        if (!TopUtil::checkEmpty($this->oaids)) {
            $requestParam["oaids"] = TopUtil::convertBasic($this->oaids);
        }

        if (!TopUtil::checkEmpty($this->orderIds)) {
            $requestParam["order_ids"] = TopUtil::convertBasic($this->orderIds);
        }

        if (!TopUtil::checkEmpty($this->extraData)) {
            $requestParam["extra_data"] = TopUtil::convertBasic($this->extraData);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

