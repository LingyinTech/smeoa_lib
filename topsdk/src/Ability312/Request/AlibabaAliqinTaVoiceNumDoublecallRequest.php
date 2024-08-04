<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaAliqinTaVoiceNumDoublecallRequest {

    /**
        主叫号码，支持国内手机号与固话号码,格式如下057188773344,13911112222,4001112222,95500
     **/
    private $callerNum;

    /**
        主叫号码侧的号码显示，传入的显示号码必须是阿里大于“管理中心-号码管理”中申请通过的号码。显示号码格式如下057188773344，4001112222，95500
     **/
    private $callerShowNum;

    /**
        被叫号码，支持国内手机号与固话号码,格式如下057188773344,13911112222,4001112222,95500
     **/
    private $calledNum;

    /**
        被叫号码侧的号码显示，传入的显示号码可以是阿里大于“管理中心-号码管理”中申请通过的号码。显示号码格式如下057188773344，4001112222，95500。显示号码也可以为主叫号码。
     **/
    private $calledShowNum;

    /**
        公共回传参数，在“消息返回”中会透传回该参数；举例：用户可以传入自己下级的会员ID，在消息返回时，该会员ID会包含在内，用户可以根据该会员ID识别是哪位会员使用了你的应用
     **/
    private $extend;

    /**
        通话超时时长，如接通后到达120秒时，通话会因为超时自动挂断。若无需设置超时时长，可不传。
     **/
    private $sessionTimeOut;


    public function getCallerNum() : string{
        return $this->callerNum;
    }

    public function setCallerNum(string $callerNum){
        $this->callerNum = $callerNum;
    }

    public function getCallerShowNum() : string{
        return $this->callerShowNum;
    }

    public function setCallerShowNum(string $callerShowNum){
        $this->callerShowNum = $callerShowNum;
    }

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

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getSessionTimeOut() : string{
        return $this->sessionTimeOut;
    }

    public function setSessionTimeOut(string $sessionTimeOut){
        $this->sessionTimeOut = $sessionTimeOut;
    }


    public function getApiName() : string {
        return "alibaba.aliqin.ta.voice.num.doublecall";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->callerNum)) {
            $requestParam["caller_num"] = TopUtil::convertBasic($this->callerNum);
        }

        if (!TopUtil::checkEmpty($this->callerShowNum)) {
            $requestParam["caller_show_num"] = TopUtil::convertBasic($this->callerShowNum);
        }

        if (!TopUtil::checkEmpty($this->calledNum)) {
            $requestParam["called_num"] = TopUtil::convertBasic($this->calledNum);
        }

        if (!TopUtil::checkEmpty($this->calledShowNum)) {
            $requestParam["called_show_num"] = TopUtil::convertBasic($this->calledShowNum);
        }

        if (!TopUtil::checkEmpty($this->extend)) {
            $requestParam["extend"] = TopUtil::convertBasic($this->extend);
        }

        if (!TopUtil::checkEmpty($this->sessionTimeOut)) {
            $requestParam["session_time_out"] = TopUtil::convertBasic($this->sessionTimeOut);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

