<?php

class ApiAction extends Action
{
    protected $config = array('app_type' => 'public');

    protected $userId;

    public function _initialize()
    {
        $this->checkLogin();
    }

    public function todo()
    {
        $partnerList = D('Role')->get_duty_list($this->userId);
        $partnerIdArr = array_column($partnerList, 'partner_id');
        if (empty($partnerIdArr)) {
            $this->error('没有权限');
        }

        $orderIdArr = D('OrderPrint')->where(
            [
                'partner_id' => ['in', $partnerIdArr],
                'status' => 0,
            ]
        )->field('order_id')->select();
        $orderIdArr = array_column($orderIdArr, 'order_id');
        if (empty($orderIdArr)) {
            $this->error('没有待处理的订单1');
        }

        $list = D('OrderInfo')->where(
            [
                'id' => ['in', $orderIdArr],
                'order_status' => ['in', [10, 16]],
            ]
        )->field('id,produce_no')->select();
        $orderIdMap = array_column($list, 'produce_no', 'id');
        if (empty($orderIdMap)) {
            $this->error('没有待处理的订单2');
        }

        $orderFiles = M('OrderFiles')->where(
            [
                'order_id' => ['in', array_keys($orderIdMap)],
                'type' => 'design',
            ]
        )->field('url,order_id')->select();

        $urlList = [];
        array_map(
            function ($v) use (&$urlList) {
                $url = array_filter(explode(';', $v['url']));
                foreach ($url as $sid) {
                    $urlList[$sid] = $v['order_id'];
                }
            },
            $orderFiles
        );

        $fileList = M("File")->where(
            [
                'sid' => ['in', array_keys($urlList)]
            ]
        )->field('sid,name,save_name')->select();

        $orderFiles = [];
        foreach ($fileList as $file) {
            $orderFiles[$orderIdMap[$urlList[$file['sid']]]][] = $file;
        }

        $systemConfig = $this->getAccessKey();

        $this->ajaxReturn(
            [
                'status' => 1,
                'info' => 'success',
                'data' => [
                    'access_id' => $systemConfig['OSS_AccessKey_ID'],
                    'access_secret' => $systemConfig['OSS_AccessKey_Secret'],
                    'file_list' => $orderFiles
                ]
            ]
        );
    }

    public function done()
    {
        $produceNoArr = $_POST['produce_no'];
        if (empty($produceNoArr)) {
            $this->error('订单不存在');
        }
        $produceNoArr = explode(';', $produceNoArr);

        $todoList = [];
        $list = D('OrderInfo')->where(
            [
                'produce_no' => ['in', $produceNoArr],
                'order_status' => ['in', [10, 16]],
            ]
        )->field('id,produce_no')->select();
        if (!empty($list)) {
            $orderIdMap = array_column($list, 'produce_no', 'id');
            $orderArr = D('OrderPrint')->where(
                [
                    'order_id' => ['in', array_keys($orderIdMap)],
                    'status' => ['in', [0, 1]],
                ]
            )->field('order_id')->select();

            if (!empty($orderArr)) {
                foreach ($orderArr as $item) {
                    $todoList[] = $orderIdMap[$item['order_id']];
                }
            }
        }

        $clear = array_diff($produceNoArr, $todoList);

        $this->ajaxReturn(
            [
                'status' => 1,
                'info' => 'success',
                'data' => [
                    'produce_no_list' => $clear
                ]
            ]
        );
    }

    protected function checkLogin()
    {
        if (empty($_POST['emp_no'])) {
            $this->error('帐号必须！');
        } elseif (empty($_POST['password'])) {
            $this->error('密码必须！');
        }

        $map = [
            'emp_no' => $_POST['emp_no'],
            'is_del' => 0,
            'password' => md5($_POST['password'])
        ];

        $authInfo = M('User')->where($map)->find();
        if (empty($authInfo)) {
            $this->error('帐号或密码错误！');
        }

        $this->userId = $authInfo['id'];
    }

    protected function getAccessKey()
    {
        $systemConfig = D('SystemConfig')->where(
            [
                'code' => ['in', ['OSS_AccessKey_ID', 'OSS_AccessKey_Secret']],
                'if_open' => 1,
            ]
        )->field('code,val')->select();
        return array_column($systemConfig, 'val', 'code');
    }
}
