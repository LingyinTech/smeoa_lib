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
class LoginAction extends Action {
    protected $config = array('app_type' => 'public');

    function _initialize()
    {
        $this->assign('imageCache', C('FILE_STORE_URL'));
    }

	public function index(){
		//如果通过认证跳转到首页
		$this->assign("js_file","js/index");
		$this->assign("title",get_system_config("SYSTEM_NAME"));
		$this->assign("is_verify_code",get_system_config("IS_VERIFY_CODE"));
		$auth_id = session(C('USER_AUTH_KEY'));
		if (!isset($auth_id)) {
			$this -> display();
		} else {
			header('Location: ' .__APP__);
		}
	}

	// 用户登出
	public function logout() {
		$auth_id = session(C('USER_AUTH_KEY'));
		if (isset($auth_id)) {
			session(C('USER_AUTH_KEY'), null);
			session('user_pic', null);
			$this -> assign("jumpUrl", __URL__ );
			$this -> success('登出成功！');
		} else {
			$this -> assign("jumpUrl", __URL__);
			$this -> error('已经登出！');
		}
	}

	// 登录检测
	public function check_login(){
		$is_verify_code=get_system_config("IS_VERIFY_CODE");
		if(!empty($is_verify_code)){
			if(session('verify') != md5($_POST['verify'])) {
				 $this->error('验证码错误！');
			}
		}

		if (empty($_POST['emp_no'])) {
			$this -> error('帐号必须！');
		} elseif (empty($_POST['password'])) {
			$this -> error('密码必须！');
		}
		if ($_POST['emp_no'] == 'admin'){
			$is_admin=true;
			session(C('ADMIN_AUTH_KEY'), true);
		}

        $map = array();
        // 支持使用绑定帐号登录
        $map['emp_no'] = $_POST['emp_no'];
        $map["is_del"] = array('eq', 0);
        $map['password']=array('eq',md5($_POST['password']));
        $model = M("User");
        $auth_info = $model -> where($map) -> find();

		//使用用户名、密码和状态的方式进行认证
		if (false == $auth_info){
			$this -> error('帐号或密码错误！');
		} else {
			session(C('USER_AUTH_KEY'),$auth_info['id']);
			session('emp_no', $auth_info['emp_no']);
			session('user_name', $auth_info['name']);
			session('user_pic', $auth_info['pic']);
			session('dept_id', $auth_info['dept_id']);
            session('rank_id', $auth_info['rank_id']);
            session('area', $auth_info['area']);

			//保存登录信息
			$User = M('User');
			$ip = get_client_ip();
			$time = time();
			$data = array();
			$data['id'] = $auth_info['id'];
			$data['last_login_time'] = $time;
			$data['login_count'] = array('exp', 'login_count+1');
			$data['last_login_ip'] = $ip;
			$User -> save($data);

			$lastViewUrl = hashGetRedisData('oms:last:view', $auth_info['id']);
            if (empty($lastViewUrl)) {
                $lastViewUrl = redirectFirstView();
            }
            $this->jumpToLastView($lastViewUrl);
		}
	}

	protected function jumpToLastView($lastViewUrl) {
        $this->assign('jumpUrl', $lastViewUrl);
        header("Location: {$lastViewUrl}");
    }

    public function verify() {
		$type = isset($_GET['type']) ? $_GET['type'] : 'gif';
		import("@.ORG.Util.Image");
		Image::buildImageVerify(4,1, $type);
	}
}
