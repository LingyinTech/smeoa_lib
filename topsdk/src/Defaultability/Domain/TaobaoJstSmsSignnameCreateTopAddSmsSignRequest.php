<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsSignnameCreateTopAddSmsSignRequest {

    /**
        签名发送自带【】符号，无须添加【】、()、[]符号，避免重复 不支持如“客户服务”、“友情提醒”等过于宽泛内容、不支持“测试”字样的签名
     **/
    public $sign_name;

    /**
        请输入签名用途（必填）、企业官网链接（可提升通过率）
     **/
    public $remark;

    /**
        0--企事业单位的全程或简称   1--已备案网站  2--已上线APP  3--公众号或小程序 4--电商平台店铺名 5--已注册商标名
     **/
    public $sign_source;

    /**
        上传的证明文件
     **/
    public $sign_file_list;


    public function getSignName() : string{
        return $this->sign_name;
    }

    public function setSignName(string $signName){
        $this->sign_name = $signName;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getSignSource() : int{
        return $this->sign_source;
    }

    public function setSignSource(int $signSource){
        $this->sign_source = $signSource;
    }

    public function getSignFileList() : array{
        return $this->sign_file_list;
    }

    public function setSignFileList(array $signFileList){
        $this->sign_file_list = $signFileList;
    }


}

