<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTradeMemoUpdateRequest {

    /**
        交易编号
     **/
    private $tid;

    /**
        卖家交易备注。最大长度: 1000个字节
     **/
    private $memo;

    /**
        交易备注旗帜，可选值为：0(灰色), 1(红色), 2(黄色), 3(绿色), 4(蓝色), 5(紫色), 6(橙色), 7(浅蓝), 8(浅粉), 9(深绿), 10(桃红), 默认值为0
     **/
    private $flag;

    /**
        是否对memo的值置空若为true，则不管传入的memo字段的值是否为空，都将会对已有的memo值清空，慎用；若用false，则会根据memo是否为空来修改memo的值：若memo为空则忽略对已有memo字段的修改，若memo非空，则使用新传入的memo覆盖已有的memo的值
     **/
    private $reset;

    /**
        旗子备注
     **/
    private $tag;

    /**
        操作者
     **/
    private $operator;

    /**
        是否对旗子自身tag和订单快照tag的值置空。若为true，则不管传入的tag字段的值是否为空，都将会对已有的旗子本身tag和订单快照tag值清空，慎用；若用false，则会根据tag是否为空来修改tag的值：若tag为空则忽略对已有tag字段的修改，若tag非空，则使用新传入的tag覆盖已有的旗子本身tag和订单快照tag的值
     **/
    private $clearTag;


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

    public function getReset() : bool{
        return $this->reset;
    }

    public function setReset(bool $reset){
        $this->reset = $reset;
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

    public function getClearTag() : bool{
        return $this->clearTag;
    }

    public function setClearTag(bool $clearTag){
        $this->clearTag = $clearTag;
    }


    public function getApiName() : string {
        return "taobao.trade.memo.update";
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

        if (!TopUtil::checkEmpty($this->reset)) {
            $requestParam["reset"] = TopUtil::convertBasic($this->reset);
        }

        if (!TopUtil::checkEmpty($this->tag)) {
            $requestParam["tag"] = TopUtil::convertBasic($this->tag);
        }

        if (!TopUtil::checkEmpty($this->operator)) {
            $requestParam["operator"] = TopUtil::convertBasic($this->operator);
        }

        if (!TopUtil::checkEmpty($this->clearTag)) {
            $requestParam["clear_tag"] = TopUtil::convertBasic($this->clearTag);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

