<?php
namespace Topsdk\Topapi\Ability229\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability229\Domain\CainiaoCloudprintCmdprintRenderCmdRenderParams;

class CainiaoCloudprintCmdprintRenderRequest {

    /**
        参数对象
     **/
    private $params;


    public function getParams() : CainiaoCloudprintCmdprintRenderCmdRenderParams{
        return $this->params;
    }

    public function setParams(CainiaoCloudprintCmdprintRenderCmdRenderParams $params){
        $this->params = $params;
    }


    public function getApiName() : string {
        return "cainiao.cloudprint.cmdprint.render";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->params)) {
            $requestParam["params"] = TopUtil::convertStruct($this->params);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

