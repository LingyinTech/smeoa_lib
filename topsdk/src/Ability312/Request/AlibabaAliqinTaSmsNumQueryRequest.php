<?php
namespace Topsdk\Topapi\Ability312\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaAliqinTaSmsNumQueryRequest {

    /**
        短信发送流水
     **/
    private $bizId;

    /**
        短信接收号码
     **/
    private $recNum;

    /**
        短信发送日期，支持近30天记录查询，格式yyyyMMdd
     **/
    private $queryDate;

    /**
        分页参数,页码
     **/
    private $currentPage;

    /**
        分页参数，每页数量。最大值50
     **/
    private $pageSize;


    public function getBizId() : string{
        return $this->bizId;
    }

    public function setBizId(string $bizId){
        $this->bizId = $bizId;
    }

    public function getRecNum() : string{
        return $this->recNum;
    }

    public function setRecNum(string $recNum){
        $this->recNum = $recNum;
    }

    public function getQueryDate() : string{
        return $this->queryDate;
    }

    public function setQueryDate(string $queryDate){
        $this->queryDate = $queryDate;
    }

    public function getCurrentPage() : int{
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage){
        $this->currentPage = $currentPage;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }


    public function getApiName() : string {
        return "alibaba.aliqin.ta.sms.num.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bizId)) {
            $requestParam["biz_id"] = TopUtil::convertBasic($this->bizId);
        }

        if (!TopUtil::checkEmpty($this->recNum)) {
            $requestParam["rec_num"] = TopUtil::convertBasic($this->recNum);
        }

        if (!TopUtil::checkEmpty($this->queryDate)) {
            $requestParam["query_date"] = TopUtil::convertBasic($this->queryDate);
        }

        if (!TopUtil::checkEmpty($this->currentPage)) {
            $requestParam["current_page"] = TopUtil::convertBasic($this->currentPage);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

