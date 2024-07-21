<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemImgDeleteItemImg {

    /**
        商品图片的id，和商品相对应（主图id默认为0）
     **/
    public $id;

    /**
        图片创建时间 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    public $created;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

