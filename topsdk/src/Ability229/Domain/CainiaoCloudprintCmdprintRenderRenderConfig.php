<?php
namespace Topsdk\Topapi\Ability229\Domain;

class CainiaoCloudprintCmdprintRenderRenderConfig {

    /**
        打印方向：normal-正常 reverse-翻转(旋转180°)
     **/
    public $orientation;

    /**
        下联logo
     **/
    public $need_bottom_logo;

    /**
        中间logo
     **/
    public $need_middle_logo;

    /**
        上联logo
     **/
    public $need_top_logo;


    public function getOrientation() : string{
        return $this->orientation;
    }

    public function setOrientation(string $orientation){
        $this->orientation = $orientation;
    }

    public function getNeedBottomLogo() : bool{
        return $this->need_bottom_logo;
    }

    public function setNeedBottomLogo(bool $needBottomLogo){
        $this->need_bottom_logo = $needBottomLogo;
    }

    public function getNeedMiddleLogo() : bool{
        return $this->need_middle_logo;
    }

    public function setNeedMiddleLogo(bool $needMiddleLogo){
        $this->need_middle_logo = $needMiddleLogo;
    }

    public function getNeedTopLogo() : bool{
        return $this->need_top_logo;
    }

    public function setNeedTopLogo(bool $needTopLogo){
        $this->need_top_logo = $needTopLogo;
    }


}

