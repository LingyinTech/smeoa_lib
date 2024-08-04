<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbOrderJzQueryJzTopDTO {

    /**
        快递公司列表
     **/
    public $expresses;

    /**
        安装公司列表
     **/
    public $ins_tps;

    /**
        物流公司列表
     **/
    public $lg_cps;

    /**
        是否支持快递
     **/
    public $support_delivery;

    /**
        是否支持安装
     **/
    public $support_install;

    /**
        是否支持修改安装地址
     **/
    public $supp_modify_ins_add;

    /**
        商品对应的服务信息
     **/
    public $goods_relations;


    public function getExpresses() : array{
        return $this->expresses;
    }

    public function setExpresses(array $expresses){
        $this->expresses = $expresses;
    }

    public function getInsTps() : array{
        return $this->ins_tps;
    }

    public function setInsTps(array $insTps){
        $this->ins_tps = $insTps;
    }

    public function getLgCps() : array{
        return $this->lg_cps;
    }

    public function setLgCps(array $lgCps){
        $this->lg_cps = $lgCps;
    }

    public function getSupportDelivery() : bool{
        return $this->support_delivery;
    }

    public function setSupportDelivery(bool $supportDelivery){
        $this->support_delivery = $supportDelivery;
    }

    public function getSupportInstall() : bool{
        return $this->support_install;
    }

    public function setSupportInstall(bool $supportInstall){
        $this->support_install = $supportInstall;
    }

    public function getSuppModifyInsAdd() : bool{
        return $this->supp_modify_ins_add;
    }

    public function setSuppModifyInsAdd(bool $suppModifyInsAdd){
        $this->supp_modify_ins_add = $suppModifyInsAdd;
    }

    public function getGoodsRelations() : array{
        return $this->goods_relations;
    }

    public function setGoodsRelations(array $goodsRelations){
        $this->goods_relations = $goodsRelations;
    }


}

