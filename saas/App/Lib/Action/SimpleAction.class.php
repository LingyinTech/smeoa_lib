<?php

/**
 * OrderAction
 *
 * 订单操作类
 *
 * @access public
 * @author actors315@gmail.com
 * @version 20141116 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 *
 */
class SimpleAction extends CommonAction
{
    const ORDER_STATUS = [
        0 => '初稿待审核',
        10 => '订单安排中',
        11 => '订单已取消',
        20 => '订单已发货',
    ];

    const SHIRT_TYPE = [
        'local' => '仓库下单',
        'entrust' => '外调外做',
        'transfer' => '缺货调货',
    ];

    protected $config = ['app_type' => 'url', 'action_auth' => [
        'simple' => 'read',
        'firm' => 'read',
        'delivery' => 'write',
        'refund' => 'write',
        'delete' => 'write',
    ]];

    function _initialize()
    {
        parent::_initialize();

        $script['simple'] = true;
        $this->assign('script',$script);

        $this->assign('filter', $_REQUEST);


        $this->assign('orderStatusList', self::ORDER_STATUS);
        $this->assign('shirtTypeList',self::SHIRT_TYPE);
        $this->assign('craftTypeList',self::CRAFT_TYPE_LIST);
        $this->assign('payTypeList', PAY_TYPE_LIST);
    }

    function _search_filter(&$map)
    {
        if (!empty($_POST['keyword'])) {
            $map['cust_name|produce_no|sales'] = array('like', "%" . trim($_POST['keyword']) . "%");
        }
    }

    public function index()
    {
        saveLastViewUrl();

        $widget['layer'] = true;
        $widget['date'] = true;
        $this->assign('widget', $widget);

        $map = $this->_search('Simple');
        if (!empty($map)) {
            foreach ($map as $key => $value) {
                unset($map[$key]);
                $map[C('DB_PREFIX') . "simple.{$key}"] = $value;
            }
        }
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }

        if (isset($_GET['order_status'])) {
            $orderStatus = intval($_GET['order_status']);
            $map[C('DB_PREFIX') . 'simple.order_status'] = $orderStatus;
            $this->assign('orderStatus', $orderStatus);
        }

        if (isset($_GET['delivery'])) {
            $isDelivery = intval($_GET['delivery']);
            $map['os.is_delivery'] = $isDelivery;
            unset($map[C('DB_PREFIX') . 'simple.order_status']);
            $map[C('DB_PREFIX') . 'simple.order_status'][] = ['egt', '1'];
            $map[C('DB_PREFIX') . 'simple.order_status'][] = ['neq', '11'];
            $this->assign('orderStatus', 'delivery');
        }

        if (isset($_GET['reject'])) {
            $isReject = intval($_GET['reject']);
            $map['os.is_reject'] = $isReject;
        }

        $noteStatus = [
            'is_urgent' => '加急',
            'is_24ship' => '当日发货',
            'is_cancel' => '退单',
        ];

        if (isset($_POST['note_status']) && isset($noteStatus[$_POST['note_status']])) {
            $map["os.{$_POST['note_status']}"] = 1;
        }

        if (isset($_GET['operate'])) {
            $this->assign('operate', 1);
        }

        $this->assign('name', '所有订单');
        if (!empty($_GET['my'])) {
            $this->assign('name', '我的订单');
            $map[C('DB_PREFIX') . 'simple.user_id'] = session(C('USER_AUTH_KEY'));
            $this->assign('operate', 1);
        }

        $statusField = ',os.is_urgent,os.is_24ship,os.is_after_sale,os.is_cancel,os.is_produce';

        $model = M('Simple');
        if (!empty($model)) {
            $join = 'INNER JOIN ' . C('DB_PREFIX') . 'user u on ' . C('DB_PREFIX') . 'simple.user_id = u.id';
            $join .= ' LEFT JOIN ' . C('DB_PREFIX') . 'simple_status AS os ON ' . C('DB_PREFIX') . 'simple.id = os.order_id';
            $this->_list($model, $map, '', false, C('DB_PREFIX') . "simple.*,u.name{$statusField}", $join);
        }

        $shopList = D('Shop')->getCache();
        $this->assign('shopList', $shopList);

        $this->assign('orderStatusList', self::ORDER_STATUS);

        $checkDelete = D('Node')->checkAccess('simple/delete');
        $this->assign('checkDelete', empty($checkDelete) ? 0 : 1);

        $this->display();
    }

    /**
     * 添加订单
     */
    public function add()
    {
        saveLastViewUrl();

        $widget['date'] = true;
        $widget['layer'] = true;
        $widget['uploader'] = true;
        $this->assign("widget", $widget);


        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $this->assign('userId', session(C('USER_AUTH_KEY')));
        $this->assign('userName', session('user_name'));

        $this->setUserList();



        $this->display();
    }

    /**
     * 订单详情
     *
     * 根据订单编辑查看订单详情，页面包含所有订单和订单的状态
     */
    public function simple()
    {
        $widget['layer'] = true;
        $this->assign("widget", $widget);

        $id = $_REQUEST['id'];
        $order = D('Simple')->getInfo($id);
        $order['order_time'] = date('Y-m-d', $order['order_time']);
        $this->assign('order', $order);

        $flowList = M('SimpleFlow')->alias('of')
            ->join(' LEFT JOIN ' . C('DB_PREFIX') . 'user AS u ON of.user_id = u.id')
            ->where("of.order_id = '{$id}'")
            ->order('of.create_time asc')
            ->field('of.*,u.name as user_name')
            ->select();
        $this->assign('flowList', $flowList);

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $this->display();
    }

    protected function check_access()
    {
        // 排单客服
        $checkPlanOrder = D('Node')->checkAccess(['simple/index/status/10/operate/1','simple/index?status=10&operate=1']);
        $this->assign('checkPlanOrder', empty($checkPlanOrder) ? 0 : 1);
    }

    public function note()
    {
        if (IS_POST) {
            $id = $_POST['orderid'];
            $typeid = $_POST['typeid'];
            $note = $_POST['note'];
            $model = M('SimpleFlow');
            $info = $model->where(array(
                'orderid' => $id,
                'typeid' => $typeid
            ))->find();

            $result = $model->where(array(
                'orderid' => $id,
                'typeid' => $typeid
            ))->save(array(
                'note' => trim($info['note'] . '<br />' . $note, '<br />')
            ));
            if (FALSE !== $result) {
                $this->ajaxReturn(NULL, "备注成功", 1);
            } else {
                $this->ajaxReturn(NULL, "备注失败", 0);
            }
        } else {
            $id = $_REQUEST['id'];
            $typeid = $_REQUEST['typeid'];
            $this->assign('orderid', $id);
            $this->assign('typeid', $typeid);
            $this->display();
        }
    }

    /**
     * 发货
     */
    public function delivery()
    {
        if (IS_POST) {
            $opMode = $_POST['op_mode'];
            if ($opMode == 'edit') {
                $this->_edit_delivery();
            } else {
                $this->_add_delivery();
            }
        } else {
            $id = $_REQUEST['id'];
            $this->assign('order_id', $id);
            $simpleInfo = M('Simple')->find($id);
            $this->assign('simpleInfo',$simpleInfo);

            $shipTypeList = M('ShipType')->field('name id,name')->select();
            $this->assign('shipTypeList', $shipTypeList);
            $ship_info = M('SimpleShip')->where(['order_id' => $id])->find();
            if (isset($ship_info['ship_name'])) {
                $this->assign('shipInfo', $ship_info);
                $this->assign('opMode', 'edit');
            }
            $this->display();
        }
    }

    protected function _edit_delivery()
    {
        $orderId = $_REQUEST['order_id'];
        $shipName = $_POST['ship_name'];
        $shipCode = $_POST['ship_code'];
        $note = $shipNote = $_POST['note'];
        $shipFee = $_POST['ship_price'];
        if (empty($orderId)) {
            $this->ajaxReturn(null, "非法操作", 0);
        }
        $model = D('SimpleShip');
        if (false === $model->create()) {
            $this->ajaxReturn(NULL, "操作失败：" . $model->getDbError(), 0);
        }

        $model->startTrans();
        $result = $model->where(array(
            'order_id' => $orderId
        ))->save(array(
            'ship_name' => $shipName,
            'ship_code' => $shipCode,
            'note' => $note
        ));

        $note = "编辑发货信息,快递名称【{$shipName}】,物流单号:{$shipCode},备注:{$note}";

        $result1 = D('Simple')->where(['id' => $orderId])->save([
            'ship_method' => $shipName,
            'ship_note' => $shipNote,
            'ship_fee' => $shipFee,
        ]);
        if (!$result1) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败：" . D('Simple')->getDbError(), 0);
        }

        $result1 = D('SimpleFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => $note,
        ]);

        if (false === $result || false === $result1) {
            $model->rollback();
            $this->ajaxReturn(NULL, "操作失败：" . $model->getDbError(), 0);
        } else {
            $model->commit();
            $this->ajaxReturn(NULL, "修改成功", 1);
        }
    }

    protected function _add_delivery()
    {
        $orderId = $_REQUEST['order_id'];
        $shipName = $_POST['ship_name'];
        $shipCode = $_POST['ship_code'];
        $note = $shipNote = $_POST['note'];
        $shipFee = $_POST['ship_price'];
        if (empty($orderId)) {
            $this->ajaxReturn(null, "非法操作", 0);
        }
        $model = D('SimpleShip');
        if (false === $model->create()) {
            $this->ajaxReturn(null, "操作失败：" . $model->getDbError(), 0);
        }
        $model->ship_time = time();
        $model->startTrans();

        if (!($result = $model->add())) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败：" . $model->getDbError(), 0);
        }

        $note = "标记为【已发货】,快递名称【{$shipName}】,物流单号:{$shipCode},备注:{$note}";

        D('SimpleFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => $note,
        ]);

        $result1 = D('Simple')->where(['id' => $orderId, 'order_status' => 10])->save([
            'ship_method' => $shipName,
            'ship_note' => $shipNote,
            'ship_fee' => $shipFee,
            'order_status' => 20
        ]);
        if (!$result1) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败：" . D('Simple')->getDbError(), 0);
        }

        $result3 = D('SimpleStatus')->where([
            'order_id' => $orderId,
        ])->save([
            'is_delivery' => 1,
            'delivery_time' => time(),
        ]);

        if (!$result3) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败：" . D('OrderStatus')->getDbError(), 0);
        }

        $model->commit();
        $this->ajaxReturn(null, "标记成功", 1);
    }

    /**
     * 退单
     */
    public function refund()
    {
        if (IS_POST) {
            $id = $_POST['order_id'];
            $reason = $_POST['note'];

            $result = $this->_refund($id, $reason);

            if (false !== $result) {
                $this->ajaxReturn(NULL, "标记退单成功", 1);
            } else {

                $this->ajaxReturn(NULL, "退单失败", 0);
            }
        } else {
            $id = $_REQUEST['id'];
            $this->assign('orderId', $id);
            $this->display();
        }
    }

    protected function _refund($orderId, $note)
    {

        $model = D('OrderInfo');
        $result = $model->where(array('id' => $orderId))->save(array(
            'order_status' => 11,
        ));

        $result1 = D('OrderStatus')->where(['order_id'=>$orderId])->save([
            'is_cancel' => 1,
            'cancel_time' => time(),
            'cancel_note' => $note,
            'is_complete' => 1
        ]);

        $result2 = D('SimpleFlow')->addFlowData([
            'user_id' => $this->userId,
            'order_id' => $orderId,
            'note' => "标记为退单,退单原因:{$note}",
        ]);

        if (false === $result || false === $result1 || false === $result2) {
            $model->rollback();
            return false;
        } else {
            $model->commit();
            return true;
        }
    }

    public function add_file()
    {
        if (IS_POST) {
            $model = M('SimpleFiles');
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
            $orderFile = M('SimpleFiles')->where($map)->find();
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
            $previewList = $orderFile = M('SimpleFiles')->where($map1)->find();
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
        $orderFile = M('SimpleFiles')->where($map)->select();

        $fileType = [];
        $urlList = [];
        $orderFile = array_map(function ($v) use (&$fileType, &$urlList) {
            $url = array_filter(explode(';', $v['url']));
            $urlList = array_merge($urlList, $url);
            foreach ($url as $sid){
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

    protected function _insert()
    {
        if (extension_loaded('redis')) {
            $lock_key = 'simple:insert:user' . get_user_id();
            $redis = new Redis();
            $link = $redis->connect(C('REDIS_HOST'),C('REDIS_PORT'));
            $redis->auth(C('REDIS_PWD'));
            $redis->select(C('REDIS_DATABASE'));
            if ($link && $redis->setnx($lock_key, 1)) {
                $redis->expire($lock_key, 30);//每分钟只能提交一次
            } else {
                $this->error('您提交速度过快,请稍后再试!');
            }
        }

        $model = D('Simple');
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        $model->order_time = strtotime($_POST['order_time']);
        $model->startTrans();
        $orderId = $model->add();
        if ($orderId !== false) {//保存成功

            $result = D('SimpleStatus')->add(array(
                'order_id' => $orderId,
            ));

            if ($result !== false) {
                $model->commit();
                $this->assign('jumpUrl', get_return_url());
                $this->success('添加成功!');
            } else {
                $model->rollback();
                $this->error('新增失败!' . D('SimpleStatus')->getDbError());
            }
        } else {
            //失败提示
            $model->rollback();
            $this->error('新增失败!' . $model->getDbError());
        }
    }

    public function _edit()
    {
        $widget['date'] = true;
        $widget['layer'] = true;
        $this->assign("widget", $widget);

        $id = $_REQUEST['id'];
        $order = D('Simple')->find($id);
        if (empty($id) || empty($order)) {
            $this->error(0, "读取失败", 0);
        }

        /**
         * 判断下当前流程和权限
         * 1.如果流程流转到生产部部不允修改
         * 2.设计定稿后只有设计部能修改款式和颜色
         */
        $orderStatus = D('SimpleStatus')->find($id);

        if ($orderStatus['is_complete'] == 1) {
            $this->error('订单已完结，不能修改');
        }

        if ($orderStatus['is_delivery'] == 1) {
            $this->error('订单已发货，不能修改');
        }

        $order['order_time'] = date('Y-m-d', $order['order_time']);
        $this->assign('order', $order);

        $this->setUserList();

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $this->check_access();

        $this->display();
    }

    public function _update()
    {

        if (isset($_POST['order_time'])) {
            $_POST['order_time'] = strtotime($_POST['order_time']);
        }

        $model = D('Simple');
        if (false === $model->create()) {
            $this->ajaxReturn(NULL, "编辑失败" . $model->getError(), 0);
        }

        $model->startTrans();
        $result1 = $model->save();

        if (false === $result1) {
            $model->rollback();
            $this->ajaxReturn(NULL, "编辑失败:" . $model->getError() . ',' . $model->getError(), 0);
        }

        $orderId = $_POST['id'];
        D('SimpleStatus')->where(['order_id' => $orderId])->save(['is_reject' => 0]);

        $model->commit();
        $this->ajaxReturn(NULL, "编辑成功", 1);
    }

    /**
     * 删除订单
     */
    public function delete()
    {
        $id = $_REQUEST['order_id'];
        if (empty($id)) {
            $this->error('订单不存在');
        }
        $order = D('Simple')->find($id);
        if (empty($order)) {
            $this->error('订单不存在');
        }

        $accessList = D('Node')->checkAccess('simple/delete');
        if (empty($accessList)) {
            $this->error('无权限删除');
        }

        // -- TRUNCATE TABLE oa_order_files;
        $files = M('SimpleFiles')->where(['order_id' => $id])->select();
        if (!empty($files)) {
            $fileSidArr = [];
            foreach ($files as $file) {
                $fileSidArr = array_merge(
                    $fileSidArr,
                    explode(';', trim($file['url'], ';'))
                );
            }
            $this->_destory_file($fileSidArr);
        }

        $model = D('Simple');
        M('SimpleFlow')->where(['order_id' => $id])->delete();
        M('SimpleShip')->where(['order_id' => $id])->delete();
        M('SimpleStatus')->where(['order_id' => $id])->delete();
        if ($model->where(['id' => $id])->delete()) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败，稍后再试');
        }
    }

    protected function setUserList()
    {
        $userList = D('User')->where(
            [
                '_complex' => [
                    'emp_no' => ['like', 'KF%'],
                    'id' => $this->userId,
                    '_logic' => 'or',
                ],
            ]
        )->field('id,name')->select();
        $this->assign('userList', $userList);
    }
}
