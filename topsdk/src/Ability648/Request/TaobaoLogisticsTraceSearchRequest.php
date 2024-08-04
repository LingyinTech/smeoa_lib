<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsTraceSearchRequest {

    /**
        淘宝交易号，请勿传非淘宝交易号
     **/
    private $tid;

    /**
        表明是否是拆单，默认值0，1表示拆单
     **/
    private $isSplit;

    /**
        拆单子订单列表，当is_split=1时，需要传人；对应的数据是：子订单号的列表。
     **/
    private $subTid;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getIsSplit() : int{
        return $this->isSplit;
    }

    public function setIsSplit(int $isSplit){
        $this->isSplit = $isSplit;
    }

    public function getSubTid() : array{
        return $this->subTid;
    }

    public function setSubTid(array $subTid){
        $this->subTid = $subTid;
    }


    public function getApiName() : string {
        return "taobao.logistics.trace.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->isSplit)) {
            $requestParam["is_split"] = TopUtil::convertBasic($this->isSplit);
        }

        if (!TopUtil::checkEmpty($this->subTid)) {
            $requestParam["sub_tid"] = TopUtil::convertBasicList($this->subTid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

