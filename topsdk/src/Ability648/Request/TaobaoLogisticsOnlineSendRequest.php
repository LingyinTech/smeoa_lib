<?php


namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsOnlineSendRequest {

    /**
     * @var int 交易编号
     */
    private $tid;

    /**
     * @var String 运单号
     */
    private $outSid;

    /**
     * @var String 物流公司代码
     */
    private $companyCode;

    /**
     * @return int
     */
    public function getTid(): int
    {
        return $this->tid;
    }

    /**
     * @param  int  $tid
     */
    public function setTid(int $tid)
    {
        $this->tid = $tid;
    }

    /**
     * @return String
     */
    public function getOutSid(): string
    {
        return $this->outSid;
    }

    /**
     * @param  String  $outSib
     */
    public function setOutSib(string $outSid)
    {
        $this->outSid = $outSid;
    }

    /**
     * @return String
     */
    public function getCompanyCode(): string
    {
        return $this->companyCode;
    }

    /**
     * @param  String  $companyCode
     */
    public function setCompanyCode(string $companyCode)
    {
        $this->companyCode = $companyCode;
    }


    public function getApiName() : string {
        return 'taobao.logistics.online.send';
    }

    public function toMap() : array{
        $requestParam = [];
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam['tid'] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->outSid)) {
            $requestParam['out_sid'] = TopUtil::convertBasic($this->outSid);
        }

        if (!TopUtil::checkEmpty($this->companyCode)) {
            $requestParam['company_code'] = TopUtil::convertBasicList($this->companyCode);
        }

        return $requestParam;
    }
}