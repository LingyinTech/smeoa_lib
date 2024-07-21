<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiUpdateWaybillCloudPrintUpdateRequest {

    /**
        物流公司CODE
     **/
    public $cp_code;

    /**
        物流服务内容<a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.eK8aZm&treeId=17&articleId=26765&docType=2">链接</a>
     **/
    public $logistics_services;

    /**
        包裹信息
     **/
    public $package_info;

    /**
        收件信息
     **/
    public $recipient;

    /**
        发件信息
     **/
    public $sender;

    /**
        模板URL
     **/
    public $template_url;

    /**
        面单号
     **/
    public $waybill_code;

    /**
        请求表示id
     **/
    public $object_id;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getLogisticsServices() : string{
        return $this->logistics_services;
    }

    public function setLogisticsServices(string $logisticsServices){
        $this->logistics_services = $logisticsServices;
    }

    public function getPackageInfo() : CainiaoWaybillIiUpdatePackageInfoDto{
        return $this->package_info;
    }

    public function setPackageInfo(CainiaoWaybillIiUpdatePackageInfoDto $packageInfo){
        $this->package_info = $packageInfo;
    }

    public function getRecipient() : CainiaoWaybillIiUpdateUserInfoDto{
        return $this->recipient;
    }

    public function setRecipient(CainiaoWaybillIiUpdateUserInfoDto $recipient){
        $this->recipient = $recipient;
    }

    public function getSender() : CainiaoWaybillIiUpdateUserInfoDto{
        return $this->sender;
    }

    public function setSender(CainiaoWaybillIiUpdateUserInfoDto $sender){
        $this->sender = $sender;
    }

    public function getTemplateUrl() : string{
        return $this->template_url;
    }

    public function setTemplateUrl(string $templateUrl){
        $this->template_url = $templateUrl;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }


}

