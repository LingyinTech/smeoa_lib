<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemJointPropimgRequest {

    /**
        商品数字ID，必选
     **/
    private $numIid;

    /**
        属性列表。调用taobao.itemprops.get获取，属性必须是颜色属性，格式:pid:vid。
     **/
    private $properties;

    /**
        属性图片ID。如果是新增不需要填写
     **/
    private $id;

    /**
        图片序号
     **/
    private $position;

    /**
        图片地址(传入图片相对地址即可,即不需包含 http://img02.taobao.net/bao/uploaded )
     **/
    private $picPath;


    public function getNumIid() : int{
        return $this->numIid;
    }

    public function setNumIid(int $numIid){
        $this->numIid = $numIid;
    }

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
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

    public function getPicPath() : string{
        return $this->picPath;
    }

    public function setPicPath(string $picPath){
        $this->picPath = $picPath;
    }


    public function getApiName() : string {
        return "taobao.item.joint.propimg";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->properties)) {
            $requestParam["properties"] = TopUtil::convertBasic($this->properties);
        }

        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->position)) {
            $requestParam["position"] = TopUtil::convertBasic($this->position);
        }

        if (!TopUtil::checkEmpty($this->picPath)) {
            $requestParam["pic_path"] = TopUtil::convertBasic($this->picPath);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

