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

class FileAction extends CommonAction {
	protected $config = array('app_type' => 'asst');
	//过滤查询字段

	function player() {
		$user_id = get_user_id();
		$this -> assign("user_id", $user_id);

		$file_id = $_GET['attach_id'];
		$file_id = f_decode($file_id);
		$add_file = explode(";", $add_file);
		$add_file = $add_file[0];
		$where['id'] = $file_id;
		$video_path = M("File") -> where($where) -> getField("savename");
		$video_ext = M("File") -> where($where) -> getField("extension");
		$this -> assign('video_file', get_save_path() . $video_path);
		$this -> assign('video_ext', $video_ext);
		$this -> display();
	}
}
