<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFenxiaoOrdersGetOrderMessages {

    /**
        留言时间
     **/
    public $message_time;

    /**
        留言标题，例如：分销商留言，供应商留言，买家留言
     **/
    public $message_title;

    /**
        留言内容
     **/
    public $message_content;

    /**
        留言时的图片地址
     **/
    public $pic_url;


    public function getMessageTime() : string{
        return $this->message_time;
    }

    public function setMessageTime(string $messageTime){
        $this->message_time = $messageTime;
    }

    public function getMessageTitle() : string{
        return $this->message_title;
    }

    public function setMessageTitle(string $messageTitle){
        $this->message_title = $messageTitle;
    }

    public function getMessageContent() : string{
        return $this->message_content;
    }

    public function setMessageContent(string $messageContent){
        $this->message_content = $messageContent;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }


}

