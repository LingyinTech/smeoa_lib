<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaAliqinTaNumberSinglecallbyttsRequest {

    /**
        被叫号码
     **/
    private $calledNum;

    /**
        显示号码
     **/
    private $calledShowNum;

    /**
        tts文本模板code
     **/
    private $ttsCode;

    /**
        上下文参数,tts模板含有变量的, 此参数需填写。示例:{"date":"2015年 " ,"name":"测试","extend":"回传参数"} date、name 为模板里的变量名作为key,extend为扩展信息作为回传参数的key
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

    public function getTtsCode() : string{
        return $this->ttsCode;
    }

    public function setTtsCode(string $ttsCode){
        $this->ttsCode = $ttsCode;
    }

    public function getParams() : array{
        return $this->params;
    }

    public function setParams(array $params){
        $this->params = $params;
    }


    public function getApiName() : string {
        return "alibaba.aliqin.ta.number.singlecallbytts";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->calledNum)) {
            $requestParam["called_num"] = TopUtil::convertBasic($this->calledNum);
        }

        if (!TopUtil::checkEmpty($this->calledShowNum)) {
            $requestParam["called_show_num"] = TopUtil::convertBasic($this->calledShowNum);
        }

        if (!TopUtil::checkEmpty($this->ttsCode)) {
            $requestParam["tts_code"] = TopUtil::convertBasic($this->ttsCode);
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

