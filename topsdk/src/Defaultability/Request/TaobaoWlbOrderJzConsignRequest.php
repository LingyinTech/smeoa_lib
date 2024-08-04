<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbOrderJzConsignJzTopArgs;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbOrderJzConsignTPDTO;
use Topsdk\Topapi\Defaultability\Domain\TaobaoWlbOrderJzConsignJzReceiverTO;

class TaobaoWlbOrderJzConsignRequest {

    /**
        交易号
     **/
    private $tid;

    /**
        卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。如果为空，取的卖家的默认取货地址
     **/
    private $senderId;

    /**
        物流公司信息
     **/
    private $lgTpDto;

    /**
        安装公司信息,需要安装时,才填写
     **/
    private $insTpDto;

    /**
        家装收货人信息,如果为空,则取默认收货信息
     **/
    private $jzReceiverTo;

    /**
        安装收货人信息,如果为空,则取默认收货人信息
     **/
    private $insReceiverTo;

    /**
        发货参数
     **/
    private $jzTopArgs;


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

    public function getLgTpDto() : TaobaoWlbOrderJzConsignTPDTO{
        return $this->lgTpDto;
    }

    public function setLgTpDto(TaobaoWlbOrderJzConsignTPDTO $lgTpDto){
        $this->lgTpDto = $lgTpDto;
    }

    public function getInsTpDto() : TaobaoWlbOrderJzConsignTPDTO{
        return $this->insTpDto;
    }

    public function setInsTpDto(TaobaoWlbOrderJzConsignTPDTO $insTpDto){
        $this->insTpDto = $insTpDto;
    }

    public function getJzReceiverTo() : TaobaoWlbOrderJzConsignJzReceiverTO{
        return $this->jzReceiverTo;
    }

    public function setJzReceiverTo(TaobaoWlbOrderJzConsignJzReceiverTO $jzReceiverTo){
        $this->jzReceiverTo = $jzReceiverTo;
    }

    public function getInsReceiverTo() : TaobaoWlbOrderJzConsignJzReceiverTO{
        return $this->insReceiverTo;
    }

    public function setInsReceiverTo(TaobaoWlbOrderJzConsignJzReceiverTO $insReceiverTo){
        $this->insReceiverTo = $insReceiverTo;
    }

    public function getJzTopArgs() : TaobaoWlbOrderJzConsignJzTopArgs{
        return $this->jzTopArgs;
    }

    public function setJzTopArgs(TaobaoWlbOrderJzConsignJzTopArgs $jzTopArgs){
        $this->jzTopArgs = $jzTopArgs;
    }


    public function getApiName() : string {
        return "taobao.wlb.order.jz.consign";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->senderId)) {
            $requestParam["sender_id"] = TopUtil::convertBasic($this->senderId);
        }

        if (!TopUtil::checkEmpty($this->lgTpDto)) {
            $requestParam["lg_tp_dto"] = TopUtil::convertStruct($this->lgTpDto);
        }

        if (!TopUtil::checkEmpty($this->insTpDto)) {
            $requestParam["ins_tp_dto"] = TopUtil::convertStruct($this->insTpDto);
        }

        if (!TopUtil::checkEmpty($this->jzReceiverTo)) {
            $requestParam["jz_receiver_to"] = TopUtil::convertStruct($this->jzReceiverTo);
        }

        if (!TopUtil::checkEmpty($this->insReceiverTo)) {
            $requestParam["ins_receiver_to"] = TopUtil::convertStruct($this->insReceiverTo);
        }

        if (!TopUtil::checkEmpty($this->jzTopArgs)) {
            $requestParam["jz_top_args"] = TopUtil::convertStruct($this->jzTopArgs);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

