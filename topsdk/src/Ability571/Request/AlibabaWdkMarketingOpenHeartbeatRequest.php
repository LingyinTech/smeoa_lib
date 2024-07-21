<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingOpenHeartbeatHeartBeatBo;

class AlibabaWdkMarketingOpenHeartbeatRequest {

    /**
        心跳信息
     **/
    private $heartBeat;


    public function getHeartBeat() : AlibabaWdkMarketingOpenHeartbeatHeartBeatBo{
        return $this->heartBeat;
    }

    public function setHeartBeat(AlibabaWdkMarketingOpenHeartbeatHeartBeatBo $heartBeat){
        $this->heartBeat = $heartBeat;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.open.heartbeat";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->heartBeat)) {
            $requestParam["heart_beat"] = TopUtil::convertStruct($this->heartBeat);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

