<?php
namespace Topsdk\Topapi\Ability153\Domain;

class CainiaoReachableBatchjudgeReachableDto {

    /**
        阻断原因
     **/
    public $interrupt_reason;

    /**
        是否阻断 true:阻断  false:可达
     **/
    public $interrupt_apply_waybill_code;


    public function getInterruptReason() : string{
        return $this->interrupt_reason;
    }

    public function setInterruptReason(string $interruptReason){
        $this->interrupt_reason = $interruptReason;
    }

    public function getInterruptApplyWaybillCode() : bool{
        return $this->interrupt_apply_waybill_code;
    }

    public function setInterruptApplyWaybillCode(bool $interruptApplyWaybillCode){
        $this->interrupt_apply_waybill_code = $interruptApplyWaybillCode;
    }


}

