<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiGetWaybillCloudPrintResponse {

    /**
        请求id
     **/
    public $object_id;

    /**
        云打印内容（encryptedData表示加密结果，data表示非加密结果）;模板内容,具体解释见<a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.8cf9Nj&treeId=17&articleId=105085&docType=1#12">链接</a>
     **/
    public $print_data;

    /**
        面单号, 子母件模式下为子面单号
     **/
    public $waybill_code;

    /**
        子母件中的母单号，当为子母件模式时，需要此单号为实际挂载物流详情的单号，需要使用此单号进行发货，查询物流详情，非子母件，此字段为空
     **/
    public $parent_waybill_code;

    /**
        拓展信息，特殊场景下使用
     **/
    public $extra_info;

    /**
        cp_code，跟入参传入的cp_code保持一致
     **/
    public $cp_code;

    /**
        真实取号的cp_code，在淘特官方物流等虚拟cp的场景中real_cp_code和入参中的cp_code不一样，其他场景二者一样
     **/
    public $real_cp_code;


    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }

    public function getPrintData() : string{
        return $this->print_data;
    }

    public function setPrintData(string $printData){
        $this->print_data = $printData;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getParentWaybillCode() : string{
        return $this->parent_waybill_code;
    }

    public function setParentWaybillCode(string $parentWaybillCode){
        $this->parent_waybill_code = $parentWaybillCode;
    }

    public function getExtraInfo() : string{
        return $this->extra_info;
    }

    public function setExtraInfo(string $extraInfo){
        $this->extra_info = $extraInfo;
    }

    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getRealCpCode() : string{
        return $this->real_cp_code;
    }

    public function setRealCpCode(string $realCpCode){
        $this->real_cp_code = $realCpCode;
    }


}

