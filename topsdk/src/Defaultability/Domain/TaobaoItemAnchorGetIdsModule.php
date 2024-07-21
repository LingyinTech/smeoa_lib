<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemAnchorGetIdsModule {

    /**
        宝贝描述规范化模块名
     **/
    public $name;

    /**
        宝贝描述规范化模块id
     **/
    public $id;

    /**
        0为自动打标；
1为人工打标；
     **/
    public $type;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

