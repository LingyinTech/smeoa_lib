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


// 用户模型
class UserModel extends CommonModel {
	public $_validate	=	array(
		array('account','/^[a-z]\w{3,}$/i','帐号格式错误'),
		array('password','require','密码必须'),
		array('emp_no','require','工号不能为空'),
		array('repassword','require','确认密码必须'),
		);

	public $_auto		=	array(
		array('password','pwdHash',self::MODEL_BOTH,'callback'),
		array('create_time','time',self::MODEL_INSERT,'function'),
		array('update_time','time',self::MODEL_UPDATE,'function'),
		);

	protected function pwdHash() {
		if(isset($_POST['password'])) {
			return pwdHash($_POST['password']);
		}else{
			return false;
		}
	}
    
    function get_all_user($is_del = 0){
        $sql= " SELECT user .* ,user1.name as pname,CASE user.sex WHEN 'male' THEN '男' WHEN 'female' THEN '女' ELSE '未知' END as sex, dept.name AS dept_name, position.name AS position_name, rank.name AS rank_name";
        $sql.= " FROM ".$this->tablePrefix."user AS user";
        $sql.= " LEFT JOIN ".$this->tablePrefix."position AS position ON user.position_id = position.id";
        $sql.= " LEFT JOIN ".$this->tablePrefix."rank AS rank ON user.rank_id = rank.id";
        $sql.= " LEFT JOIN ".$this->tablePrefix."dept dept ON user.dept_id = dept.id";
        $sql.= " LEFT JOIN ".$this->tablePrefix."user user1 ON user.pid = user1.id";
        $sql.= " WHERE user.is_del=".$is_del." and user.emp_no <> 'admin' ";
        $rs = $this->db->query($sql);
        return $rs;
    }

	function get_user_list($keyword='',$page = '')
	{
	    $firstRow = 0;
        $listRows = 12;
	    if(isset($page->firstRow)){
	        $firstRow = $page->firstRow;
	    }  
        if(isset($page->listRows)){
            $listRows = $page->listRows;
        }
		$sql= " SELECT user .* , dept.name AS dept_name, position.name AS position_name, rank.name AS rank_name";
		$sql.= " FROM ".$this->tablePrefix."user AS user";
		$sql.= " LEFT JOIN ".$this->tablePrefix."position AS position ON user.position_id = position.id";
		$sql.= " LEFT JOIN ".$this->tablePrefix."rank AS rank ON user.rank_id = rank.id";
		$sql.= " LEFT JOIN ".$this->tablePrefix."dept dept ON user.dept_id = dept.id";
		$sql.= " WHERE user.is_del=0 and user.emp_no <> 'admin' ";
		if(!empty($keyword)){
			$sql.= " and (user.emp_no like '%$keyword%' or user.name like '%$keyword%')";
		}
        $sql .=" order by user.emp_no limit $firstRow,$listRows";
		$rs = $this->db->query($sql);
		return $rs;
	}


}
