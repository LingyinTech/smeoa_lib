<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenDataRelationQueryOutTxdDataRelation {

    /**
        子数据类型
     **/
    public $sub_biz_code;

    /**
        数据类型
     **/
    public $biz_code;

    /**
        外部数据Id
     **/
    public $out_data_id;

    /**
        淘鲜达数据Id
     **/
    public $txd_data_id;


    public function getSubBizCode() : string{
        return $this->sub_biz_code;
    }

    public function setSubBizCode(string $subBizCode){
        $this->sub_biz_code = $subBizCode;
    }

    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }

    public function getOutDataId() : string{
        return $this->out_data_id;
    }

    public function setOutDataId(string $outDataId){
        $this->out_data_id = $outDataId;
    }

    public function getTxdDataId() : string{
        return $this->txd_data_id;
    }

    public function setTxdDataId(string $txdDataId){
        $this->txd_data_id = $txdDataId;
    }


}

