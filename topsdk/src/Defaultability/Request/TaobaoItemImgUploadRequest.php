<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemImgUploadRequest {

    /**
        商品数字ID，该参数必须
     **/
    private $numIid;

    /**
        商品图片id(如果是更新图片，则需要传该参数)
     **/
    private $id;

    /**
        图片序号
     **/
    private $position;

    /**
        商品图片内容类型:JPG;最大:3M 。支持的文件类型：jpg,jpeg,png
     **/
    private $image;

    /**
        是否将该图片设为主图,可选值:true,false;默认值:false(非主图)
     **/
    private $isMajor;

    /**
        是否3:4长方形图片，绑定3:4主图视频时用于上传3:4商品主图
     **/
    private $isRectangle;


    public function getNumIid() : int{
        return $this->numIid;
    }

    public function setNumIid(int $numIid){
        $this->numIid = $numIid;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPosition() : int{
        return $this->position;
    }

    public function setPosition(int $position){
        $this->position = $position;
    }

    public function getImage() : string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image = $image;
    }

    public function getIsMajor() : bool{
        return $this->isMajor;
    }

    public function setIsMajor(bool $isMajor){
        $this->isMajor = $isMajor;
    }

    public function getIsRectangle() : bool{
        return $this->isRectangle;
    }

    public function setIsRectangle(bool $isRectangle){
        $this->isRectangle = $isRectangle;
    }


    public function getApiName() : string {
        return "taobao.item.img.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->position)) {
            $requestParam["position"] = TopUtil::convertBasic($this->position);
        }

        if (!TopUtil::checkEmpty($this->isMajor)) {
            $requestParam["is_major"] = TopUtil::convertBasic($this->isMajor);
        }

        if (!TopUtil::checkEmpty($this->isRectangle)) {
            $requestParam["is_rectangle"] = TopUtil::convertBasic($this->isRectangle);
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

