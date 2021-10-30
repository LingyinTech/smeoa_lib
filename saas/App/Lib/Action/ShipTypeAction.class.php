<?php
/**
 * Ship_typeAction
 * 
 * 快递类型
 * 
 * @access public
 * @author actors315@gmail.com
 * @version 20141116 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 * 
 */

class ShipTypeAction extends CommonAction {
	protected $config = array('app_type' => 'public');
       
    public function index(){
        $ship = D('ShipType');

        $menu = array();
        $menu = $ship -> field('id,name') -> order('sort asc') -> select();
        $tree = list_to_tree($menu);
        $this -> assign('menu', sub_tree_menu($tree));
        $this -> display();
    }
   /** 插入新新数据  **/
    protected function _insert($name = null) {
        if (empty($name)) {
            $name = $this -> getActionName();
        }
        $model = D($name);
        if (false === $model -> create()) {
            $this -> error($model -> getError());
        }
        /*保存当前数据对象 */
        $list = $model -> add();
        if ($list !== false) {//保存成功
            $this -> assign('jumpUrl', U('ship_type/index'));
            $this -> success('新增成功!');
        } else {
            $this -> error('新增失败!');
            //失败提示
        }
    }

    /* 更新数据  */
    protected function _update($name = null) {
        if (empty($name)) {
            $name = $this -> getActionName();
        }
        $model = D($name);
        if (false === $model -> create()) {
            $this -> error($model -> getError());
        }
        $list = $model -> save();
        if (false !== $list) {
            $this -> assign('jumpUrl', U('ship_type/index'));
            $this -> success('编辑成功!');
            //成功提示
        } else {
            $this -> error('编辑失败!');
            //错误提示
        }
    }

    /** 删除标记  **/
    protected function _del($id = null, $name = null, $return_flag = false) {
        if (empty($id)) {
            $id = $_REQUEST['id'];
            if (empty($id)) {
                $this -> error('没有可删除的数据!');
            }
        }
        if (empty($name)) {
            $name = $this -> getActionName();
        }
        $model = M($name);

        if (!empty($model)) {
            if (isset($id)) {
                if (is_array($id)) {
                    $where['id'] = array("in", array_filter($id));
                } else {
                    $where['id'] = array('in', array_filter(explode(',', $id)));
                }
                $result = $model -> where($where) -> setField("is_del", 1);
                if ($return_flag) {
                    return $result;
                }
                if ($result !== false) {
                    $this -> assign('jumpUrl', U('ship_type/index'));
                    $this -> success("成功删除{$result}条!");
                } else {
                    $this -> error('删除失败!');
                }
            } else {
                $this -> error('没有可删除的数据!');
            }
        }
    }

    /** 永久删除数据  **/
    protected function _destory($id = null, $name = null, $return_flag = false) {
        if (empty($id)) {
            $id = $_REQUEST['id'];
            if (empty($id)) {
                $this -> error('没有可删除的数据!');
            }
        }
        if (empty($name)) {
            $name = $this -> getActionName();
        }
        $model = M($name);
        if (!empty($model)) {
            if (isset($id)) {
                if (is_array($id)) {
                    $where['id'] = array("in", array_filter($id));
                } else {
                    $where['id'] = array('in', array_filter(explode(',', $id)));
                }
                $app_type = $this -> config['app_type'];

                if ($app_type == "personal") {
                    $where['user_id'] = get_user_id();
                }

                $file_list = $model -> where($where) -> getField("id,add_file");
                $file_list = array_filter(explode(";", implode($file_list)));
                $this -> _destory_file($file_list);

                $result = $model -> where($where) -> delete();
                if ($return_flag) {
                    return $result;
                }
                if ($result !== false) {
                    $this -> assign('jumpUrl', U('ship_type/index'));
                    $this -> success("彻底删除{$result}条!");
                } else {
                    $this -> error('删除失败!');
                }
            } else {
                $this -> error('没有可删除的数据!');
            }
        }
    }
}
