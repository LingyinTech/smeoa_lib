<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradeFullinfoGetRequest {

    /**
        include_oaid
     **/
    private $includeOaid;

    /**
        需要返回的字段列表，多个字段用半角逗号分隔，可选值为返回示例中能看到的所有字段。
     **/
    private $fields;

    /**
        交易编号
     **/
    private $tid;


    public function getIncludeOaid() : string{
        return $this->includeOaid;
    }

    public function setIncludeOaid(string $includeOaid){
        $this->includeOaid = $includeOaid;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }


    public function getApiName() : string {
        return "taobao.trade.fullinfo.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->includeOaid)) {
            $requestParam["include_oaid"] = TopUtil::convertBasic($this->includeOaid);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

