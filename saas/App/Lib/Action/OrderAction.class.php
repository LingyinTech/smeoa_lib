<?php

/**
 * OrderAction
 *
 * 订单操作类
 *
 * @access  public
 * @author  actors315@gmail.com
 * @version 20141116 V1.2
 * @since   20141114 xie.hj@thinkalways.net 创建版本
 *
 */
class OrderAction extends CommonAction
{
    const ORDER_STATUS = ORDER_STATUS_LIST;

    const SHIRT_TYPE = [
        'local' => '仓库下单',
        'entrust' => '外调外做',
        'transfer' => '缺货调货',
    ];
    
    const ORDER_TYPE_LIST = ORDER_TYPE_LIST;

    const NOTE_STATUS_LIST = [
        'is_urgent' => '加急',
        'is_24ship' => '当日发货',
        'is_after_sale' => '售后',
        'is_cancel' => '退单',
    ];

    protected $config = [
        'app_type' => 'url',
        'action_auth' => [
            'order_info' => 'read',
            'firm' => 'read',
            'refund' => 'write',
            'export_all' => 'read',
            'delete' => 'write',
        ],
        'url' => ['index', 'firm', 'export_all']
    ];

    function _initialize()
    {
        parent::_initialize();

        $this->assign('orderStatusList', self::ORDER_STATUS);
        $script['order'] = true;
        $this->assign('script', $script);

        $this->assign('filter', $_REQUEST);

        $this->assign('shirtTypeList', self::SHIRT_TYPE);
        $this->assign('craftTypeList', self::CRAFT_TYPE_LIST);
        $this->assign('orderTypeList', self::ORDER_TYPE_LIST);
        $this->assign('customerTypeList', CUSTOMER_TYPE_LIST);
        $this->assign('payTypeList', PAY_TYPE_LIST);
        $this->assign('useProduct', C('USE_PRODUCT'));
    }

    function _search_filter(&$map)
    {
        if (!empty($_POST['keyword'])) {
            $map['cust_name|produce_no|order_sn|sales|content|impression|s.name'] = [
                'like',
                "%".trim($_POST['keyword'])."%"
            ];
        }
    }

    public function index()
    {
        saveLastViewUrl();

        $widget['layer'] = true;
        $widget['date'] = true;
        $this->assign('widget', $widget);

        $map = $this->_search('OrderInfo');
        if (!empty($map)) {
            foreach ($map as $key => $value) {
                unset($map[$key]);
                $map[C('DB_PREFIX')."order_info.{$key}"] = $value;
            }
        }
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }

        $sort = '';
        if (isset($_GET['order_status'])) {
            $orderStatus = intval($_GET['order_status']);
            if (26 === $orderStatus) {
                $map[C('DB_PREFIX').'order_info.order_status'] = ['in', [26,100]];
            } else {
                $map[C('DB_PREFIX').'order_info.order_status'] = $orderStatus;
            }
            $this->assign('orderStatus', $orderStatus);

            if (1 == $orderStatus) {
                $sort = 'os.final_time';
            }
        }

        if (isset($_GET['delivery'])) {
            $isDelivery = intval($_GET['delivery']);
            $map['os.is_delivery'] = $isDelivery;
            unset($map[C('DB_PREFIX').'order_info.order_status']);
            $map[C('DB_PREFIX').'order_info.order_status'][] = ['egt', '1'];
            $map[C('DB_PREFIX').'order_info.order_status'][] = ['neq', '11'];
            $this->assign('orderStatus', 'delivery');
        }

        if (isset($_GET['after_sale'])) {
            $isAfterSale = intval($_GET['after_sale']);
            $map['os.is_after_sale'] = $isAfterSale;
        }

        if (isset($_GET['reject'])) {
            $isReject = intval($_GET['reject']);
            $map['os.is_reject'] = $isReject;
        }

		$shirtType = self::SHIRT_TYPE;
		if (isset($_GET['shirt_type']) && isset($shirtType[$_GET['shirt_type']])) {
			$map[C('DB_PREFIX') . 'order_info.shirt_type'] = $_GET['shirt_type'];
            $map[C('DB_PREFIX') . 'order_info.order_type'] =  ['neq', 3];
		}

        $orderType = self::ORDER_TYPE_LIST;
        if (isset($_GET['order_type']) && isset($orderType[$_GET['order_type']])) {
            $map[C('DB_PREFIX') . 'order_info.order_type'] = $_GET['order_type'];
        }

        if (isset($_GET['diff_price'])) {
            $this->assign('diffPrice',1);
            $map[C('DB_PREFIX').'order_info.diff_price'] = ['gt', 0];
            $map['os.is_check_diff'] = 0;
        }

        if (isset($_GET['rest_price'])) {
            $this->assign('restPrice',1);
            $map[C('DB_PREFIX').'order_info.rest_price'] = ['gt', 0];
            $map['os.is_check_rest'] = 0;
        }

        $noteStatus = self::NOTE_STATUS_LIST;

        if (isset($_REQUEST['note_status']) && isset($noteStatus[$_REQUEST['note_status']])) {
            $map["os.{$_REQUEST['note_status']}"] = 1;
        }

        $operate = 0;
        if (isset($_GET['operate'])) {
            $operate = 1;
        }

        $this->assign('name', '所有订单');
        $my = 0;
        if (!empty($_GET['my'])) {
            $this->assign('name', '我的订单');
            $map[C('DB_PREFIX').'order_info.user_id'] = session(
                C('USER_AUTH_KEY')
            );
            $operate = 1;
            $my = 1;
        }
        $this->assign('operate', $operate);
        $this->assign('my', $my);
        $statusField = ',os.is_urgent,os.is_24ship,os.is_after_sale,os.is_cancel,os.final_time,os.delivery_time';

        $model = M('OrderInfo');
        if (!empty($model)) {
            $join = 'INNER JOIN '.C('DB_PREFIX').'user u on '.C('DB_PREFIX').'order_info.user_id = u.id';
            $join .= ' LEFT JOIN '.C('DB_PREFIX').'order_status AS os ON '.C('DB_PREFIX').'order_info.id = os.order_id';
            $join .= ' LEFT JOIN '.C('DB_PREFIX').'shop AS s ON '.C('DB_PREFIX').'order_info.shop_id = s.id';
            $this->_list(
                $model,
                $map,
                $sort,
                false,
                C('DB_PREFIX')."order_info.*,u.name{$statusField}",
                $join
            );
        }

        $shopList = D('Shop')->getCache();
        $this->assign('shopList', $shopList);

        $this->assign('orderStatusList', self::ORDER_STATUS);

        $this->assign('noteStatus', $noteStatus);

        $this->assign('customerTypeList', CUSTOMER_TYPE_LIST);

        $checkDelete = D('Node')->checkAccess('order/delete');
        $this->assign('checkDelete', empty($checkDelete) ? 0 : 1);

        $checkCancel = D('Node')->checkAccess('order/cancel');
        $this->assign('checkCancel', empty($checkCancel) ? 0 : 1);

        $this->assign('showDiffPrice',1);

        $this->display();
    }

    public function firm()
    {
        saveLastViewUrl();

        $widget['layer'] = true;
        $widget['date'] = true;
        $this->assign('widget', $widget);

        $map = $this->_search('OrderInfo');
        if (!empty($map)) {
            foreach ($map as $key => $value) {
                unset($map[$key]);
                $map[C('DB_PREFIX')."order_info.{$key}"] = $value;
            }
        }
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }

        if (isset($_GET['type'])) {
            $map['op.type'] = ['in', explode('|', $_GET['type'])];
            $this->assign('type', $_GET['type']);
        }

        if (isset($_GET['craft'])) {
            $craftArr = D('Partner')->where(['code' => ['in', explode('|', $_GET['craft'])]])->select();
            if (!empty($craftArr)) {
                $partnerIdArr = array_column($craftArr,'id');
            }
        }

        if (empty($partnerIdArr)) {
            $partnerList = D('Role')->get_duty_list($this->userId);
            $partnerIdArr = array_column($partnerList, 'partner_id');
        }

        if (empty($partnerIdArr)) {
            $this->error('没有权限');
        }

        $map['op.partner_id'] = ['in', $partnerIdArr];
        if (isset($_GET['status'])) {
            $map['op.status'] = $_GET['status'];
            $this->assign('status', $_GET['status']);
        }

        if (empty($map['op.status']) || $map['op.status'] <> 10) {
            $map[C('DB_PREFIX').'order_info.order_status'] = ['in', [10, 16]];
        }

        $this->assign('name', '所有订单');

        $statusField = ',os.is_urgent,os.is_24ship,os.is_after_sale,os.is_cancel,os.stock_time';

        $model = M('OrderInfo');
        if (!empty($model)) {
            $join = ' INNER JOIN '.C('DB_PREFIX').'order_print AS op ON '.C(
                    'DB_PREFIX'
                ).'order_info.id = op.order_id';
            $join .= ' LEFT JOIN '.C('DB_PREFIX').'shop AS s ON '.C('DB_PREFIX')
                .'order_info.shop_id = s.id';
            $join .= ' LEFT JOIN '.C('DB_PREFIX').'order_status AS os ON '.C(
                    'DB_PREFIX'
                ).'order_info.id = os.order_id';
            $this->_list(
                $model,
                $map,
                '',
                false,
                C('DB_PREFIX')
                ."order_info.*,op.type,op.id as rec_id,op.type as rec_type,op.partner_id{$statusField}",
                $join
            );
        }

        $shopList = D('Shop')->getCache();
        $this->assign('shopList', $shopList);

        $partnerList = D('Partner')->getAllParamGroupByType();
        $this->assign('shirtList', $partnerList['shirt']);
        $this->assign('designList', $partnerList['design']);
        $this->assign('produceList', $partnerList['produce']);

        $this->display();
    }

    public function export_all()
    {
        $map = $this->_search('OrderInfo');
        if (!empty($map)) {
            foreach ($map as $key => $value) {
                unset($map[$key]);
                $map["o.{$key}"] = $value;
            }
        }
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }

        if (isset($_GET['order_status'])) {
            $orderStatus = intval($_GET['order_status']);
            if (26 === $orderStatus) {
                $map['o.order_status'] = ['in', [26,100]];
            } else {
                $map['o.order_status'] = $orderStatus;
            }
        }

        if (isset($_GET['delivery'])) {
            $isDelivery = intval($_GET['delivery']);
            $map['os.is_delivery'] = $isDelivery;
            unset($map['o.order_status']);
            $map['o.order_status'][] = ['egt', '1'];
            $map['o.order_status'][] = ['neq', '11'];
        }

        if (isset($_GET['after_sale'])) {
            $isAfterSale = intval($_GET['after_sale']);
            $map['os.is_after_sale'] = $isAfterSale;
        }

        if (isset($_GET['reject'])) {
            $isReject = intval($_GET['reject']);
            $map['os.is_reject'] = $isReject;
        }

        $shirtType = self::SHIRT_TYPE;
        if (isset($_GET['shirt_type']) && isset($shirtType[$_GET['shirt_type']])) {
            $map['o.shirt_type'] = $_GET['shirt_type'];
        }

        if (isset($_GET['diff_price'])) {
            $this->assign('diffPrice',1);
            $map['o.diff_price'] = ['gt', 0];
            $map['os.is_check_diff'] = 0;
        }

        if (isset($_GET['rest_price'])) {
            $this->assign('restPrice',1);
            $map['o.rest_price'] = ['gt', 0];
            $map['os.is_check_rest'] = 0;
        }

        $noteStatus = [
            'is_urgent' => '加急',
            'is_24ship' => '当日发货',
            'is_after_sale' => '售后',
            'is_cancel' => '退单',
        ];

        if (isset($_REQUEST['note_status']) && isset($noteStatus[$_REQUEST['note_status']])) {
            $map["os.{$_REQUEST['note_status']}"] = 1;
        }

        if (!empty($_GET['my'])) {
            $map['o.user_id'] = session(C('USER_AUTH_KEY'));
        }

        $model = D('OrderInfo');

        $join = 'INNER JOIN '.C('DB_PREFIX').'user u on o.user_id = u.id';
        $join .= ' LEFT JOIN '.C('DB_PREFIX')
            .'order_status AS os ON o.id = os.order_id';
        $join .= ' LEFT JOIN '.C('DB_PREFIX').'shop AS s ON o.shop_id = s.id';

        $list = $model->table(C('DB_PREFIX').'order_info o')->field(
            'o.*,u.name,s.name as shop_name,os.delivery_time,os.final_time'
        )->join($join)->where($map)->select();

        Vendor('Excel.PHPExcel');

        $inputFileName = "Public/templete/order_export_template.xls";
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        $objPHPExcel->getProperties()->setCreator("oms")->setLastModifiedBy(
            "oms"
        );

        $i = 1;
        $cnt = 0;

        $orderStatusMap = self::ORDER_STATUS;
        $craftTypeMap = self::CRAFT_TYPE_LIST;
        $orderTypeMap = self::ORDER_TYPE_LIST;
        foreach ($list as $val) {
            $cnt++;
            if (100000 == $cnt) {//刷新一下输出buffer，防止由于数据过多造成问题
                ob_flush();
                flush();
                $cnt = 0;
            }

            $i++;

            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", "'".$val["produce_no"])
                ->setCellValue("B$i", date('Y-m-d', $val["order_time"]))
                ->setCellValue("C$i", $val["name"])
                ->setCellValue("D$i", $val['shop_name'])
                ->setCellValue("E$i", $val['cust_name'])
                ->setCellValue("F$i", "'".$val['order_sn'])
                ->setCellValue("G$i", $val['total_price'])
                ->setCellValue("H$i", $val['product_note'])
                ->setCellValue("I$i", $craftTypeMap[$val['craft_type']] ?? '')
                ->setCellValue("J$i", $val['shirt_price'])
                ->setCellValue("K$i", $val["ship_note"])
                ->setCellValue("L$i", isset($orderStatusMap[$val["order_status"]]) ? $orderStatusMap[$val["order_status"]] : $val['order_status'])
                ->setCellValue("M$i", $val["delivery_time"] > 0 ? date('Y-m-d',$val["delivery_time"]) : '')
                ->setCellValue("N$i", $val["delivery_time"] > 0 ? calculateDeliveryDay($val["delivery_time"],$val['final_time']) . '天' : '')
                ->setCellValue("O$i", $val['customer_type'])
                ->setCellValue("P$i", $orderTypeMap[$val['order_type']] ?? $val['order_type'])
                ->setCellValue("Q$i", $val['diff_price'])
            ;
        }

        $objPHPExcel->getActiveSheet()->setTitle('所有订单');

        $file_name = date('Y-m-d').".xls";
        header("Content-Type: application/force-download");
        header(
            'Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        header(
            "Content-Disposition:attachment;filename =".str_ireplace(
                '+',
                '%20',
                urlencode($file_name)
            )
        );
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    /**
     * 添加订单
     */
    public function add()
    {
        saveLastViewUrl();

        $this->assign("uploadUrl", U('design/upload'));
        $this->assign("delUrl", U('design/del_file'));

        $widget['layer'] = true;
        $widget['date'] = true;
        $widget['uploader'] = true;
        $this->assign("widget", $widget);

        $this->assign('userId', session(C('USER_AUTH_KEY')));
        $this->assign('userName', session('user_name'));
        
        $this->setUserList();

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $orderParam = D('OrderParam')->getAllParamGroupByType(['style']);
        $this->assign('styleList', $orderParam['style']);

        $this->assign('checkPlanOrder', 0);

        $this->display();
    }

    /**
     * 订单详情
     *
     * 根据订单编辑查看订单详情，页面包含所有订单和订单的状态
     */
    public function order_info()
    {
        $widget['layer'] = true;
        $this->assign("widget", $widget);

        $id = $_REQUEST['id'];
        $order = D('OrderInfo')->orderInfo($id);
        $order['order_time'] = date('Y-m-d', $order['order_time']);
        $this->assign('order', $order);

        $flowList = M('OrderFlow')->alias('of')
            ->join(
                ' LEFT JOIN '.C('DB_PREFIX').'user AS u ON of.user_id = u.id'
            )
            ->where("of.order_id = '{$id}'")
            ->order('of.create_time asc')
            ->field('of.*,u.name as user_name')
            ->select();
        $this->assign('flowList', $flowList);

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $preview = M('OrderFiles')->where(
            ['order_id' => $id, 'type' => 'preview']
        )->find();
        if (!empty($preview['url'])) {
            $this->assign('prevSid', $preview['url']);
            $files = array_filter(explode(';', $preview['url']));
            $where['sid'] = array('in', $files);
            $prev_list = M('File')->where($where)->select();
            $this->assign('prev_list', $prev_list);
        }

        $this->check_access();

        $orderParam = D('OrderParam')->getAllParamGroupByType(['style']);
        $this->assign('styleList', $orderParam['style']);

        $this->display();
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
        $order = D('OrderInfo')->orderInfo($id);
        if (empty($order)) {
            $this->error('订单不存在');
        }

        $accessList = D('Node')->checkAccess('order/delete');
        if (empty($accessList)) {
            $this->error('无权限删除');
        }

        // -- TRUNCATE TABLE oa_order_files;
        $files = M('OrderFiles')->where(['order_id' => $id])->select();
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

        /**
         * -- TRUNCATE TABLE oa_order_info;
         * -- TRUNCATE TABLE oa_order_flow;
         * -- TRUNCATE TABLE oa_order_files;
         * -- TRUNCATE TABLE oa_order_print;
         * -- TRUNCATE TABLE oa_order_ship;
         * -- TRUNCATE TABLE oa_order_status;
         */
        $model = D('OrderInfo');
        M('OrderFlow')->where(['order_id' => $id])->delete();
        M('OrderPrint')->where(['order_id' => $id])->delete();
        M('OrderShip')->where(['order_id' => $id])->delete();
        M('OrderStatus')->where(['order_id' => $id])->delete();
        if ($model->where(['id' => $id])->delete()) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败，稍后再试');
        }
    }

    protected function setUserList() {
        $userList = D('User')->where([
                                         '_complex' => [
                                             'emp_no' => ['like', 'KF%'],
                                             'id' => $this->userId,
                                             '_logic' => 'or',
                                         ],
                                     ])->field('id,name')->select();
        $this->assign('userList', $userList);
    }

    protected function check_access()
    {
        // 排单客服
        $checkPlanOrder = D('Node')->checkAccess(['order/index/status/1/operate/1','order/index?status=1&operate=1']);
        $this->assign('checkPlanOrder', empty($checkPlanOrder) ? 0 : 1);

        // 工艺厂商不能看到价格
        $checkPrice = 0;
        foreach ($this->accessList as $item) {
            if (empty($checkPrice) && strpos($item['url'], 'order/index') !== false) {
                $checkPrice = 1;
            }
        }

        $this->assign('checkPricePermission', empty($checkPrice) ? 0 : 1);
    }

    protected function preSave() {
        if (isset($_POST['order_time'])) {
            $_POST['order_time'] = strtotime($_POST['order_time']);
        }

        $craftType = $_POST['craft_type'];

        decodingCraft($craftType);

        $productList = [];
        $styleList = $_POST['style'] ?? [];
        $colorList = $_POST['color'] ?? [];
        $styleNoteList = $_POST['style_note'] ?? [];
        foreach ($styleList as $key => $value) {
            if (empty($value)) {
                continue;
            }
            $product = [
                'style' => $value,
                'color' => $colorList[$key] ?? '',
                'style_note' => $styleNoteList[$key] ?? '',
                'mtotal' => 0,
                'ftotal' => 0,
            ];
            foreach (MALE_SIZE_LIST as $size) {
                $product[$size] = $_POST[$size][$key] ?? 0;
                $product['mtotal'] += $product[$size];
            }
            foreach (FEMALE_SIZE_LIST as $size) {
                $product[$size] = $_POST[$size][$key] ?? 0;
                $product['ftotal'] += $product[$size];
            }
            $product['total_count'] = $product['mtotal'] + $product['ftotal'];
            $productList[] = $product;
        }

        $_POST['productList'] = $productList;
    }

    protected function saveProduct($orderId, $model)
    {
        if (!isset($_POST['productList'])) {
            return;
        }

        $orderProductModel = D('OrderProduct');

        $list = $orderProductModel->where(
            ['order_id' => $orderId]
        )->field('id,style,color')->select();

        $oldProductMap = [];
        foreach ($list as $item){
            $oldProductMap["{$item['style']}_{$item['color']}"] = $item['id'];
        }

        foreach ($_POST['productList'] as $item) {
            $item['order_id'] = $orderId;
            if(isset($oldProductMap["{$item['style']}_{$item['color']}"])) {
                $item['id'] = $oldProductMap["{$item['style']}_{$item['color']}"];
                unset($oldProductMap["{$item['style']}_{$item['color']}"]);
                $orderProductModel->save($item);
            } else {
                if(!$orderProductModel->add($item)) {
                    $model->rollback();
                    $this->error('操作失败' . $orderProductModel->getDbError());
                }
            }
        }

        foreach ($oldProductMap as $key => $id) {
            $orderProductModel->delete($id);
        }
    }

    protected function _insert($name = 'OrderInfo')
    {
        $this->preSave();

        $model = D('OrderInfo');
        if (false === $model->create()) {
            $this->error($model->getError());
        }

		if (!empty($model->order_sn)) {
			$info = $model->where(['order_sn' => $model->order_sn])->find();
			if (!empty($info)) {
				$this->error("订单【{$info['order_sn']}】已存在");
			}
		}

        $model->startTrans();
        $orderId = $model->add();
        if ($orderId !== false) {//保存成功

            $this->saveCraft($orderId, $model);

            $this->saveProduct($orderId, $model);

            $fileSid = $_POST['file_sid'];
            $count = M('OrderFiles')->where(
                array('order_id' => $orderId, 'type' => 'design')
            )->count();
            if ($count > 0) {
                M('OrderFiles')->where(
                    array('order_id' => $orderId, 'type' => 'design')
                )->save(array('url' => $fileSid));
            } else {
                M('OrderFiles')->add(
                    [
                        'order_id' => $orderId,
                        'type' => 'design',
                        'url' => $fileSid,
                    ]
                );
            }

            $prevFiles = $_POST['prev_files'];
            $count = M('OrderFiles')->where(
                array('order_id' => $orderId, 'type' => 'preview')
            )->count();
            if ($count > 0) {
                M('OrderFiles')->where(
                    array('order_id' => $orderId, 'type' => 'preview')
                )->save(array('url' => $prevFiles));
            } else {
                M('OrderFiles')->add(
                    [
                        'order_id' => $orderId,
                        'type' => 'preview',
                        'url' => $prevFiles,
                    ]
                );
            }

            $result1 = D('OrderFlow')->addFlowData(
                [
                    'order_id' => $orderId,
                    'user_id' => $this->userId,
                    'note' => '提交订单',
                ]
            );

            if (false === $result1) {
                $model->rollback();
                $this->error('操作失败'.D('OrderFlow')->getDbError());
            }

            $result = D('OrderStatus')->add(
                array(
                    'order_id' => $orderId,
                )
            );

            if ($result !== false) {
                $model->commit();
                $this->assign('jumpUrl', get_return_url());
                $this->success('添加成功!');
            } else {
                $model->rollback();
                $this->error('新增失败!'.D('OrderStatus')->getDbError());
            }
        } else {
            //失败提示
            $model->rollback();
            $this->error('新增失败!'.$model->getDbError());
        }
    }

    protected function _edit($name = 'OrderInfo', $id = null)
    {
        $widget['date'] = true;
        $widget['layer'] = true;
        $this->assign("widget", $widget);

        $id = $_REQUEST['id'];
        $order = D('OrderInfo')->orderInfo($id);
        if (empty($id) || empty($order)) {
            $this->error(0, "读取失败", 0);
        }

        /**
         * 判断下当前流程和权限
         * 1.如果流程流转到生产部部不允修改
         */
        $orderStatus = D('OrderStatus')->find($id);

        if ($orderStatus['is_complete'] == 1) {
            $this->error('订单已完结，不能修改');
        }

        if ($order['order_status'] > 10
            && !D('Node')->checkAccess(
                'order/edit_after_produce'
            )) {
            $this->error('订单已生产完成，不能修改');
        }

        if ($order['order_status'] >= 1) {
            $accessList = D('Node')->access_list();

            $accessList = array_filter(
                $accessList,
                function ($v) {
                    return strpos($v['url'], 'order/index') !== false;
                }
            );

            $produceUrl = [
                'order/index/status/10/operate/1',
                'order/index/status/2/operate/1',
                'order/index/status/1/operate/1',
            ];
            $checkUrl = false;
            foreach ($accessList as $item) {
                if ('order/index' == $item['url']) {
                    $checkUrl = true;
                    break;
                }
                $url = ltrim(U($item['url']), '/');
                if (in_array($url, $produceUrl)) {
                    $checkUrl = true;
                    break;
                }
            }

            if (!$checkUrl) {
                $this->error('订单已排单生产，修改请联系订单流程人员');
            }
        }

        $order['order_time'] = date('Y-m-d', $order['order_time']);
        $this->assign('order', $order);

		$this->setUserList();

        $shopList = D('Shop')->field('id,name')->order('sort asc')->select();
        $this->assign('shopList', $shopList);

        $preview = M('OrderFiles')->where(
            ['order_id' => $id, 'type' => 'preview']
        )->find();
        if (!empty($preview['url'])) {
            $this->assign('prevSid', $preview['url']);
            $files = array_filter(explode(';', $preview['url']));
            $where['sid'] = array('in', $files);
            $prev_list = M('File')->where($where)->select();
            $this->assign('prev_list', $prev_list);
        }

        $this->check_access();

        $orderParam = D('OrderParam')->getAllParamGroupByType(['style']);
        $this->assign('styleList', $orderParam['style']);

        $this->display();
    }

    protected function _update($name = 'OrderInfo')
    {
        $this->preSave();

        $model = D('OrderInfo');
        if (false === $model->create()) {
            $this->ajaxReturn(null, "编辑失败".$model->getError(), 0);
        }

        $model->startTrans();
        if ($model->save()) {
            $orderId = $_POST['id'];

            $this->saveCraft($orderId, $model);

            $this->saveProduct($orderId, $model);

            D('OrderStatus')->where(['order_id' => $orderId])->save(['is_reject' => 0]);

            $model->commit();
            $this->ajaxReturn(null, "编辑成功", 1);
            //成功提示
        } else {
            $model->rollback();
            $this->ajaxReturn(null, "编辑失败:".$model->getError(), 0);
            //错误提示
        }
    }
}
