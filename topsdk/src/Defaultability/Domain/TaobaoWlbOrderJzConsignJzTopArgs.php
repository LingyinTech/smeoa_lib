<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbOrderJzConsignJzTopArgs {

    /**
        运单号,用快递或商家自有发货时,必填
     **/
    public $mail_no;

    /**
        包裹数量
     **/
    public $package_number;

    /**
        包裹备注
     **/
    public $package_remark;

    /**
        包裹体积
     **/
    public $package_volume;

    /**
        包裹重量
     **/
    public $package_weight;

    /**
        自有物流公司名称
     **/
    public $zy_company;

    /**
        自有物流发货时间,时间不能早于当前时间
     **/
    public $zy_consign_time;

    /**
        自有物流公司电话
     **/
    public $zy_phone_number;


    public function getMailNo() : string{
        return $this->mail_no;
    }

    public function setMailNo(string $mailNo){
        $this->mail_no = $mailNo;
    }

    public function getPackageNumber() : string{
        return $this->package_number;
    }

    public function setPackageNumber(string $packageNumber){
        $this->package_number = $packageNumber;
    }

    public function getPackageRemark() : string{
        return $this->package_remark;
    }

    public function setPackageRemark(string $packageRemark){
        $this->package_remark = $packageRemark;
    }

    public function getPackageVolume() : string{
        return $this->package_volume;
    }

    public function setPackageVolume(string $packageVolume){
        $this->package_volume = $packageVolume;
    }

    public function getPackageWeight() : string{
        return $this->package_weight;
    }

    public function setPackageWeight(string $packageWeight){
        $this->package_weight = $packageWeight;
    }

    public function getZyCompany() : string{
        return $this->zy_company;
    }

    public function setZyCompany(string $zyCompany){
        $this->zy_company = $zyCompany;
    }

    public function getZyConsignTime() : string{
        return $this->zy_consign_time;
    }

    public function setZyConsignTime(string $zyConsignTime){
        $this->zy_consign_time = $zyConsignTime;
    }

    public function getZyPhoneNumber() : string{
        return $this->zy_phone_number;
    }

    public function setZyPhoneNumber(string $zyPhoneNumber){
        $this->zy_phone_number = $zyPhoneNumber;
    }


}

