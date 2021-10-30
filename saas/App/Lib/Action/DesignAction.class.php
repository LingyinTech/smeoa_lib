<?php

/**
 * DesigndeptAction
 *
 * 设计部操作类
 *
 * @access public
 * @author ncuzp
 * @version 20141116 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 *
 */
class DesignAction extends CommonAction
{
    protected $config = array('app_type' => 'public');

    function _search_filter(&$map)
    {
        if (!empty($_POST['keyword'])) {
            $map['cust_name|tel|produce_no'] = array('like', "%" . trim($_POST['keyword']) . "%");
        }
    }

    public function add_file()
    {
        if (IS_POST) {
            $model = M('OrderFiles');
            $orderId = $_POST['order_id'];
            $fileSid = $_POST['file_sid'];
            $count = $model->where(array('order_id' => $orderId, 'type' => 'design'))->count();
            if ($count > 0) {
                $result = $model->where(array('order_id' => $orderId, 'type' => 'design'))->save(array('url' => $fileSid));
            } else {
                $result = $model->add(array(
                    'order_id' => $orderId,
                    'type' => 'design',
                    'url' => $fileSid,
                ));
            }

            $prevFiles = $_POST['prev_files'];
            $count = $model->where(array('order_id' => $orderId, 'type' => 'preview'))->count();
            if ($count > 0) {
                $result1 = $model->where(array('order_id' => $orderId, 'type' => 'preview'))->save(array('url' => $prevFiles));
            } else {
                $result1 = $model->add(array(
                    'order_id' => $orderId,
                    'type' => 'preview',
                    'url' => $prevFiles,
                ));
            }


            if (false === $result || false === $result1) {
                $this->ajaxReturn(null, '保存失败' . $model->getDbError(), 'fail');
            } else {
                $this->ajaxReturn(null, null, 'success');
            }

        } else {
            $widget['uploader'] = true;
            $this->assign("widget", $widget);
            $id = $_REQUEST['id'];
            if (empty($id)) {
                $this->errot('非法操作');
            }
            $this->assign('orderId', $id);
            $map['order_id'] = $id;
            $map['type'] = 'design';
            $orderFile = M('OrderFiles')->where($map)->find();
            if (isset($orderFile['url']) && !empty($orderFile['url'])) {
                $this->assign('fileSid', $orderFile['url']);
                $files = array_filter(explode(';', $orderFile['url']));
                $where['sid'] = array('in', $files);
                $file_list = M("File")->where($where)->select();
                $this->assign('file_list', $file_list);
            } else {
                $this->assign('file_list', '');
            }

            $map1['order_id'] = $id;
            $map1['type'] = 'preview';
            $previewList = $orderFile = M('OrderFiles')->where($map1)->find();
            if (isset($previewList['url']) && !empty($previewList['url'])) {
                $this->assign('prevSid', $previewList['url']);
                $files = array_filter(explode(';', $previewList['url']));
                $where['sid'] = array('in', $files);
                $prev_list = M("File")->where($where)->select();
                $this->assign('prev_list', $prev_list);
            } else {
                $this->assign('prev_list', '');
            }

            $this->display();
        }

    }

    public function read_file()
    {
        $id = $_REQUEST['id'];
        if (empty($id)) {
            $this->error('非法操作');
        }
        $this->assign('orderId', $id);
        $map['order_id'] = $id;
        $orderFile = M('OrderFiles')->where($map)->select();

        $fileType = [];
        $urlList = [];
        $orderFile = array_map(function ($v) use (&$fileType, &$urlList) {
            $url = array_filter(explode(';', $v['url']));
            $urlList = array_merge($urlList, $url);
            foreach ($url as $sid) {
                $fileType[$sid] = $v['type'];
            }
            return $v;
        }, $orderFile);

        if (!empty($urlList)) {
            $where['sid'] = array('in', $urlList);
            $fileList = M("File")->where($where)->select();
            $orderFileType = [];
            foreach ($fileList as $file) {
                $orderFileType[$fileType[$file['sid']]]['list'][] = $file;
            }

            foreach ($orderFile as $key => $file) {
                if (isset($orderFileType[$file['type']])) {
                    $orderFileType[$file['type']] = array_merge($orderFileType[$file['type']], $file);
                }
            }
            $this->assign('preview', isset($orderFileType['preview']) ? $orderFileType['preview'] : []);
            $this->assign('design', isset($orderFileType['design']) ? $orderFileType['design'] : []);
        }

        unset($fileType, $urlList);
        $this->display();
    }

    public function upload()
    {
        $this->_upload();
    }

    public function down()
    {
        $this->_down();
    }

    public function batchDown()
    {
        $orderId = $_REQUEST['order_id'];

        $checkRedis = false;
        if (extension_loaded('redis')) {
            $lock_key = "difeng:order:{$orderId}";
            $redis = new Redis();
            $link = $redis->connect(C('REDIS_HOST'),C('REDIS_PORT'));
            $redis->auth(C('REDIS_PWD'));
            $redis->select(C('REDIS_DATABASE'));
            if ($link && $redis->setnx($lock_key, 1)) {
                $redis->expire($lock_key, 300);//每分钟只能提交一次
                $checkRedis = true;
            } else {
                $this->error('该订单已存在下载任务，请耐心等待下载完成或5分钟后重试');
            }
        }

        $orderInfo = M('OrderInfo')->find($orderId);
        if(empty($orderInfo)) {
            $this->error('非法操作');
        }

        $orderFiles = M('OrderFiles')->where(['order_id' => $orderId])->select();
        if (empty($orderFiles)) {
            $this->error('订单未上传文件');
        }
        $fileList = [];
        array_map(function ($v) use (&$fileList) {
            return $fileList = array_merge($fileList, array_filter(explode(';', $v['url'])));
        }, $orderFiles);
        if (empty($fileList)) {
            $this->error('订单未上传文件');
        }
        $fileName = get_save_path() . "tempData/{$orderInfo['produce_no']}.zip";
        if (file_exists($fileName)) {
            unlink($fileName);
        }
        $this->_batchDown($fileList, $fileName);

        if ($checkRedis && !empty($lock_key)) {
            $redis->del($lock_key);
        }

        exit(0);
    }

}
