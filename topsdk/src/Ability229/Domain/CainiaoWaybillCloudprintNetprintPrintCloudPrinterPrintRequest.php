<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoWaybillCloudprintNetprintPrintCloudPrinterPrintRequest {

    /**
        共享码
     **/
    public $share_code;

    /**
        打印机 id
     **/
    public $uid;

    /**
        自定义内容
     **/
    public $custom_data;

    /**
        打印数据
     **/
    public $print_data;


    public function getShareCode() : string{
        return $this->share_code;
    }

    public function setShareCode(string $shareCode){
        $this->share_code = $shareCode;
    }

    public function getUid() : string{
        return $this->uid;
    }

    public function setUid(string $uid){
        $this->uid = $uid;
    }

    public function getCustomData() : CainiaoWaybillCloudprintNetprintPrintCustomData{
        return $this->custom_data;
    }

    public function setCustomData(CainiaoWaybillCloudprintNetprintPrintCustomData $customData){
        $this->custom_data = $customData;
    }

    public function getPrintData() : CainiaoWaybillCloudprintNetprintPrintPrintData{
        return $this->print_data;
    }

    public function setPrintData(CainiaoWaybillCloudprintNetprintPrintPrintData $printData){
        $this->print_data = $printData;
    }


}

