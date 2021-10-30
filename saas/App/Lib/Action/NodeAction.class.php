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

class NodeAction extends CommonAction
{

    protected $config = array('app_type' => 'master', 'action_auth' => array('node' => 'admin'));

    public function index()
    {
        $node = M("Node");
        if (!empty($_POST['eq_pid'])) {
            $eq_pid = $_POST['eq_pid'];
        } elseif (!empty($_GET['eq_pid'])) {
            $eq_pid = $_GET['eq_pid'];
        } else {
            $eq_pid = $node->where('pid=0')->order('sort asc')->getField('id');
        }

        $this->assign('eq_pid', $eq_pid);

        $list = $node->where('pid=0 and if_open = 1')->order('sort asc')->getField('id,name');
        $this->assign('groupList', $list);

        $menu = $node->field('id,pid,name')->order('sort asc')->select();
        $tree = list_to_tree($menu, $eq_pid);

        $model = M("Node");
        $list = $model->order('sort asc')->getField('id,name');
        $this->assign('node_list', $list);
        $this->assign('menu', popup_tree_menu($tree));
        $this->display();
    }

    protected function _insert()
    {
        //创建对应文件和view
        $url = $_POST['url'];

        $model = D('Node');
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        if (strpos($model->url, '##') !== false) {
            $model->sub_folder = ucfirst(get_module(str_replace("##", "", $model->url))) . "Folder";
        } else {
            $model->sub_folder = '';
        }
        //保存当前数据对象
        $list = $model->add();
        if ($list !== false) {//保存成功
            $path = explode('/', $url);

            $controller = ucfirst($path[0]);
            $file = APP_PATH . 'Lib/Action/' . $controller . 'Action.class.php';
            $dir = dirname($file);
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $content = '<?php
            /**
             * 
             */
            class ' . $controller . 'Action extends CommonAction {
                protected $config = array(\'app_type\' => \'public\');
                
                public function index(){
                    
                    
                    $this->display();
                }
                
            }        
            ';
            if (!file_exists($file)) {
                file_put_contents($file, $content, LOCK_EX);
            }
            hashSetRedisData('difeng:menu:list', false, null);
            $this->assign('jumpUrl', get_return_url());
            $this->success('新增成功!');
        } else {
            //失败提示
            $this->error('新增失败!');
        }
    }

    protected function _update()
    {
        $id = $_POST['id'];
        $model = D("Node");
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        if (strpos($model->url, '##') !== false) {
            $model->sub_folder = ucfirst(get_module(str_replace("##", "", $model->url))) . "Folder";
        } else {
            $model->sub_folder = '';
        }
        // 更新数据
        $list = $model->save();
        if (false !== $list) {
            //成功提示
            hashSetRedisData('difeng:menu:list', false, null);
            $this->assign('jumpUrl', get_return_url());
            $this->success('编辑成功!');
        } else {
            //错误提示
            $this->error('编辑失败!');
        }
    }

    function winpop()
    {
        $menu = D("Node")->where('if_open = 1')->order('sort asc')->select();
        $tree = list_to_tree($menu);
        $this->assign('menu', popup_tree_menu($tree));
        $this->display();
    }

    function del()
    {
        hashSetRedisData('difeng:menu:list', false, null);

        $node_id = $_POST['id'];

        $model = M("RoleNode");
        $where['node_id'] = $node_id;
        $model->where($where)->delete();
        $this->_destory($node_id);
    }

}