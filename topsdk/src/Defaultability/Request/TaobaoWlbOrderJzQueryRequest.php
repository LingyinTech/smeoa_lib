<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbOrderJzQueryJzReceiverTO;

class TaobaoWlbOrderJzQueryRequest {

    /**
        交易id
     **/
    private $tid;

    /**
        卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。如果为空，取的卖家的默认取货地址
     **/
    private $senderId;

    /**
        家装收货人信息
     **/
    private $jzReceiverTo;

    /**
        家装安装服务收货人信息
     **/
    private $insJzReceiverTO;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getSenderId() : int{
        return $this->senderId;
    }

    public function setSenderId(int $senderId){
        $this->senderId = $senderId;
    }

    public function getJzReceiverTo() : TaobaoWlbOrderJzQueryJzReceiverTO{
        return $this->jzReceiverTo;
    }

    public function setJzReceiverTo(TaobaoWlbOrderJzQueryJzReceiverTO $jzReceiverTo){
        $this->jzReceiverTo = $jzReceiverTo;
    }

    public function getInsJzReceiverTO() : TaobaoWlbOrderJzQueryJzReceiverTO{
        return $this->insJzReceiverTO;
    }

    public function setInsJzReceiverTO(TaobaoWlbOrderJzQueryJzReceiverTO $insJzReceiverTO){
        $this->insJzReceiverTO = $insJzReceiverTO;
    }


    public function getApiName() : string {
        return "taobao.wlb.order.jz.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->senderId)) {
            $requestParam["sender_id"] = TopUtil::convertBasic($this->senderId);
        }

        if (!TopUtil::checkEmpty($this->jzReceiverTo)) {
            $requestParam["jz_receiver_to"] = TopUtil::convertStruct($this->jzReceiverTo);
        }

        if (!TopUtil::checkEmpty($this->insJzReceiverTO)) {
            $requestParam["ins_jz_receiver_t_o"] = TopUtil::convertStruct($this->insJzReceiverTO);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

