<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemPropimgUploadRequest {

    /**
        商品数字ID，必选
     **/
    private $numIid;

    /**
        属性图片ID。如果是新增不需要填写
     **/
    private $id;

    /**
        属性列表。调用taobao.itemprops.get获取类目属性，属性必须是颜色属性，再用taobao.itempropvalues.get取得vid。格式:pid:vid。
     **/
    private $properties;

    /**
        图片位置
     **/
    private $position;

    /**
        属性图片内容。类型:JPG,GIF;图片大小不超过:3M
     **/
    private $image;


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

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
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


    public function getApiName() : string {
        return "taobao.item.propimg.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->properties)) {
            $requestParam["properties"] = TopUtil::convertBasic($this->properties);
        }

        if (!TopUtil::checkEmpty($this->position)) {
            $requestParam["position"] = TopUtil::convertBasic($this->position);
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

