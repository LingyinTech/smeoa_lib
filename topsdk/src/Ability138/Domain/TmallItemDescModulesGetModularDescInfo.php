<?php
namespace Topsdk\Topapi\Ability138\Domain;

class TmallItemDescModulesGetModularDescInfo {

    /**
        用户自定义模块数量最大值限制。类目级别模块+用户级别模块必须小于<20
     **/
    public $usr_def_max_num;

    /**
        运营定义的该商品所属类目的类目级别模块信息列表，列表顺序即为模块顺序。
     **/
    public $itm_dsc_modules;

    /**
        旧描述与新描述共存时间（切换时间）。
     **/
    public $dead_line;

    /**
        默认值为false，如果此字段为true，则卖家上传的模块化的描述信息可以自定义排序。
     **/
    public $user_order;


    public function getUsrDefMaxNum() : int{
        return $this->usr_def_max_num;
    }

    public function setUsrDefMaxNum(int $usrDefMaxNum){
        $this->usr_def_max_num = $usrDefMaxNum;
    }

    public function getItmDscModules() : array{
        return $this->itm_dsc_modules;
    }

    public function setItmDscModules(array $itmDscModules){
        $this->itm_dsc_modules = $itmDscModules;
    }

    public function getDeadLine() : string{
        return $this->dead_line;
    }

    public function setDeadLine(string $deadLine){
        $this->dead_line = $deadLine;
    }

    public function getUserOrder() : bool{
        return $this->user_order;
    }

    public function setUserOrder(bool $userOrder){
        $this->user_order = $userOrder;
    }


}

