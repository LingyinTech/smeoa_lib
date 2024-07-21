<?php
namespace Topsdk\Topapi\Ability213\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaGpuUpdateSchemaGetRequest {

    /**
        产品ID
     **/
    private $productId;

    /**
        当前用户所在渠道如0代表天猫，8代表淘宝
     **/
    private $providerId;


    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getProviderId() : int{
        return $this->providerId;
    }

    public function setProviderId(int $providerId){
        $this->providerId = $providerId;
    }


    public function getApiName() : string {
        return "alibaba.gpu.update.schema.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->providerId)) {
            $requestParam["provider_id"] = TopUtil::convertBasic($this->providerId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

