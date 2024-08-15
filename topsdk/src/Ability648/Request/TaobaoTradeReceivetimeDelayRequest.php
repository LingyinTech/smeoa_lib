<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradeReceivetimeDelayRequest {

    /**
        主订单号
     **/
    private $tid;

    /**
        延长收货的天数，可选值为：3, 5, 7, 10。
     **/
    private $days;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getDays() : int{
        return $this->days;
    }

    public function setDays(int $days){
        $this->days = $days;
    }


    public function getApiName() : string {
        return "taobao.trade.receivetime.delay";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->days)) {
            $requestParam["days"] = TopUtil::convertBasic($this->days);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

