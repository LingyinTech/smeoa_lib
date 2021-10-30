<?php

class ShopModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = [];

    public function getCache()
    {
        $list = $this->order('sort asc')->select();

        $shopList = [];
        foreach ($list as $item) {
            $shopList[$item['id']] = $item;
        }

        return $shopList;
    }

}