<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaAliqinTaNumberSinglecallbyvoiceRequest {

    /**
        单呼号码
     **/
    private $calledNum;

    /**
        显示号码
     **/
    private $calledShowNum;

    /**
        语音文件code
     **/
    private $voiceCode;

    /**
        上下文参数 示例:{"extend":"回传参数"} extend为扩展信息作为回传参数的key
     **/
    private $params;


    public function getCalledNum() : string{
        return $this->calledNum;
    }

    public function setCalledNum(string $calledNum){
        $this->calledNum = $calledNum;
    }

    public function getCalledShowNum() : string{
        return $this->calledShowNum;
    }

    public function setCalledShowNum(string $calledShowNum){
        $this->calledShowNum = $calledShowNum;
    }

    public function getVoiceCode() : string{
        return $this->voiceCode;
    }

    public function setVoiceCode(string $voiceCode){
        $this->voiceCode = $voiceCode;
    }

    public function getParams() : array{
        return $this->params;
    }

    public function setParams(array $params){
        $this->params = $params;
    }


    public function getApiName() : string {
        return "alibaba.aliqin.ta.number.singlecallbyvoice";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->calledNum)) {
            $requestParam["called_num"] = TopUtil::convertBasic($this->calledNum);
        }

        if (!TopUtil::checkEmpty($this->calledShowNum)) {
            $requestParam["called_show_num"] = TopUtil::convertBasic($this->calledShowNum);
        }

        if (!TopUtil::checkEmpty($this->voiceCode)) {
            $requestParam["voice_code"] = TopUtil::convertBasic($this->voiceCode);
        }

        if (!TopUtil::checkEmpty($this->params)) {
            $requestParam["params"] = TopUtil::convertStruct($this->params);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

