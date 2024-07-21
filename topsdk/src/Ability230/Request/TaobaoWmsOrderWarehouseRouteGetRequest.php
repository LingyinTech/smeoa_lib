<?php
namespace Topsdk\Topapi\Ability230\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoWmsOrderWarehouseRouteGetRequest {

    /**
        订单编号
     **/
    private $orderCode;


    public function getOrderCode() : string{
        return $this->orderCode;
    }

    public function setOrderCode(string $orderCode){
        $this->orderCode = $orderCode;
    }


    public function getApiName() : string {
        return "taobao.wms.order.warehouse.route.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderCode)) {
            $requestParam["order_code"] = TopUtil::convertBasic($this->orderCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

