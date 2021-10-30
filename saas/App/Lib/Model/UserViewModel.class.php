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

class UserViewModel extends ViewModel
{
    public $viewFields = array(
        'User' => [
            'id',
            'emp_no',
            'name',
            'letter',
            'dept_id',
            'position_id',
            'rank_id',
            'email',
            'duty',
            'office_tel',
            'mobile_tel',
            'qq',
            'pic',
            'birthday',
            'sex',
            'password',
            'is_del',
            '_type' => 'left'
        ],
        'Position' => array('name' => 'position_name', '_on' => 'Position.id=User.position_id', '_type' => 'left'),
        'Rank' => array('name' => 'rank_name', '_on' => 'Rank.id=User.rank_id', '_type' => 'left'),
        'Dept' => array('name' => 'dept_name', '_on' => 'Dept.id=User.dept_id', '_type' => 'left')
    );
}
