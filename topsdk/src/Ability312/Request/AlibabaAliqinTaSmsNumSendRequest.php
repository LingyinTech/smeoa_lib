<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaAliqinTaSmsNumSendRequest {

    /**
        接收号码
     **/
    private $recNum;

    /**
        短信模板CODE
     **/
    private $smsTemplateCode;

    /**
        公共回传参数
     **/
    private $extend;

    /**
        短信签名
     **/
    private $smsFreeSignName;

    /**
        短信模板变量，AckNum是变量参数
     **/
    private $smsParam;

    /**
        类型，normal：短信
     **/
    private $smsType;

    /**
        商家自定义扩展码
     **/
    private $extendCode;

    /**
        商家自定义扩展名,例如店铺nick
     **/
    private $extendName;


    public function getRecNum() : string{
        return $this->recNum;
    }

    public function setRecNum(string $recNum){
        $this->recNum = $recNum;
    }

    public function getSmsTemplateCode() : string{
        return $this->smsTemplateCode;
    }

    public function setSmsTemplateCode(string $smsTemplateCode){
        $this->smsTemplateCode = $smsTemplateCode;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getSmsFreeSignName() : string{
        return $this->smsFreeSignName;
    }

    public function setSmsFreeSignName(string $smsFreeSignName){
        $this->smsFreeSignName = $smsFreeSignName;
    }

    public function getSmsParam() : array{
        return $this->smsParam;
    }

    public function setSmsParam(array $smsParam){
        $this->smsParam = $smsParam;
    }

    public function getSmsType() : string{
        return $this->smsType;
    }

    public function setSmsType(string $smsType){
        $this->smsType = $smsType;
    }

    public function getExtendCode() : string{
        return $this->extendCode;
    }

    public function setExtendCode(string $extendCode){
        $this->extendCode = $extendCode;
    }

    public function getExtendName() : string{
        return $this->extendName;
    }

    public function setExtendName(string $extendName){
        $this->extendName = $extendName;
    }


    public function getApiName() : string {
        return "alibaba.aliqin.ta.sms.num.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->recNum)) {
            $requestParam["rec_num"] = TopUtil::convertBasic($this->recNum);
        }

        if (!TopUtil::checkEmpty($this->smsTemplateCode)) {
            $requestParam["sms_template_code"] = TopUtil::convertBasic($this->smsTemplateCode);
        }

        if (!TopUtil::checkEmpty($this->extend)) {
            $requestParam["extend"] = TopUtil::convertBasic($this->extend);
        }

        if (!TopUtil::checkEmpty($this->smsFreeSignName)) {
            $requestParam["sms_free_sign_name"] = TopUtil::convertBasic($this->smsFreeSignName);
        }

        if (!TopUtil::checkEmpty($this->smsParam)) {
            $requestParam["sms_param"] = TopUtil::convertStruct($this->smsParam);
        }

        if (!TopUtil::checkEmpty($this->smsType)) {
            $requestParam["sms_type"] = TopUtil::convertBasic($this->smsType);
        }

        if (!TopUtil::checkEmpty($this->extendCode)) {
            $requestParam["extend_code"] = TopUtil::convertBasic($this->extendCode);
        }

        if (!TopUtil::checkEmpty($this->extendName)) {
            $requestParam["extend_name"] = TopUtil::convertBasic($this->extendName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

