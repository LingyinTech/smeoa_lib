<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetTradeOrderInfoDto {

    /**
        物流服务值（详见https://support-cnkuaidi.taobao.com/doc.htm#?docId=106156&docType=1，如无特殊服务请置空）
     **/
    public $logistics_services;

    /**
        <a href="http://open.taobao.com/docs/doc.htm?docType=1&articleId=105086&treeId=17&platformId=17#6">请求ID</a>
     **/
    public $object_id;

    /**
        订单信息
     **/
    public $order_info;

    /**
        包裹信息
     **/
    public $package_info;

    /**
        收件人信息
     **/
    public $recipient;

    /**
        云打印标准模板URL（组装云打印结果使用，值格式http://cloudprint.cainiao.com/template/standard/${模板ID}）
     **/
    public $template_url;

    /**
        使用者ID（使用电子面单账号的实际商家ID，如存在一个电子面单账号多个店铺使用时，请传入店铺的商家ID）
     **/
    public $user_id;

    /**
        带面单号模式取号，目前仅顺丰支持
     **/
    public $waybill_code;

    /**
        扩展参数
     **/
    public $extra_info;


    public function getLogisticsServices() : string{
        return $this->logistics_services;
    }

    public function setLogisticsServices(string $logisticsServices){
        $this->logistics_services = $logisticsServices;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }

    public function getOrderInfo() : CainiaoWaybillIiGetOrderInfoDto{
        return $this->order_info;
    }

    public function setOrderInfo(CainiaoWaybillIiGetOrderInfoDto $orderInfo){
        $this->order_info = $orderInfo;
    }

    public function getPackageInfo() : CainiaoWaybillIiGetPackageInfoDto{
        return $this->package_info;
    }

    public function setPackageInfo(CainiaoWaybillIiGetPackageInfoDto $packageInfo){
        $this->package_info = $packageInfo;
    }

    public function getRecipient() : CainiaoWaybillIiGetRecipientInfoDto{
        return $this->recipient;
    }

    public function setRecipient(CainiaoWaybillIiGetRecipientInfoDto $recipient){
        $this->recipient = $recipient;
    }

    public function getTemplateUrl() : string{
        return $this->template_url;
    }

    public function setTemplateUrl(string $templateUrl){
        $this->template_url = $templateUrl;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getExtraInfo() : string{
        return $this->extra_info;
    }

    public function setExtraInfo(string $extraInfo){
        $this->extra_info = $extraInfo;
    }


}

