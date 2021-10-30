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

// 角色模块
class RoleAction extends CommonAction
{
    protected $config = [
        'app_type' => 'master',
        'action_auth' => [
            'node' => 'admin',
            'get_node_list' => 'admin',
            'user' => 'admin',
            'duty' => 'admin',
            'get_role_list' => 'admin',
            'get_duty_list' => 'admin',
        ]
    ];

    public function node()
    {
        $node_model = M("Node");
        if (!empty($_POST['eq_pid'])) {
            $eq_pid = $_POST['eq_pid'];
        } else {
            $eq_pid = $node_model->where('pid=0 and if_open = 1')->order('sort asc')->getField('id');
        }

        $node_list = $node_model->order('sort asc')->select();

        $node_list = tree_to_list(list_to_tree($node_list, $eq_pid));

        $node_list = rotate($node_list);
        $node_list = implode(",", $node_list['id']) . ",$eq_pid";

        $where['id'] = array('in', $node_list);
        $where['if_open'] = array('eq', 1);
        $menu = $node_model->field('id,pid,name,url')->where($where)->order('sort asc')->select();

        $tree = list_to_tree($menu);
        $this->assign('eq_pid', $eq_pid);

        $list = tree_to_list($tree);
        $this->assign('node_list', $list);

        $role = M("Role")->where('if_see = 1')->order('sort asc')->select();
        $this->assign('list', $role);

        $list = $node_model->where('pid=0 and if_open = 1')->order('sort asc')->getField('id,name');
        $this->assign('groupList', $list);
        $this->display();
    }

    public function del()
    {
        $role_id = $_POST['id'];

        $model = M("RoleNode");
        $where['role_id'] = $role_id;
        $model->where($where)->delete();

        $model = M("RoleUser");
        $model->where($where)->delete();
        $this->_destory($role_id);
    }

    public function get_node_list()
    {
        $role_id = $_POST["role_id"];
        $model = D("Role");
        $data = $model->get_node_list($role_id);
        if ($data !== false) {// 读取成功
            $this->ajaxReturn($data, "", 1);
        }
    }

    public function set_node()
    {
        $role_id = $_POST["role_id"];
        $org_list = $_POST["org_node_list"];
        $node_list = $_POST["node_list"];
        $admin_list = $_POST["admin"];
        $write_list = $_POST["write"];
        $read_list = $_POST["read"];

        $model = D("Role");
        $model->del_node($role_id, $org_list);

        $result = $model->set_node($role_id, $node_list);

        $model = M("RoleNode");
        $where['role_id'] = $role_id;

        $where['node_id'] = array('in', $admin_list);
        $model->where($where)->setField('admin', 1);

        $where['node_id'] = array('in', $write_list);
        $model->where($where)->setField('write', 1);

        $where['node_id'] = array('in', $read_list);
        $model->where($where)->setField('read', 1);

        if ($result === false) {
            $this->error('操作失败！');
        } else {
            hashSetRedisData('difeng:menu:list', false, null);
            $this->assign('jumpUrl', get_return_url());
            $this->success('操作成功！');
        }
    }

    public function get_role_list()
    {
        $model = D("Role");
        $id = $_REQUEST["id"];
        $data = $model->get_role_list($id);
        if ($data !== false) {// 读取成功
            $this->ajaxReturn($data, "", 1);
        }
    }

    public function set_role()
    {
        $emp_list = $_POST["emp_id"];
        $role_list = $_POST["role_list"];

        $model = D("Role");
        $model->del_role($emp_list);

        $result = $model->set_role($emp_list, $role_list);
        if ($result === false) {
            $this->error('操作失败！');
        } else {
            hashSetRedisData('difeng:menu:list', false, null);
            $this->assign('jumpUrl', get_return_url());
            $this->success('操作成功！');
        }
    }

    public function user()
    {
        $keyword = "";
        if (!empty($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $count = M('User')->where(array(
            'emp_no' => array('like', '%' . $keyword . '%'),
            'is_del' => 0
        ))->count();

        if ($count > 0) {
            import("@.ORG.Util.Page");
            //创建分页对象
            if (!empty($_REQUEST['list_rows'])) {
                $listRows = $_REQUEST['list_rows'];
            } else {
                $listRows = get_user_config('list_rows');
            }
            $p = new Page($count, $listRows);

            $p->parameter = $this->_search();
            //分页显示
            $page = $p->show();
            $this->assign('page', $page);
        }

        $user_list = D("User")->get_user_list($keyword, $p);
        $this->assign("user_list", $user_list);

        $role = M("Role");
        $role_list = $role->where('if_see = 1')->order('sort asc')->select();
        $this->assign("role_list", $role_list);
        $this->display();
    }

    public function duty()
    {
        $paramList = D('Partner')->getAllParamGroupByType();
        $this->assign('designList', $paramList['design']);
        $this->assign('produceList', $paramList['produce']);
        $this->assign('plateList', $paramList['plate']);

        $keyword = "";
        if (!empty($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $count = M('User')->where(array(
            'emp_no' => array('like', '%' . $keyword . '%'),
            'is_del' => 0
        ))->count();

        if ($count > 0) {
            import("@.ORG.Util.Page");
            //创建分页对象
            if (!empty($_REQUEST['list_rows'])) {
                $listRows = $_REQUEST['list_rows'];
            } else {
                $listRows = get_user_config('list_rows');
            }
            $p = new Page($count, $listRows);

            $p->parameter = $this->_search();
            //分页显示
            $page = $p->show();
            $this->assign('page', $page);

            $user_list = D("User")->get_user_list($keyword, $p);
            $this->assign("user_list", $user_list);
        }

        $this->display();
    }

    public function get_duty_list()
    {
        $userId = $_POST["id"];
        $model = D("Role");
        $data = $model->get_duty_list($userId);
        if ($data !== false) {// 读取成功
            $this->ajaxReturn($data, "", 1);
        }
    }

    public function set_duty()
    {
        $userId = $_POST["emp_id"];
        $duty_list = $_POST["duty_list"];

        $model = D("Role");
        $model->del_duty($userId);

        $result = $model->set_partner($userId, $duty_list);
        if ($result === false) {
            $this->error('操作失败！');
        } else {
            $this->assign('jumpUrl', get_return_url());
            $this->success('操作成功！');
        }
    }

    protected function _index()
    {
        $map = $this->_search();
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }
        $map['if_see'] = 1;
        $model = D('Role');
        $_REQUEST['list_rows'] = 200;
        if (!empty($model)) {
            $this->_list($model, $map);
        }
        $this->display();
    }
}