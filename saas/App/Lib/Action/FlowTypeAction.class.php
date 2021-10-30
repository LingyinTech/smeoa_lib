<?php

/**
 * FlowTypeAction
 *
 * 业务参数
 *
 * @access public
 * @author actors315@gmail.com
 * @version 20141116 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 *
 */
class FlowTypeAction extends CommonAction
{
    protected $config = array('app_type' => 'public');

    public function index()
    {
        $flowType = D('FlowType');

        $menu = $flowType->field('id,name,produce_no')->order('sort asc')->select();
        $tree = list_to_tree($menu);
        $this->assign('menu', popup_tree_menu($tree));
        $this->display();
    }

    public function winpop()
    {
        $flow_type = D('FlowType');
        $menu = $flow_type->field('id,name,produce_no')->order('sort asc')->select();
        $tree = list_to_tree($menu);
        $this->assign('list_flow', popup_tree_menu($tree));
        $this->display();
    }

    protected function _insert()
    {
        $model = D('FlowType');
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        //保存当前数据对象
        $list = $model->add();
        if ($list !== false) {//保存成功
            $this->assign('jumpUrl', get_return_url());
            $this->success('新增成功!');
        } else {
            //失败提示
            $this->error('新增失败!');
        }
    }

    protected function _edit()
    {
        $model = D('FlowType');
        $id = $_REQUEST['id'];
        if (empty($id)) {
            $this->error(0, "读取失败", 0);
        }
        $vo = $model->find($id);
        if ($this->isAjax()) {
            if ($vo !== false) {// 读取成功
                $this->ajaxReturn($vo, "读取成功", 1);
            } else {
                $this->ajaxReturn(0, "读取失败", 0);
                die;
            }
        }

        $this->assign('vo', $vo);
        $this->display();
    }

    protected function _update()
    {
        $model = D('FlowType');
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        // 更新数据
        $list = $model->save();
        if (false !== $list) {
            //成功提示
            $this->assign('jumpUrl', get_return_url());
            $this->success('编辑成功!');
        } else {
            //错误提示
            $this->error('编辑失败!');
        }
    }

    function del()
    {
        $id = $_POST['id'];
        $this->_destory($id, 'FlowType');
    }
}
