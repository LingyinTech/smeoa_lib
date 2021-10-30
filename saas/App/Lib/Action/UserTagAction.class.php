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

class UserTagAction extends CommonAction {
	protected $config=array('app_type'=>'asst');
		
	function _search_filter(&$map) {
		if (!empty($_POST['keyword'])) {
			$map['code|name'] = array('like', "%" . $_POST['keyword'] . "%");
		}
	}

	public function index() {
		if ($_POST){
			$op_mode = $_POST["op_mode"];
			$model = D("UserTag");
			if (false === $model -> create()) {
				$this -> error($model -> getError());
			}
			if ($op_mode == "add") {
				$model -> module = MODULE_NAME;
				$model->user_id=get_user_id();
				$list = $model -> add();
			}
			if ($op_mode == "edit") {
				$model->user_id=get_user_id();
				$list = $model -> save();
			}
			if ($op_mode == "del") {
				$model->user_id=get_user_id();
				$tag_id = $model -> id;
				$model -> del_tag($tag_id);
			}
		}
		
		$model = D("UserTag");
		$tag_list = $model -> get_tag_list("id,pid,name");
		$tree = list_to_tree($tag_list);
		$this -> assign('menu', sub_tree_menu($tree));

		$tag_list = $model -> get_tag_list();
		$this -> assign("tag_list", $tag_list);
		$this -> assign('js_file',"UserTag:js/index");
		$this -> display('UserTag:index');
	}

	function winpop() {
		$model = M("UserTag");
		$module = $_GET['module'];
		$where['module'] = array('eq', $module);
		$menu = $model -> where($where) -> field('id,pid,name') -> order('sort asc') -> select();
		$tree = list_to_tree($menu);
		$this -> assign('menu', popup_tree_menu($tree));
		$this -> display();
	}

	function popup() {
		$model = M("UserTag");
		$module = $_GET['module'];
		$where['module'] = array('eq', $module);
		$list = array();
		$list = $model -> where($where) -> field('id,pid,name') -> order('sort asc') -> select();
		$list = list_to_tree($list);
		$this -> assign('list_popup', sub_tree_menu($list));
		$this -> display();
		return;
	}
}
?>