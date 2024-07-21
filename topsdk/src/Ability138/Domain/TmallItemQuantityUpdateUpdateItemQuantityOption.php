<?php
namespace Topsdk\Topapi\Ability138\Domain;

class TmallItemQuantityUpdateUpdateItemQuantityOption {

    /**
        增量更新时幂等外部编码，只能包含十六进制字符(0-9,a-f,A-F)
     **/
    public $outer_biz_key;

    /**
        库存更新方式: 1是全量更新 2是增量更新；默认是1。
     **/
    public $type;


    public function getOuterBizKey() : string{
        return $this->outer_biz_key;
    }

    public function setOuterBizKey(string $outerBizKey){
        $this->outer_biz_key = $outerBizKey;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

