<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoWaybillCloudprintNetprintPrintPrintData {

    /**
        版本
     **/
    public $ver;

    /**
         打印数据
     **/
    public $data;

    /**
         是否加密
     **/
    public $encrypted;

    /**
        签名
     **/
    public $signature;

    /**
        追加的 data
     **/
    public $add_data;

    /**
         模板 url
     **/
    public $template_url;


    public function getVer() : string{
        return $this->ver;
    }

    public function setVer(string $ver){
        $this->ver = $ver;
    }

    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

    public function getEncrypted() : bool{
        return $this->encrypted;
    }

    public function setEncrypted(bool $encrypted){
        $this->encrypted = $encrypted;
    }

    public function getSignature() : string{
        return $this->signature;
    }

    public function setSignature(string $signature){
        $this->signature = $signature;
    }

    public function getAddData() : string{
        return $this->add_data;
    }

    public function setAddData(string $addData){
        $this->add_data = $addData;
    }

    public function getTemplateUrl() : string{
        return $this->template_url;
    }

    public function setTemplateUrl(string $templateUrl){
        $this->template_url = $templateUrl;
    }


}

