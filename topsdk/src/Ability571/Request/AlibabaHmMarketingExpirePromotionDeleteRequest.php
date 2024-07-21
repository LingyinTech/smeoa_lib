<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaHmMarketingExpirePromotionDeleteExpirePromotionBo;

class AlibabaHmMarketingExpirePromotionDeleteRequest {

    /**
        删除短保优惠
     **/
    private $param0;


    public function getParam0() : AlibabaHmMarketingExpirePromotionDeleteExpirePromotionBo{
        return $this->param0;
    }

    public function setParam0(AlibabaHmMarketingExpirePromotionDeleteExpirePromotionBo $param0){
        $this->param0 = $param0;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.expire.promotion.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

