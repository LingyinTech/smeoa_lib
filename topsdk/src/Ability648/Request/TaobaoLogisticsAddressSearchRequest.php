<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoLogisticsAddressSearchRequest {

    /**
        可选，参数列表如下：<br><font color='red'>no_def:查询非默认地址<br>get_def:查询默认取货地址，也即对应卖家后台地址库中发货地址（send_def暂不起作用）<br>cancel_def:查询默认退货地址<br>缺省此参数时，查询所有当前用户的地址库</font>
     **/
    private $rdef;


    public function getRdef() : string{
        return $this->rdef;
    }

    public function setRdef(string $rdef){
        $this->rdef = $rdef;
    }


    public function getApiName() : string {
        return "taobao.logistics.address.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rdef)) {
            $requestParam["rdef"] = TopUtil::convertBasic($this->rdef);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

