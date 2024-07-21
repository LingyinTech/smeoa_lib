<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoCloudprintCmdprintRenderCmdRenderParams {

    /**
        需要打印的文档，包括模板地址、打印数据
     **/
    public $document;

    /**
        打印机名称
     **/
    public $printer_name;

    /**
        客户端ID
     **/
    public $client_id;

    /**
        客户端类型：weixin/alipay/native
     **/
    public $client_type;

    /**
        打印配置
     **/
    public $config;


    public function getDocument() : CainiaoCloudprintCmdprintRenderRenderDocument{
        return $this->document;
    }

    public function setDocument(CainiaoCloudprintCmdprintRenderRenderDocument $document){
        $this->document = $document;
    }

    public function getPrinterName() : string{
        return $this->printer_name;
    }

    public function setPrinterName(string $printerName){
        $this->printer_name = $printerName;
    }

    public function getClientId() : string{
        return $this->client_id;
    }

    public function setClientId(string $clientId){
        $this->client_id = $clientId;
    }

    public function getClientType() : string{
        return $this->client_type;
    }

    public function setClientType(string $clientType){
        $this->client_type = $clientType;
    }

    public function getConfig() : CainiaoCloudprintCmdprintRenderRenderConfig{
        return $this->config;
    }

    public function setConfig(CainiaoCloudprintCmdprintRenderRenderConfig $config){
        $this->config = $config;
    }


}

