<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemImgDeleteRequest {

    /**
        商品数字ID
     **/
    private $numIid;

    /**
        商品图片ID；如果是竖图，请将id的值设置为1
     **/
    private $id;

    /**
        标记是否要删除第6张图，因为第6张图与普通商品图片不是存储在同一个位置的无图片ID，所以要通过一个标记来判断是否为第6张图，目前第6张图业务主要用在女装业务下
     **/
    private $isSixthPic;


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

    public function getIsSixthPic() : bool{
        return $this->isSixthPic;
    }

    public function setIsSixthPic(bool $isSixthPic){
        $this->isSixthPic = $isSixthPic;
    }


    public function getApiName() : string {
        return "taobao.item.img.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->isSixthPic)) {
            $requestParam["is_sixth_pic"] = TopUtil::convertBasic($this->isSixthPic);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

