<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradePostageUpdateRequest {

    /**
        主订单编号
     **/
    private $tid;

    /**
        邮费价格(邮费单位是元）
     **/
    private $postFee;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getPostFee() : string{
        return $this->postFee;
    }

    public function setPostFee(string $postFee){
        $this->postFee = $postFee;
    }


    public function getApiName() : string {
        return "taobao.trade.postage.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->postFee)) {
            $requestParam["post_fee"] = TopUtil::convertBasic($this->postFee);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

