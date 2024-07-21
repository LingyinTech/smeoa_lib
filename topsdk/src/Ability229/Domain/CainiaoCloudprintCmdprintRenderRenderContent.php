<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoCloudprintCmdprintRenderRenderContent {

    /**
        打印数据
     **/
    public $print_data;

    /**
        模板url
     **/
    public $template_url;

    /**
        是否获取加密数据
     **/
    public $encrypted;

    /**
        加密数据使用秘钥版本
     **/
    public $ver;

    /**
        数据签名
     **/
    public $signature;

    /**
        附加数据(用于修改数据)
     **/
    public $add_data;


    public function getPrintData() : string{
        return $this->print_data;
    }

    public function setPrintData(string $printData){
        $this->print_data = $printData;
    }

    public function getTemplateUrl() : string{
        return $this->template_url;
    }

    public function setTemplateUrl(string $templateUrl){
        $this->template_url = $templateUrl;
    }

    public function getEncrypted() : bool{
        return $this->encrypted;
    }

    public function setEncrypted(bool $encrypted){
        $this->encrypted = $encrypted;
    }

    public function getVer() : string{
        return $this->ver;
    }

    public function setVer(string $ver){
        $this->ver = $ver;
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


}

