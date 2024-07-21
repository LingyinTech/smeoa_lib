<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoWaybillCloudprintNetprintPrintCustomData {

    /**
         自定义区数据
     **/
    public $data;

    /**
         自定义区链接
     **/
    public $template_url;


    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

    public function getTemplateUrl() : string{
        return $this->template_url;
    }

    public function setTemplateUrl(string $templateUrl){
        $this->template_url = $templateUrl;
    }


}

