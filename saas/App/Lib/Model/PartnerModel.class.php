<?php

/*---------------------------------------------------------------------------
                              _oo8oo_
                             o8888888o
                             88" . "88
                             (| -_- |)
                             0\  =  /0
                           ___/'==='\___
                         .' \\|     |// '.
                        / \\|||  :  |||// \
                       / _||||| -:- |||||_ \
                      |   | \\\  -  /// |   |
                      | \_|  ''\---/''  |_/ |
                      \  .-\__  '-'  __/-.  /
                    ___'. .'  /--.--\  '. .'___
                 ."" '<  '.___\_<|>_/___.'  >' "".
                | | :  `- \`.:`\ _ /`:.`/ -`  : | |
                \  \ `-.   \_ __\ /__ _/   .-` /  /
            =====`-.____`.___ \_____/ ___.`____.-`=====
                              `=---=`
           ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

                                                        佛祖保佑         永不宕机/永无bug
   
 Copyright (c) 2014 http://www.xiehuanjin.cn All rights reserved.                                             

  @Author:  xie.hj<xie.hj@thinkalways.net>                                 
 -------------------------------------------------------------------------*/


class PartnerModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = array(
        array('type', 'require', '参数类型不能为空', 1),
        array('name', 'require', '参数值不能为空', 1),
    );

    public function getAllParamGroupByType()
    {
        $paramArr = D('Partner')->field('type,id,name')->order('sort asc')->select();
        $paramList = [];
        foreach ($paramArr as $param) {
            $paramList[$param['type']][$param['id']] = $param;
        }
        return $paramList;
    }

    public function getAllParamGroupByCode()
    {
        $paramArr = D('Partner')->field('code,type,id,name')->order('sort asc')->select();
        $paramList = [];
        foreach ($paramArr as $param) {
            $paramList[$param['code']] = $param;
        }
        return $paramList;
    }

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
