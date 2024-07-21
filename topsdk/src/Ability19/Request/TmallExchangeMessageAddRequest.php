<?php
namespace Topsdk\Topapi\Ability19\Request;
use Topsdk\Topapi\TopUtil;

class TmallExchangeMessageAddRequest {

    /**
        留言内容
     **/
    private $content;

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        凭证图片列表
     **/
    private $messagePics;

    /**
        返回字段。目前支持id,refund_id,owner_id,owner_nick,owner_role,content,pic_urls,created,message_type
     **/
    private $fields;


    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getMessagePics() : string{
        return $this->messagePics;
    }

    public function setMessagePics(string $messagePics){
        $this->messagePics = $messagePics;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "tmall.exchange.message.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->content)) {
            $requestParam["content"] = TopUtil::convertBasic($this->content);
        }

        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->messagePics)){
            $fileParam["message_pics"] = TopUtil::convertBasic($this->messagePics);
        }
        return $fileParam;
    }

}

