<?php

/*---------------------------------------------------------------------------
 小微OA系统 - 让工作更轻松快乐

 Copyright (c) 2013 http://www.smeoa.com All rights reserved.

 Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )

 Author:  jinzhu.yin<smeoa@qq.com>

 Support: https://git.oschina.net/smeoa/smeoa
 -------------------------------------------------------------------------*/

class DocAction extends CommonAction
{
    protected $config = [
        'app_type' => 'url',
        'url' => ['doc/index','doc/picture'],
        'action_auth' => [
            'view_picture' => 'read',
            'picture' => 'read',
            'batchdown' => 'read',
            'upload' => 'write',
            'delete_picture' => 'write',
        ]
    ];

    function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        $widget['lazyload'] = true;
        $this->assign("widget", $widget);

        $type = isset($_GET['type']) ? $_GET['type'] : 'show_shirt';
        $this->assign('type', $type);

        $map['type'] = $type;

        $model = D('Album');
        if (!empty($model)) {
            $this->_list($model, $map);
        }

        $topImage = $model->getPictureTop();
        $this->assign('topImage', $topImage);

        return $this->display();
    }

    public function add()
    {
        $type = isset($_GET['type']) ? $_GET['type'] : 'show_shirt';
        $this->assign('type', $type);

        $opMode = 'add';
        $this->assign('opMode', $opMode);

        return $this->display();
    }

    public function view_picture()
    {
        $sid = isset($_GET['sid']) ? $_GET['sid'] : '';
        if (empty($sid)) {
            return $this->error('图片不存在');
        }

        $picture = M('File')->where(
            ['sid' => $sid]
        )->find();
        if (empty($picture)) {
            return $this->error('图片不存在');
        }

        $this->assign('picture', $picture);
        $this->display();
    }

    public function picture()
    {
        $widget['lazyload'] = true;
        $widget['layer'] = true;
        $this->assign("widget", $widget);

        $albumId = isset($_GET['album_id']) ? $_GET['album_id'] : '';
        if (empty($albumId)) {
            return $this->error('请选择相册');
        }

        $map['album_id'] = $albumId;

        $model = D('Picture');
        if (!empty($model)) {
            $join = 'INNER JOIN ' . C('DB_PREFIX') . 'file f on ' . C('DB_PREFIX') . 'picture.sid = f.sid';
            $this->_list($model, $map, '', false, C('DB_PREFIX') . 'picture.*,f.save_name,f.thumb_name', $join);
        }

        $albumInfo = M('Album')->find($albumId);
        $this->assign('albumInfo', $albumInfo);

        return $this->display();
    }

    public function add_file()
    {
        if (IS_POST) {
            $albumId = $_POST['album_id'];
            $sidStr = trim($_POST['sid'], ';');

            if (empty($albumId) || empty($sidStr)) {
                $this->ajaxReturn(null, "非法操作");
            }
            $pictureArr = explode(';', $sidStr);
            if (false === (D('Picture')->addPicture($albumId, $pictureArr))) {
                $this->ajaxReturn(null, "保存失败");
            }
            $this->ajaxReturn(null, "保存成功", 1);
        } else {
            $widget['album'] = true;
            $this->assign("widget", $widget);

            $type = isset($_GET['type']) ? $_GET['type'] : 'show_shirt';
            $this->assign('type', $type);

            $albumId = isset($_GET['album_id']) ? $_GET['album_id'] : 0;
            $this->assign('albumId', $albumId);

            $albumList = M('Album')->field('id,name')->where(['type' => $type])->order('sort asc')->select();
            $this->assign('albumList', $albumList);

            $this->display();
        }
    }

    public function _insert($name = 'Album')
    {
        $model = D('Album');
        if (false === $model->create()) {
            $this->error($model->getError());
        }

        $model->startTrans();
        $albumId = $model->add();
        if ($albumId === false) {
            $model->rollback();
            $this->error('新增失败!' . $model->getDbError());
        }

        $model->commit();
        $this->assign('jumpUrl', get_return_url());
        $this->success('添加成功!');
    }

    public function delete_album()
    {
        $idList = $_POST['idList'];
        if (empty($idList)) {
            return $this->ajaxReturn(null, "请选择要删除的相册");
        }
        $idArr = explode(',', $idList);
        $pictureNum = D('Picture')->where(['album_id' => ['in', $idArr]])->count();
        if (empty($pictureNum)) {
            if (M('Album')->where(['id' => ['in', $idArr]])->delete()) {
                $this->ajaxReturn(null, "删除成功", 1);
            } else {
                $this->ajaxReturn(null, "删除失败" . M('Album')->getError());
            }
        } else {
            $this->ajaxReturn(null, "你要删除的相册下有图片，不允许删除");
        }

    }

    public function delete_picture()
    {
        $idList = $_POST['idList'];
        if (empty($idList)) {
            return $this->ajaxReturn(null, "请选择要删除的图片");
        }
        $idArr = explode(',', $idList);
        $pictureList = D('Picture')->where(['id' => ['in', $idArr]])->select();
        if (!empty($pictureList)) {
            $sidArr = array_column($pictureList, 'sid');
            if ($this->_destory_file($sidArr)) {
                $this->ajaxReturn(null, "删除成功", 1);
            } else {
                $this->ajaxReturn(null, "删除失败");
            }
        } else {
            $this->ajaxReturn(null, "图片不存在");
        }
    }

    function upload()
    {
        $this->_upload();
    }

    function batchDown()
    {
        $idList = $_REQUEST['idList'];
        if (empty($idList)) {
            return $this->error( "请选择要下载的图片");
        }
        $idArr = array_filter(explode(',', $idList));
        if (empty($idArr)) {
            return $this->error("选择的图片不存在或已删除");
        }
        $pictureList = D('Picture')->where(['id' => ['in', $idArr]])->select();
        if (empty($pictureList)) {
            return $this->error("选择的图片不存在或已删除");
        }
        $sidArr = array_column($pictureList, 'sid');
        if(count($sidArr) == 1) {
            return $this->_down($sidArr[0]);
        } else {
            $fileName = get_save_path() . "tempData/picture".uniqid().".zip";
            if (file_exists($fileName)) {
                unlink($fileName);
            }
            $this->_batchDown($sidArr, $fileName);
            exit(0);
        }
    }
}
