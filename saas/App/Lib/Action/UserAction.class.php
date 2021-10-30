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

// 后台用户模块
class UserAction extends CommonAction
{
    protected $config = array('app_type' => 'master', 'action_auth' => array('password' => 'admin', 'reset_pwd' => 'admin'));

    function _search_filter(&$map)
    {
        if (!empty($_POST['keyword'])) {
            $map['name|emp_no'] = array('like', "%" . $_POST['keyword'] . "%");
        }
    }

    public function index()
    {
        $widget['date'] = true;
        $this->assign("widget", $widget);
        $model = M("Position");
        $list = $model->where('is_del=0')->order('sort asc')->getField('id,name');
        $this->assign('position_list', $list);

        $model = M("Rank");
        $list = $model->where('is_del=0')->order('sort asc')->getField('id,name');
        $this->assign('rank_list', $list);

        $model = M("Dept");
        $list = $model->where('is_del=0')->order('sort asc')->getField('id,name');
        $this->assign('dept_list', $list);

        $model = M("Rank");
        $list = $model->where('is_del=0')->order('sort asc')->getField('id,name');
        $this->assign('rank_list', $list);

        $area = M('Area')->field('areaname as id,areaname as name,pid')->order('sort asc')->select();
        $this->assign('area_list', $area);

        if (isset($_POST['eq_is_del'])) {
            $eq_is_del = $_POST['eq_is_del'];
        } else {
            $eq_is_del = "0";
        }
        //die;
        $this->assign('eq_is_del', $eq_is_del);

        $map = $this->_search();
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }
        $map['is_del'] = array('eq', $eq_is_del);
        $map['emp_no'] = array('neq', 'admin');//不显示admin账号
        $name = $this->getActionName();
        $model = D($name);

        if (!empty($model)) {
            $this->_list($model, $map, 'id', true);
        }
        $this->display();
    }

    // 检查帐号
    public function check_account()
    {
        if (!preg_match('/^[a-z]\w{4,}$/i', $_POST['emp_no'])) {
            $this->error('员工编号必须是数字或字母，且5位以上！');
        }
        $User = M("User");
        // 检测用户名是否冲突
        $name = $_REQUEST['emp_no'];
        $result = $User->getByAccount($name);
        if ($result) {
            $this->error('该员工编号已经存在！');
        } else {
            $this->assign('jumpUrl', get_return_url());
            $this->success('该员工编号可以使用！');
        }
    }

    //提量添加员工
    public function batch_add()
    {
        if (IS_POST) {
            $save_path = get_save_path();
            import("@.ORG.Util.UploadFile");
            $upload = new UploadFile();
            $upload->savePath = $save_path;
            $upload->allowExts = array('xlsx', 'xls');
            $upload->saveRule = uniqid;
            $upload->autoSub = false;

            if (!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            } else {
                $successCount = 0;
                $failCount = 0;
                //取得成功上传的文件信息
                $uploadList = $upload->getUploadFileInfo();
                Vendor('Excel.PHPExcel');
                //导入thinkphp第三方类库

                $inputFileName = $save_path . $uploadList[0]["savename"];
                $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $model = M("User");
                for ($i = 3; $i <= count($sheetData); $i++) {
                    $data = array();
                    $data['name'] = $sheetData[$i]["A"]; //员工姓名
                    $data['emp_no'] = $sheetData[$i]["B"]; //员工编号
                    $data['letter'] = get_letter($sheetData[$i]["A"]); //
                    $data['password'] = md5(trim($sheetData[$i]["C"])); //密码
                    $data['dept_id'] = 1;   //部门ID，默认
                    $data['position_id'] = 7; //职位
                    $data['rank_id'] = 5;    //职级
                    $data['sex'] = 'unknow';  //性别
                    //$data['birthday']='0000-00-00';    //生日
                    //$data['last_login_ip']= ; //最后一次登录IP
                    $data['login_count'] = 0; //登录次数
                    //$data['pic']= ''; //头象
                    //$data['email']=; //邮箱
                    //$data['duty']=; //负责业务
                    //$data['office_tel']= ; //办公室电话                    
                    $data['mobile_tel'] = $sheetData[$i]["D"]; //移动电话
                    $data['area'] = $sheetData[$i]["E"];
                    $data['create_time'] = time(); //添加时间
                    $data['update_time'] = time(); //更新时间
                    $data['is_del'] = 0; //是否删除
                    //$data['openid']=; //微信ID
                    //$data['westatus']=; 
                    $result = $model->add($data);
                    if ($result) {
                        $successCount++;
                        $this->add_role($result);
                        $data1['id'] = $result;
                        M("UserConfig")->add($data1);
                    } else {
                        $failCount++;
                    }
                }
                if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/" . $inputFileName)) {
                    unlink($_SERVER["DOCUMENT_ROOT"] . "/" . $inputFileName);
                }
                $this->success("{$successCount}条导入成功,{$failCount}条记录导入失败！", get_return_url(), 3);
            }
        } else {
            $this->display();
        }
    }

    public function export_users()
    {

        Vendor('Excel.PHPExcel');

        $inputFileName = "Public/templete/users_export.xls";
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        $objPHPExcel->getProperties()->setCreator("dfsg")->setLastModifiedBy("dfsg")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2003 XLS, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")->setCategory("Test result file");

        $i = 2;

        if (isset($_REQUEST['eq_is_del'])) {
            $eq_is_del = $_REQUEST['eq_is_del'];
        } else {
            $eq_is_del = "0";
        }

        $users = D('User')->get_all_user($eq_is_del);

        foreach ($users as $key => $item) {
            $i++;

            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", $item['emp_no'])
                ->setCellValue("B$i", $item['name'])
                ->setCellValue("C$i", $item['sex'])//性别
                ->setCellValue("D$i", $item['birthday'])//生日
                ->setCellValue("E$i", $item['dept_name'])//部门
                ->setCellValue("F$i", $item['pname'])//汇报对象
                ->setCellValue("G$i", $item['area'])//归属区域
                ->setCellValue("H$i", $item['rank_name'])//职级
                ->setCellValue("I$i", $item['position_name'])//职位
                ->setCellValue("J$i", $item['office_tel'])//办公室电话
                ->setCellValue("K$i", $item['mobile_tel'])//移动电话
                ->setCellValue("L$i", $item['email'])//电子邮箱
                ->setCellValue("M$i", $item['duty']); //负责业务
        }

        $objPHPExcel->getActiveSheet()->setTitle('所有人员');
        $file_name = date('Y-m-d') . ".xlsx";
        // Redirect output to a client’s web browser (Excel2007)
        header("Content-Type: application/force-download");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition:attachment;filename =" . str_ireplace('+', '%20', URLEncode($file_name)));
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit(0);
    }

    /**
     * 添加默认权限
     */
    protected function add_role($user_id)
    {
        //新增用户自动加入相应权限组
        $RoleUser = M("RoleUser");
        $RoleUser->user_id = $user_id;
        // 添加默认权限
        $RoleUser->role_id = 3;
        $RoleUser->add();
    }

    //重置密码
    public function reset_pwd()
    {
        $id = $_POST['user_id'];
        $password = $_POST['password'];
        if ('' == trim($password)) {
            $this->error('密码不能为空!');
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

    /**
     * 弹出设置密码页面
     */
    public function password()
    {
        $this->assign("id", $_REQUEST['id']);
        $this->display();
    }

    public function winpop2()
    {
        $map = $this->_search();
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }
        $map['is_del'] = array('eq', 0);
        $map['emp_no'] = array('neq', 'admin');//不显示admin账号
        $model = D('user');

        //添加分页
        $count_model = clone $model;
        //取得满足条件的记录数
        if (!empty($count_model->pk)) {
            $count = $count_model->where($map)->count($model->pk);
        } else {
            $count = $count_model->where($map)->count();
        }
        if ($count > 0) {
            import("@.ORG.Util.Page");
            //创建分页对象
            $listRows = get_user_config('list_rows');
            $p = new Page($count, $listRows);

            $menu = array();
            $menu = $model->where($map)->field('id,name,emp_no')->order('emp_no asc')->limit($p->firstRow . ',' . $p->listRows)->select();
            $tree = list_to_tree($menu);
            $this->assign('menu', popup_tree_menu($tree));

            $p->parameter = $this->_search();
            //分页显示
            $page = $p->show();
            $this->assign("page", $page);
        }

        $this->display();
    }

    function json()
    {
        header("Content-Type:text/html; charset=utf-8");
        $key = $_REQUEST['key'];

        $model = M("User");
        $where['name'] = array('like', "%" . $key . "%");
        $where['emp_no'] = array('like', "%" . $key . "%");
        $where['_logic'] = 'or';
        $map['_complex'] = $where;
        $list = $model->where($map)->field('id,name')->select();
        exit(json_encode($list));
    }

    function user_json()
    {
        $user_id = $_REQUEST['user_id'];
        $model = M("User");
        $user_info = $model->find($user_id);
        $this->ajaxReturn($user_info, "查询成功", 1);
    }

    function del()
    {
        $id = $_POST['id'];
        $this->_destory($id);
    }

    // 插入数据
    public function _insert()
    {
        // 创建数据对象
        $model = D("User");
        if (!$model->create()) {
            $this->error($model->getError());
        } else {
            // 写入帐号数据
            $model->letter = get_letter($model->name);
            $model->password = md5('123456');
            if ($result = $model->add()) {
                $data['id'] = $result;
                M("UserConfig")->add($data);
                $this->add_role($result); //新增用户默认添加基本权限
                $this->assign('jumpUrl', get_return_url());
                $this->success('用户添加成功！');
            } else {
                $this->error('用户添加失败！');
            }
        }
    }

    protected function _update()
    {
        if ($_POST['id'] === $_POST['pid']) {
            $this->error('编辑失败,失败原因：汇报对象不能是自己.');
        }

        $name = $this->getActionName();
        $model = D($name);
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        // 更新数据
        $model->__set('letter', get_letter($model->__get('name')));
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

    /**编辑页面 **/
    protected function _edit()
    {
        $model = M('User');
        if (empty($id)) {
            $id = $_REQUEST['id'];
        }

        if (empty($id)) {
            $this->error(0, "读取失败", 0);
        }
        $vo = $model->find($id);
        if (!empty($vo['pid'])) {
            $user = $model->find($vo['pid']);
            $vo['pid_name'] = $user['name'];
        } else {
            $vo['pid_name'] = '';
        }
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
}

?>