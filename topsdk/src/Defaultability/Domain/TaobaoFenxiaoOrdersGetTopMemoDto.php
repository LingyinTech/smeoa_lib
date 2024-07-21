<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFenxiaoOrdersGetTopMemoDto {

    /**
        子订单备注内容
     **/
    public $remark;

    /**
        操作者昵称
     **/
    public $operate_user_nick;

    /**
        附件
     **/
    public $attachments;


    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getOperateUserNick() : string{
        return $this->operate_user_nick;
    }

    public function setOperateUserNick(string $operateUserNick){
        $this->operate_user_nick = $operateUserNick;
    }

    public function getAttachments() : array{
        return $this->attachments;
    }

    public function setAttachments(array $attachments){
        $this->attachments = $attachments;
    }


}

