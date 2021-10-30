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


class CommonAction extends Action
{
    const CRAFT_TYPE_LIST = CRAFT_TYPE_LIST;

    public $nowDate;
    public $userName;
    public $userId;

    protected $accessList = [];

    function _initialize()
    {
        $this->userId = $auth_id = session(C('USER_AUTH_KEY'));
        if (empty($auth_id)) {
            //跳转到认证网关
            redirect(U(C('USER_AUTH_GATEWAY')));
        }
        $this->nowDate = date('Y-m-d H:i:s');
        $this->assign('now', time());
        $this->userName = session('user_name');
        $this->assign('js_file', 'js/' . ACTION_NAME);
        $this->assign('imageCache', C('FILE_STORE_URL'));
        $this->_assign_menu();
    }

    /**显示top menu及 left menu **/
    protected function _assign_menu()
    {
        $user_id = get_user_id();

        $model = D("Node");
        $top_menu = cookie('top_menu');

        $top_menu_list = $model->get_top_menu($user_id);
        if (empty($top_menu_list)) {
            $this->assign('jumpUrl', U("Login/logout"));
            $this->error("没有权限");
        }

        $this->assign('top_menu', $top_menu_list);
        $checkDoc = false;
        foreach ($top_menu_list as $menu) {
            if ('doc/index' == trim($menu['url'], '##')) {
                $checkDoc = true;
                break;
            }
        }

        //读取数据库模块列表生成菜单项
        if (empty(
        $menu = hashGetRedisData(
            'difeng:menu:list',
            $this->userId
        )
        )) {
            $menu = $model->access_list();
            if ($checkDoc) {
                $docList = $model->getDocList();
                $menuIdArr = array_column($menu, 'id');
                $docIdArr = array_column($docList, 'id');
                $addIdArr = array_diff($docIdArr, $menuIdArr);
                foreach ($docList as $item) {
                    if (in_array($item['id'], $addIdArr)) {
                        $menu[] = $item;
                    }
                }
            }
            hashSetRedisData('difeng:menu:list', $this->userId, $menu);
        }

        $this->accessList = $menu;

        //缓存菜单访问
        if (!empty($top_menu)) {
            $top_menu_name = $model->where("id=$top_menu")->getField('name');
            $this->assign("top_menu_name", $top_menu_name);
            $this->assign(
                "title",
                get_system_config(
                    "SYSTEM_NAME"
                ) . "-" . $top_menu_name
            );
            $left_menu = list_to_tree($menu, $top_menu);
            $this->assign('left_menu', $left_menu);
        } else {
            $this->assign("title", get_system_config("SYSTEM_NAME"));
        }
    }

    /**列表页面 **/
    function index()
    {
        $this->_index();
    }

    /**查看页面 **/
    function read()
    {
        $this->_edit();
    }

    /**编辑页面 **/
    function edit()
    {
        $this->_edit();
    }

    /** 保存操作  **/
    function save()
    {
        $this->_save();
    }

    public function del_file()
    {
        $file_list = $_REQUEST['sid'];
        $this->_destory_file($file_list);
    }

    /**列表页面 **/
    protected function _index($name = null)
    {
        $map = $this->_search();
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }
        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = D($name);
        if (!empty($model)) {
            $this->_list($model, $map);
        }
        $this->display();
    }

    /**编辑页面 **/
    protected function _edit($name = null, $id = null)
    {
        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = M($name);
        if (empty($id)) {
            $id = $_REQUEST['id'];
        }
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

    protected function _save($name = null)
    {
        $opMode = isset($_POST["op_mode"]) ? $_POST["op_mode"] : '';

        switch ($opMode) {
            case "add" :
                $this->_insert($name);
                break;
            case "edit" :
                $this->_update($name);
                break;
            case "del" :
                $this->_del($name);
                break;
            default :
                $this->error("非法操作");
        }
    }

    /** 插入新新数据  **/
    protected function _insert($name = null)
    {
        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = D($name);
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        /*保存当前数据对象 */
        $list = $model->add();
        if ($list !== false) {//保存成功
            $this->assign('jumpUrl', get_return_url());
            $this->success('新增成功!');
        } else {
            $this->error('新增失败!');
            //失败提示
        }
    }

    /* 更新数据  */
    protected function _update($name = null)
    {
        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = D($name);
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        $list = $model->save();
        if (false !== $list) {
            $this->assign('jumpUrl', get_return_url());
            $this->success('编辑成功!');
            //成功提示
        } else {
            $this->error('编辑失败!');
            //错误提示
        }
    }

    /** 删除标记  **/
    protected function _del($id = null, $name = null, $return_flag = false)
    {
        if (empty($id)) {
            $id = $_REQUEST['id'];
            if (empty($id)) {
                $this->error('没有可删除的数据!');
            }
        }
        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = M($name);

        if (!empty($model)) {
            if (isset($id)) {
                if (is_array($id)) {
                    $where['id'] = array("in", array_filter($id));
                } else {
                    $where['id'] = array('in', array_filter(explode(',', $id)));
                }
                $result = $model->where($where)->setField("is_del", 1);
                if ($return_flag) {
                    return $result;
                }
                if ($result !== false) {
                    $this->assign('jumpUrl', get_return_url());
                    $this->success("成功删除{$result}条!");
                } else {
                    $this->error('删除失败!');
                }
            } else {
                $this->error('没有可删除的数据!');
            }
        }
    }

    /** 永久删除数据  **/
    protected function _destory($id = null, $name = null, $return_flag = false)
    {
        if (empty($id)) {
            $id = $_REQUEST['id'];
            if (empty($id)) {
                $this->error('没有可删除的数据!');
            }
        }
        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = M($name);
        if (!empty($model)) {
            if (isset($id)) {
                if (is_array($id)) {
                    $where['id'] = array("in", array_filter($id));
                } else {
                    $where['id'] = array('in', array_filter(explode(',', $id)));
                }
                $app_type = $this->config['app_type'];

                if ($app_type == "personal") {
                    $where['user_id'] = get_user_id();
                }

                $file_list = $model->where($where)->getField("id,add_file");
                $file_list = array_filter(explode(";", implode($file_list)));
                $this->_destory_file($file_list);

                $result = $model->where($where)->delete();
                if ($return_flag) {
                    return $result;
                }
                if ($result !== false) {
                    $this->assign('jumpUrl', get_return_url());
                    $this->success("彻底删除{$result}条!");
                } else {
                    $this->error('删除失败!');
                }
            } else {
                $this->error('没有可删除的数据!');
            }
        }
    }

    protected function _destory_file($file_list)
    {
        if (isset($file_list)) {
            if (is_array($file_list)) {
                $where["sid"] = array("in", $file_list);
            } else {
                $where["sid"] = array(
                    'in',
                    array_filter(explode(',', $file_list)),
                );
            }
        } else {
            exit();
        }

        $model = M("File");
        $where['module'] = MODULE_NAME;
        $admin = $this->config['auth']['admin'];

        if ($admin) {
            $where['user_id'] = array('eq', get_user_id());
        }

        $result = $model->where($where)->delete();
        if ($result !== false) {
            importDownloadLib();
            $upload = new Download();

            $list = $model->where($where)->select();

            foreach ($list as $file) {
                if ($upload->doesObjectExist($file['save_name'])) {
                    $upload->deleteFile($file['save_name']);
                }
            }

            return true;
        }

        return false;
    }

    protected function _upload()
    {
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        if (!empty($_FILES)) {
            importUploadLib();
            $upload = new Upload();
            $upload->subFolder = strtolower(MODULE_NAME);
            $upload->savePath = get_save_path();
            $upload->saveRule = "uniqid";
            $upload->autoSub = true;
            $upload->subType = "date";

            $upload->allowExts = array_filter(
                explode(",", get_system_config('UPLOAD_FILE_TYPE')),
                'upload_filter'
            );
            if (!$upload->upload()) {
                $data['error'] = 1;
                $data['message'] = $upload->getErrorMsg();
                $data['status'] = 0;
                exit(json_encode($data));
            } else {
                //取得成功上传的文件信息
                $upload_list = $upload->getUploadFileInfo();
                $sid = get_sid();
                $fileInfo = $upload_list[0];
                $model = M("File");
                $model->create($upload_list[0]);
                $model->create_time = time();
                $model->user_id = get_user_id();
                $model->sid = $sid;
                $model->module = MODULE_NAME;
                $file_id = $model->add();
                $fileInfo['file_id'] = $file_id;
                $fileInfo['sid'] = $sid;
                $fileInfo['error'] = 0;
                $fileInfo['url']
                    = "/" . $fileInfo['save_path'] . $fileInfo['save_name'];
                $fileInfo['status'] = 1;
                exit(json_encode($fileInfo));
            }
        }
    }

    protected function _down($sid = null)
    {
        set_time_limit(0);

        if (empty($sid)) {
            $attach_id = $_REQUEST["attach_id"];
            $file_id = f_decode($attach_id);
            $File = M("File")->find($file_id);
        } else {
            $File = M("File")->where(['sid' => $sid])->find();
        }

        $filePath = $File['save_name'];

        importDownloadLib();
        $upload = new Download();
        $metaInfo = $upload->getMata($filePath);
        if (empty($metaInfo)) {
            return $this->error('文件不存在');
        }

        header("Cache-Control: public");

        //设置输出浏览器格式
        header("Content-Type: {$metaInfo['content-type']}");
        header("Content-Disposition: attachment; filename=" . urlencode($File['name']));
        header("Accept-Ranges: bytes");
        $size = $metaInfo['content-length'];

        //如果有$_SERVER['HTTP_RANGE']参数
        if (isset ($_SERVER['HTTP_RANGE'])) {
            /*Range头域 　　Range头域可以请求实体的一个或者多个子范围。
            例如，
            表示头500个字节：bytes=0-499
            表示第二个500字节：bytes=500-999
            表示最后500个字节：bytes=-500
            表示500字节以后的范围：bytes=500- 　　
            第一个和最后一个字节：bytes=0-0,-1 　　
            同时指定几个范围：bytes=500-600,601-999 　　
            但是服务器可以忽略此请求头，如果无条件GET包含Range请求头，响应会以状态码206（PartialContent）返回而不是以200 （OK）。
            */
            // 断点后再次连接 $_SERVER['HTTP_RANGE'] 的值 bytes=4390912-
            list (, $range) = explode("=", $_SERVER['HTTP_RANGE']);
            $size2 = $size - 1; //文件总字节数
            $new_length = $size2 - $range; //获取下次下载的长度
            header("HTTP/1.1 206 Partial Content");
            header("Content-Length: $new_length"); //输入总长
            header(
                "Content-Range: bytes $range$size2/$size"
            ); //Content-Range: bytes 4908618-4988927/4988928   95%的时候
        } else {
            //第一次连接
            $size2 = $size - 1;
            header(
                "Content-Range: bytes 0-$size2/$size"
            ); //Content-Range: bytes 0-4988927/4988928
            header("Content-Length: " . $size); //输出总长
        }

        if (empty($range)) {
            $range = 0;
        }

        //虚幻输出
        while ($range < $size) {
            $end = min($range + 1024 * 8, $size - 1);
            $options = ['range' => "{$range}-{$end}"];
            print $upload->getObject($filePath, $options);
            flush(); //输出缓
            ob_flush();
            $range = $end + 1;
        }
        exit ();
    }

    protected function _batchDown($sidArr, $fileName)
    {
        $fileList = M("File")->where(['sid' => ['in', $sidArr]])->select();

        importDownloadLib();
        $upload = new Download();

        $totalSize = 0;
        foreach ($fileList as $key => &$file) {
            if ($upload->doesObjectExist($file['save_name'])) {
                $url = get_save_path() . $file['save_name'];
                $url = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $url);
                if (!is_dir($dirName = dirname($url))) {
                    mkdir($dirName, 0777, true);
                    chmod($dirName, 0777);
                }
                if (($size = $upload->down($file['save_name'], $url)) !== false) {
                    $totalSize += $size;
                    $file['url'] = $url;
                } else {
                    unset($fileList[$key]);
                }
            } else {
                unset($fileList[$key]);
            }
        }
        unset($file);
        unset($upload);
        if (empty($fileList)) {
            return $this->error('下载失败');
        }

        if (!file_exists($fileName)) {
            if ($totalSize >= 50 * 1024 * 1024) {
                $cmd = "cpulimit -l 10 zip -r -j {$fileName}";
                $newFileList = [];
                foreach ($fileList as $val) {
                    $tempName = dirname($val['url']) . '/' . $val['name'];
                    shell_exec("mv -f " . ROOT_PATH . "/{$val['url']} " . ROOT_PATH . "/{$tempName}");
                    $cmd .= " {$tempName}";
                    $newFileList[] = ['url' => $tempName];
                }
                shell_exec($cmd);
            } else {
                $zip = new ZipArchive();
                if ($zip->open($fileName, ZipArchive::CREATE) == true) {
                    foreach ($fileList as $val) {
                        $zip->addFile($val['url'], $val['name']);
                    }
                    $zip->close();
                }
            }
        }

        if (!file_exists($fileName)) {
            return $this->error("无法找到文件");
        }

        $fileSize = filesize($fileName);
        header("Cache-Control: public");
        header('Expires:0');
        header("Content-Description: File Transfer");
        header('Content-disposition: attachment; filename=' . basename($fileName)); //文件名
        header("Content-Type: application/zip"); //zip格式的
        header("Content-Transfer-Encoding: binary"); //告诉浏览器，这是二进制文件
        header('Content-Length: ' . $fileSize); //告诉浏览器，文件大小

        $buffer = 1024;
        $fileCount = 0;
        $fp = fopen($fileName, 'r');

        while (!feof($fp) && ($fileSize - $fileCount) > 0) {
            $fileData = fread($fp, $buffer);
            $fileCount += $buffer;
            echo $fileData;
        }
        fclose($fp);
        unlink($fileName);
        foreach ($fileList as $val) {
            unlink($val['url']);
        }
        if (!empty($newFileList)) {
            foreach ($newFileList as $val) {
                unlink($val['url']);
            }
        }

        return true;
    }

    //生成查询条件
    protected function _search($name = null)
    {
        $map = array();
        //过滤非查询条件
        $request = array_filter(
            array_keys(array_filter($_REQUEST)),
            "filter_search_field"
        );
        if (empty($request)) {
            return $map;
        }

        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = D($name);
        $fields = get_model_fields($model);

        foreach ($request as $val) {
            $index = strpos($val, '_');
            $field = substr($val, $index + 1);
            $prefix = substr($val, 0, $index + 1);
            if (in_array($field, $fields)) {
                if ($prefix == "be_") {
                    if (isset($_REQUEST["en_" . $field])) {
                        if (strpos($field, "time")) {
                            $map[$field] = array(
                                array(
                                    'egt',
                                    date_to_int(trim($_REQUEST[$val])),
                                ),
                                array(
                                    'elt',
                                    date_to_int(
                                        trim($_REQUEST["en_" . $field])
                                    ) + 86400,
                                ),
                            );
                        }
                        if (strpos($field, "date")) {
                            $map[$field] = array(
                                array(
                                    'egt',
                                    trim($_REQUEST[$val]),
                                ),
                                array(
                                    'elt',
                                    trim($_REQUEST["en_" . substr($val, 3)]),
                                ),
                            );
                        }
                    }
                }

                if ($prefix == "li_") {
                    $map[$field] = array(
                        'like',
                        '%' . trim($_REQUEST[$val]) . '%',
                    );
                }
                if ($prefix == "eq_") {
                    $map[$field] = array('eq', trim($_REQUEST[$val]));
                }

                if ($prefix == 'in_') {
                    $tempValue = array_filter($_REQUEST[$val], function ($v) {return $v !== '';});
                    if (!empty($tempValue)) {
                        $map[$field] = ['in', $tempValue];
                    }
                }

                if ($prefix == "gt_") {
                    $map[$field][] = array('egt', trim($_REQUEST[$val]));
                }
                if ($prefix == "lt_") {
                    $map[$field][] = array('elt', trim($_REQUEST[$val]));
                }
                if ($prefix == "gtt_") {
                    $map[$field][] = ['egt', strtotime(trim($_REQUEST[$val]))];
                }
                if ($prefix == "ltt_") {
                    $date = trim($_REQUEST[$val]);
                    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
                        $date .= ' 23:59:59';
                    }
                    $map[$field][] = ['elt', strtotime($date)];
                }
            }
        }

        return $map;
    }

    protected function _list(
        $model,
        $map,
        $sortBy = '',
        $asc = false,
        $field = '*',
        $join = null
    ) {
        //排序字段 默认为主键名
        if (isset($_REQUEST['_order'])) {
            $order = $_REQUEST['_order'];
        } else {
            if (!empty($sortBy)) {
                $order = $sortBy;
            } else {
                if (in_array('sort', get_model_fields($model))) {
                    $order = 'sort';
                    $asc = true;
                } else {
                    $order = $model->getPk();
                }
            }
        }
        //排序方式默认按照倒序排列
        //接受 sost参数 0 表示倒序 非0都 表示正序
        if (isset($_REQUEST['_sort'])) {
            $sort = $_REQUEST['_sort'] ? 'asc' : 'desc';
        } else {
            if (strpos($sortBy, ',')) {
                $sort = '';
            } else {
                $sort = $asc ? 'asc' : 'desc';
            }
        }

        $count_model = clone $model;
        //取得满足条件的记录数
        if (!empty($count_model->pk)) {
            $count = $count_model->join($join)->where($map)->count($model->pk);
        } else {
            $count = $count_model->join($join)->where($map)->count();
        }
        if ($count > 0) {
            import("@.ORG.Util.Page");
            //创建分页对象
            if (!empty($_REQUEST['list_rows'])) {
                $listRows = $_REQUEST['list_rows'];
            } else {
                $listRows = get_user_config('list_rows');
            }
            $p = new Page($count, $listRows);
            //分页查询数据
            if ($sort) {
                $voList = $model->join($join)->field($field)->where(
                    $map
                )->order($order . ' ' . $sort)->limit(
                    $p->firstRow . ',' . $p->listRows
                )->select();
            } else {
                $voList = $model->join($join)->field($field)->where(
                    $map
                )->order($order)->limit(
                    $p->firstRow . ',' . $p->listRows
                )->select();
            }

            $p->parameter = $this->_search();
            //分页显示
            $page = $p->show();

            //列表排序显示
            $sortImg = $sort;

            //排序图标
            $sortAlt = $sort == 'desc' ? '升序排列' : '倒序排列';

            //排序提示
            $sort = $sort == 'desc' ? 1 : 0;

            //排序方式

            //模板赋值显示
            $this->assign('list', $voList);
            $this->assign('sort', $sort);
            $this->assign('order', $order);
            $this->assign('sortImg', $sortImg);
            $this->assign('sortType', $sortAlt);
            $this->assign("page", $page);
        }
    }

    protected function _assign_folder_list()
    {
        if ($this->config['app_type'] == 'personal') {
            $model = D("UserFolder");
        } else {
            $model = D("SystemFolder");
        }
        $list = $model->get_folder_list();
        $tree = list_to_tree($list);
        $this->assign('folder_list', dropdown_menu($tree));
    }

    protected function _set_field($id, $field, $val, $name = '')
    {
        if (empty($name)) {
            $name = $this->getActionName();
        }
        $model = M($name);
        if (!empty($model)) {
            if (isset($id)) {
                if (is_array($id)) {
                    $where['id'] = array("in", array_filter($id));
                } else {
                    $where['id'] = array('in', array_filter(explode(',', $id)));
                }
                $admin = $this->config['auth']['admin'];
                if (in_array('user_id', $model->getDbFields()) && !$admin) {
                    $where['user_id'] = array('eq', get_user_id());
                };
                $list = $model->where($where)->setField($field, $val);
                if ($list !== false) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    protected function _pushReturn(
        $data,
        $info,
        $status,
        $user_id,
        $time = null
    ) {
        $model = M("Push");

        $model->data = $data;
        $model->info = $info;
        $model->type = 'web';
        $model->status = $status;

        if (empty($user_id)) {
            $model->user_id = get_user_id();
        } else {
            $model->user_id = $user_id;
        }

        if (empty($time)) {
            $model->time = time();
        } else {
            $model->time = $time;
        }
        $model->add();
    }

    protected function saveCraft($orderId, $model)
    {
        $partnerList = D('Partner')->getAllParamGroupByCode();
        $orderPrintModel = D('OrderPrint');

        $oldPartnerList = $orderPrintModel->where(
            [
                'order_id' => $orderId,
            ]
        )->field('partner_id')->select();
        $oldPartnerList = array_column(
            $oldPartnerList,
            'partner_id',
            'partner_id'
        );

        foreach ($partnerList as $code => $item) {
            if (isset($_POST[$code]) && $_POST[$code] > 0) {
                if (!isset($oldPartnerList[$item['id']])) {
                    if (false === $orderPrintModel->setPartner(
                            $orderId,
                            $item['type'],
                            $item['id']
                        )) {
                        $model->rollback();
                        $this->error('操作失败' . $orderPrintModel->getDbError());
                    }

                    D('OrderFlow')->addFlowData(
                        [
                            'order_id' => $orderId,
                            'user_id' => $this->userId,
                            'note' => "选择工艺【{$item['name']}】",
                        ]
                    );
                } else {
                    unset($oldPartnerList[$item['id']]);
                }
            }
        }

        // 还未开始的工艺直接清除掉，已处理的工艺待确认
        if (!empty($oldPartnerList)) {
            $orderPrintModel->where(
                [
                    'order_id' => $orderId,
                    'partner_id' => ['in', $oldPartnerList],
                    'status' => 0,
                ]
            )->delete();
        }
    }

}