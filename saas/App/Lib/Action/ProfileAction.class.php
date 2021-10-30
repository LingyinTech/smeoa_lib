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

class ProfileAction extends CommonAction
{
    protected $config = array('app_type' => 'personal');

    function index()
    {
        $user = D("UserView")->find(get_user_id());
        $widget['date'] = true;
        $this->assign("widget", $widget);
        $this->assign("vo", $user);
        $this->display();
    }

    //重置密码
    public function reset_pwd()
    {
        $id = get_user_id();
        $password = $_POST['password'];
        if ('' == trim($password)) {
            $this->error('密码不能为空！');
        }
        $User = M('User');
        $User->password = md5($password);
        $User->id = $id;
        $result = $User->save();
        if (false !== $result) {
            $this->assign('jumpUrl', get_return_url());
            $this->success("密码修改成功");
        } else {
            $this->error('重置密码失败！');
        }
    }

    public function password()
    {
        $this->display();
    }

    function save()
    {
        $model = D("User");
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        session('user_pic', $model->pic);
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
}
