<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiSearchWaybillApplySubscriptionInfo {

    /**
        CP网点信息及对应的商家的发货信息
     **/
    public $branch_account_cols;

    /**
        物流服务商ID
     **/
    public $cp_code;

    /**
        物流服务商业务类型 1：直营 2：加盟 3：落地配 4：直营带网点
     **/
    public $cp_type;


    public function getBranchAccountCols() : array{
        return $this->branch_account_cols;
    }

    public function setBranchAccountCols(array $branchAccountCols){
        $this->branch_account_cols = $branchAccountCols;
    }

    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getCpType() : int{
        return $this->cp_type;
    }

    public function setCpType(int $cpType){
        $this->cp_type = $cpType;
    }


}

