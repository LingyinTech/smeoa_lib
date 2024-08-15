<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradeMemoAddRequest {

    /**
        交易编号
     **/
    private $tid;

    /**
        交易备注。最大长度: 1000个字节
     **/
    private $memo;

    /**
        交易备注旗帜，可选值为：0(灰色), 1(红色), 2(黄色), 3(绿色), 4(蓝色), 5(紫色), 6(橙色), 7(浅蓝), 8(浅粉), 9(深绿), 10(桃红), 默认值为0
     **/
    private $flag;

    /**
        插旗备注
     **/
    private $tag;

    /**
        操作者
     **/
    private $operator;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getFlag() : int{
        return $this->flag;
    }

    public function setFlag(int $flag){
        $this->flag = $flag;
    }

    public function getTag() : string{
        return $this->tag;
    }

    public function setTag(string $tag){
        $this->tag = $tag;
    }

    public function getOperator() : int{
        return $this->operator;
    }

    public function setOperator(int $operator){
        $this->operator = $operator;
    }


    public function getApiName() : string {
        return "taobao.trade.memo.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->memo)) {
            $requestParam["memo"] = TopUtil::convertBasic($this->memo);
        }

        if (!TopUtil::checkEmpty($this->flag)) {
            $requestParam["flag"] = TopUtil::convertBasic($this->flag);
        }

        if (!TopUtil::checkEmpty($this->tag)) {
            $requestParam["tag"] = TopUtil::convertBasic($this->tag);
        }

        if (!TopUtil::checkEmpty($this->operator)) {
            $requestParam["operator"] = TopUtil::convertBasic($this->operator);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

