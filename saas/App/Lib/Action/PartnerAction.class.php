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


class PartnerAction extends CommonAction
{
    //过滤查询字段
    protected $config = array('app_type' => 'master');

    function _search_filter(&$map)
    {
        if (!empty($_POST['keyword'])) {
            $map['val|name|code'] = array('like', "%" . $_POST['keyword'] . "%");
        }
    }

    public function index()
    {

        $paramTypeList = [
            'design' => '烫画厂商',
            'produce' => '丝印厂商',
            'plate' => '刺绣厂商',
        ];
        $this->assign('paramTypeList', $paramTypeList);

        $model = D('Partner');
        if (!empty($_REQUEST['node'])) {
            $type = $_REQUEST['node'];
        } else {
            $type = 'design';
        }
        $map['type'] = $type;
        $this->assign('type', $type);
        $menu = $model->where($map)->field('id,type,code,name')->order('sort asc')->select();
        $tree = list_to_tree($menu);
        $this->assign('menu', popup_tree_menu($tree));
        $this->display();
    }

    function del()
    {
        $id = $_POST['id'];
        $this->_destory($id);
    }
}