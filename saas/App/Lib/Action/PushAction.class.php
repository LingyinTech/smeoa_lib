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

class PushAction extends Action
{

    protected $config = array('app_type' => 'public');

    /*
	function _initialize(){	
		$auth_id = session(C('USER_AUTH_KEY'));
		if (!isset($auth_id)) {
			//跳转到认证网关
			die;
		}
	}*/

    function server()
    {
        $user_id = $user_id = get_user_id();
        session_write_close();
        while (true) {
            $where = array();
            $where['user_id'] = $user_id;
            $where['time'] = array('elt', time() - 1);
            $model = M("Push");
            $data = $model->where($where)->find();

            if ($data) {
                $model->delete($data['id']);
                echo json_encode($data);
                flush();
                sleep(1);
                die;
            } else {
                sleep(1); // sleep 10ms to unload the CPU
                clearstatcache();
            }
        }
    }

    function msgCount()
    {
        $user_id = get_user_id();
        session_write_close();
        if (connection_status() != 0) {
            exit();
        }
        $where = array();
        $where['receiver_id'] = $user_id;
        $where['owner_id'] = $user_id;
        $where['is_del'] = 0;
        $where['is_read'] = 0;
        $model = M("message");
        $count = $model->where($where)->count();
        $this->ajaxReturn(NULL, $count, 1);
    }

    function server2()
    {
        $user_id = $user_id = get_user_id();
        session_write_close();
        for ($i = 0, $timeout = 10; $i < $timeout; $i++) {
            if (connection_status() != 0) {
                exit();
            }
            $where = array();
            $where['user_id'] = $user_id;
            $where['time'] = array('elt', time() - 1);
            $where['if_push'] = 0;
            $where['type'] = 'web';
            $model = M("Push");
            $data = $model->where($where)->find();
            if ($data) {
                sleep(10); //每10秒一次
                //$model -> where("id=" . $data['id']) -> delete();
                $model->where("id=" . $data['id'])->save(array('if_push' => 1));
                $this->ajaxReturn($data['data'], $data['info'], 1);
            } else {
                sleep(5);

            }
        }
        $this->ajaxReturn(null, "no-data", 0);
    }

    /**
     * 微信通知
     */
    public function wechat()
    {
        import("@.ORG.Util.ThinkWechat");
        $weixin = new ThinkWechat ();
        for ($i = 0, $timeout = 10; $i < $timeout; $i++) {//每次发10个，通过curl来调用
            $where = array();
            $where['time'] = array('elt', time() - 1);
            $where['if_push'] = 0;
            $where['type'] = 'wechat';
            $model = M("Push");
            $data = $model->where($where)->find();
            if (isset($data['user_id'])) {
                $wechat = M('User_wechat')->where(array('userid' => $data['user_id']))->find();
                $restr = $weixin->sendMsg($data['info'], $wechat['openid'], 'text');
                Log::write('发送消息，结果' . $restr, 'INFO');
                $model->where(array('id' => $data['id']))->save(array('if_push' => 1));//表示已发送
                sleep(1);
            } else {
                sleep(2);
                clearstatcache();
            }
        }
        Log::write('没有消息要发送了', 'INFO');
    }

    function add($status, $info, $data)
    {
        $user_id = get_user_id();
        $model = M("Push");
        $model->user_id = $user_id;
        $model->data = $data;
        $model->status = $status;
        $model->info = $info;
        $model->add();
    }
}

?>