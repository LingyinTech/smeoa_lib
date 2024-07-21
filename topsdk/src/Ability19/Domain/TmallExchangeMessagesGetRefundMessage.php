<?php
namespace Topsdk\Topapi\Ability19\Domain;

class TmallExchangeMessagesGetRefundMessage {

    /**
        留言ID
     **/
    public $id;

    /**
        换货单号ID
     **/
    public $refund_id;

    /**
        留言者ID
     **/
    public $owner_id;

    /**
        留言者昵称
     **/
    public $owner_nick;

    /**
        留言内容
     **/
    public $content;

    /**
        凭证信息
     **/
    public $pic_urls;

    /**
        留言创建时期
     **/
    public $created;

    /**
        留言类型
     **/
    public $message_type;

    /**
        留言角色
     **/
    public $owner_role;

    /**
        留言者openId
     **/
    public $open_uid;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getRefundId() : int{
        return $this->refund_id;
    }

    public function setRefundId(int $refundId){
        $this->refund_id = $refundId;
    }

    public function getOwnerId() : int{
        return $this->owner_id;
    }

    public function setOwnerId(int $ownerId){
        $this->owner_id = $ownerId;
    }

    public function getOwnerNick() : string{
        return $this->owner_nick;
    }

    public function setOwnerNick(string $ownerNick){
        $this->owner_nick = $ownerNick;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getPicUrls() : array{
        return $this->pic_urls;
    }

    public function setPicUrls(array $picUrls){
        $this->pic_urls = $picUrls;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getMessageType() : string{
        return $this->message_type;
    }

    public function setMessageType(string $messageType){
        $this->message_type = $messageType;
    }

    public function getOwnerRole() : string{
        return $this->owner_role;
    }

    public function setOwnerRole(string $ownerRole){
        $this->owner_role = $ownerRole;
    }

    public function getOpenUid() : string{
        return $this->open_uid;
    }

    public function setOpenUid(string $openUid){
        $this->open_uid = $openUid;
    }


}

