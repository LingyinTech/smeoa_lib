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

class CommonModel extends Model
{
    protected $_auto = array(
        array('is_del', '0', self::MODEL_INSERT),
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('update_time', 'time', self::MODEL_UPDATE, 'function'),
        array('user_id', 'get_user_id', self::MODEL_INSERT, 'callback'),
        array('user_name', 'get_user_name', self::MODEL_INSERT, 'callback'),
    );

    function get_user_id()
    {
        $user_id = session(C('USER_AUTH_KEY'));
        return isset($user_id) ? $user_id : 0;
    }

    function get_user_name()
    {
        $user_name = session('user_name');
        return isset($user_name) ? $user_name : 0;
    }

    protected function _pushReturn($data, $info, $status, $user_id, $time = null)
    {
        $model = M("Push");

        $model->data = $data;
        $model->info = $info;
        $model->status = $status;

        if (empty($user_id)) {
            $model->user_id = get_user_id();
        } else {
            $model->user_id = $user_id;
        }

        if (empty($time)) {
            $model->time = time();
        } else {
            $model->time = $time;
        }
        $model->add();
    }
}
