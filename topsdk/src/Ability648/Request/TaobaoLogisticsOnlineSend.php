<?php


namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsOnlineSend {

    /**
     * @var int 交易编号
     */
    private $tid;

    /**
     * @var String 运单号
     */
    private $outSib;

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
    public function getOutSib(): string
    {
        return $this->outSib;
    }

    /**
     * @param  String  $outSib
     */
    public function setOutSib(string $outSib)
    {
        $this->outSib = $outSib;
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

        if (!TopUtil::checkEmpty($this->outSib)) {
            $requestParam['out_sid'] = TopUtil::convertBasic($this->outSib);
        }

        if (!TopUtil::checkEmpty($this->companyCode)) {
            $requestParam['company_code'] = TopUtil::convertBasicList($this->companyCode);
        }

        return $requestParam;
    }
}