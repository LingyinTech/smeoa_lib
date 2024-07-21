<?php
namespace Topsdk\Topapi\Ability138\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemDescModulesGetRequest {

    /**
        淘宝后台发布商品的叶子类目id，可通过taobao.itemcats.get查到。api 访问地址http://api.taobao.com/apidoc/api.htm?spm=0.0.0.0.CFhhk4&path=cid:3-apiId:122
     **/
    private $catId;

    /**
        商家主帐号id
     **/
    private $usrId;


    public function getCatId() : int{
        return $this->catId;
    }

    public function setCatId(int $catId){
        $this->catId = $catId;
    }

    public function getUsrId() : string{
        return $this->usrId;
    }

    public function setUsrId(string $usrId){
        $this->usrId = $usrId;
    }


    public function getApiName() : string {
        return "tmall.item.desc.modules.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        if (!TopUtil::checkEmpty($this->usrId)) {
            $requestParam["usr_id"] = TopUtil::convertBasic($this->usrId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

