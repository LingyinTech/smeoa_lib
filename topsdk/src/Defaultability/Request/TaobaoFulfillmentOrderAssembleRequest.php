<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoFulfillmentOrderAssembleRequest {

    /**
        批量回传集合,一次接口最多40
     **/
    private $assembleOrders;

    /**
        操作类型，支持参数为MERGE、CANCEL_MERGE。当进行CANCEL_MERGE操作时，只需要传入groupId即可，order_list可以为空
     **/
    private $type;


    public function getAssembleOrders() : array{
        return $this->assembleOrders;
    }

    public function setAssembleOrders(array $assembleOrders){
        $this->assembleOrders = $assembleOrders;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "taobao.fulfillment.order.assemble";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->assembleOrders)) {
            $requestParam["assemble_orders"] = TopUtil::convertStructList($this->assembleOrders);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

