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


class OrderParamModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = array(
        array('type', 'require', '参数类型不能为空', 1),
        array('name', 'require', '参数值不能为空', 1),
    );

    public function getAllParamGroupByType($type = null)
    {
        $model = D('OrderParam')->field('type,name as id,name');
        if (!empty($type)) {
            is_string($type) && $type = explode(',',$type);
            $model = $model->where(['type' => ['in',$type]]);
        }
        $paramArr = $model->order('sort asc')->select();
        $paramList = [];
        foreach ($paramArr as $param) {
            $paramList[$param['type']][] = $param;
        }
        return $paramList;
    }
}
