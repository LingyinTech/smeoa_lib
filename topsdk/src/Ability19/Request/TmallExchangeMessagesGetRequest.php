<?php
namespace Topsdk\Topapi\Ability19\Request;
use Topsdk\Topapi\TopUtil;

class TmallExchangeMessagesGetRequest {

    /**
        留言创建角色。具体包括：卖家主账户(1)、卖家子账户(2)、小二(3)、买家(4)、系统(5)、系统超时(6)
     **/
    private $operatorRoles;

    /**
        每页条数
     **/
    private $pageSize;

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        页码
     **/
    private $pageNo;

    /**
        返回的字段。具体包括：id,refund_id,owner_id,owner_nick,owner_role,content,pic_urls,created,message_type
     **/
    private $fields;


    public function getOperatorRoles() : array{
        return $this->operatorRoles;
    }

    public function setOperatorRoles(array $operatorRoles){
        $this->operatorRoles = $operatorRoles;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "tmall.exchange.messages.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->operatorRoles)) {
            $requestParam["operator_roles"] = TopUtil::convertBasicList($this->operatorRoles);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

