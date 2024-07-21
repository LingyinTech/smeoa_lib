<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoProductImgUploadRequest {

    /**
        产品图片ID.修改图片时需要传入
     **/
    private $id;

    /**
        产品ID.Product的id
     **/
    private $productId;

    /**
        图片内容.图片最大为500K,只支持JPG,GIF格式.
     **/
    private $image;

    /**
        图片序号
     **/
    private $position;

    /**
        是否将该图片设为主图.可选值:true,false;默认值:false.
     **/
    private $isMajor;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getImage() : string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image = $image;
    }

    public function getPosition() : int{
        return $this->position;
    }

    public function setPosition(int $position){
        $this->position = $position;
    }

    public function getIsMajor() : bool{
        return $this->isMajor;
    }

    public function setIsMajor(bool $isMajor){
        $this->isMajor = $isMajor;
    }


    public function getApiName() : string {
        return "taobao.product.img.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->position)) {
            $requestParam["position"] = TopUtil::convertBasic($this->position);
        }

        if (!TopUtil::checkEmpty($this->isMajor)) {
            $requestParam["is_major"] = TopUtil::convertBasic($this->isMajor);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->image)){
            $fileParam["image"] = TopUtil::convertBasic($this->image);
        }
        return $fileParam;
    }

}

