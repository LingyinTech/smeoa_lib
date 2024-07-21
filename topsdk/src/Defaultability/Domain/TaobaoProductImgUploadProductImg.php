<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoProductImgUploadProductImg {

    /**
        产品图片ID
     **/
    public $id;

    /**
        图片地址.(绝对地址,格式:http://host/image_path)
     **/
    public $url;

    /**
        添加时间.格式:yyyy-mm-dd hh:mm:ss
     **/
    public $created;

    /**
        修改时间.格式:yyyy-mm-dd hh:mm:ss
     **/
    public $modified;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

