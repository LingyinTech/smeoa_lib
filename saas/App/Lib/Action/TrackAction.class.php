<?php

/**
 *
 */
class TrackAction extends CommonAction
{
    protected $config = ['app_type' => 'url', 'action_auth' => [
        'info' => 'read',
    ]];

    const ORDER_STATUS = [
        1 => '跟进中（意向弱）',
        2 => '跟进中（意向中）',
        10 => '跟进中（意向强）',
        11 => '无意向',
        100 => '客户已成交',
    ];

    function _initialize()
    {
        parent::_initialize();
        $this->assign('statusList', self::ORDER_STATUS);

        $this->assign('filter', $_REQUEST);
    }

    function _search_filter(&$map)
    {
        if (!empty($_POST['keyword'])) {
            $map['cust_name|produce_no|sales|style|s.name'] = ['like', "%" . trim($_POST['keyword']) . "%"];
        }
    }

    public function index()
    {
        $map = $this->_search('Track');
        if (!empty($map)) {
            foreach ($map as $key => $value) {
                unset($map[$key]);
                $map[C('DB_PREFIX') . "track.{$key}"] = $value;
            }
        }
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }

        $sort = '';

        if (isset($_GET['order_status'])) {
            $statusList = explode(',',$_GET['order_status']);
            $statusList = array_map(function ($v) {return intval($v);},$statusList);
            $map[C('DB_PREFIX') . 'track.order_status'] = ['in',$statusList];
        }

        $this->assign('name', '所有订单');
        if (!empty($_GET['my'])) {
            $this->assign('name', '我的订单');
            $map[C('DB_PREFIX') . 'track.user_id'] = session(C('USER_AUTH_KEY'));
            $this->assign('operate', 1);
        }

        $statusField = '';

        $model = M('Track');
        if (!empty($model)) {
            $join = 'INNER JOIN ' . C('DB_PREFIX') . 'user u on ' . C('DB_PREFIX') . 'track.user_id = u.id';
            $join .= ' LEFT JOIN ' . C('DB_PREFIX') . 'shop AS s ON ' . C('DB_PREFIX') . 'track.shop_id = s.id';
            $this->_list($model, $map, $sort, false, C('DB_PREFIX') . "track.*,u.name{$statusField}", $join);
        }

        $shopList = D('Shop')->getCache();
        $this->assign('shopList', $shopList);

        $this->display();
    }

    public function add()
    {
        $widget['date'] = true;
        $this->assign("widget", $widget);

        $this->assign('userId', session(C('USER_AUTH_KEY')));
        $this->assign('userName', session('user_name'));

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $paramList = D('OrderParam')->getAllParamGroupByType('style');
        $this->assign('style_list', $paramList['style']);



        $this->display();
    }

    public function info()
    {
        $widget['date'] = true;
        $this->assign("widget", $widget);

        $id = $_REQUEST['id'];
        $track = D('Track')->find($id);
        $track['order_time'] = empty($track['order_time']) ? '' : date('Y-m-d', $track['order_time']);
        $this->assign('track',$track);

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $paramList = D('OrderParam')->getAllParamGroupByType('style');
        $this->assign('style_list', $paramList['style']);

        $this->display();
    }

    public function _edit()
    {
        $widget['date'] = true;
        $this->assign("widget", $widget);

        $id = $_REQUEST['id'];
        $track = D('Track')->find($id);
        $track['order_time'] = empty($track['order_time']) ? '' : date('Y-m-d', $track['order_time']);
        $this->assign('track',$track);

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $paramList = D('OrderParam')->getAllParamGroupByType('style');
        $this->assign('style_list', $paramList['style']);

        $this->display();
    }

    protected function _insert()
    {
        if (extension_loaded('redis')) {
            $lock_key = 'difeng:track:add:' . get_user_id();
            $redis = new Redis();
            $link = $redis->connect(C('REDIS_HOST'),C('REDIS_PORT'));
            $redis->auth(C('REDIS_PWD'));
            $redis->select(C('REDIS_DATABASE'));
            if ($link && $redis->setnx($lock_key, 1)) {
                $redis->expire($lock_key, 5);//每分钟只能提交一次
            } else {
                $this->error('您提交速度过快,请稍后再试!');
            }
        }

        $model = D('Track');
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        $model->order_time = strtotime($_POST['order_time']);
        $model->startTrans();
        $orderId = $model->add();
        if ($orderId !== false) {//保存成功

            $model->commit();
            $this->assign('jumpUrl', get_return_url());
            $this->success('添加成功!');

        } else {
            //失败提示
            $model->rollback();
            $this->error('新增失败!' . $model->getDbError());
        }
    }

    public function _update()
    {

        if (isset($_POST['order_time'])) {
            $_POST['order_time'] = strtotime($_POST['order_time']);
        }

        $model = D('Track');
        if (false === $model->create()) {
            $this->ajaxReturn(NULL, "编辑失败" . $model->getError(), 0);
        }

        $model->startTrans();
        $result1 = $model->save();

        if (false === $result1) {
            $model->rollback();
            $this->ajaxReturn(NULL, "编辑失败:" . $model->getError() . ',' . $model->getError(), 0);
        }
        $model->commit();
        $this->ajaxReturn(NULL, "编辑成功", 1);
    }

}
            