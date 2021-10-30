<?php

/**
 * ProduceAction
 *
 * 生产部操作类
 *
 * @access public
 * @author actors315@gmail.com
 * @version 20141116 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 *
 */
class ProduceAction extends CommonAction
{

	const ORDER_TYPE_LIST = [
		1 => '新订单',
		2 => '加定订单',
		4 => '加急订单',
		5 => '售后订单',
	];
	
    protected $config = array('app_type' => 'public');

    public function order_print()
    {
        if (IS_POST) {

            $orderId = $_POST['order_id'];
            $model = D('OrderInfo');
            $orderInfo = $model->find($orderId);
            if(empty($orderInfo)) {
                $this->error('非法操作');
            }

            $craftType = $_POST['craft_type'];

            $data = decodingCraft($craftType);

            $model->startTrans();
            if ($model->where(['id' => $orderId])->save($data)) {

                $this->saveCraft($orderId, $model);

                $model->commit();
                $this->ajaxReturn(null, "编辑成功", 1);
            } else {
                $model->rollback();
                $this->ajaxReturn(null, "编辑失败:".$model->getError(), 0);
            }

        } else {
            $id = $_REQUEST['id'];
            $order = D('OrderInfo')->orderInfo($id);
            if (empty($order)) {
                return $this->error('订单错误');
            }

            $craftType = [];
			$orderPrintModel = D('OrderPrint');
			$printArr = $orderPrintModel->where(['order_id' => $order['id']])->field('partner_id')->select();
			$printArr = array_column($printArr, 'partner_id');

			$partnerArr = D('Partner')->where(['id' => ['in',$printArr]])->field(['code','name'])->select();
			foreach ($partnerArr as $item) {
				if (!empty($order[$item['code']])) {
					$craftType[] = $item['name'];
				}
			}
			$order['craft_type'] = implode('+', $craftType);

            $this->assign('order',$order);

            $type = !empty($_REQUEST['type']) ? $_REQUEST['type'] : 'index';
            $this->assign('type',$type);

			$this->assign('orderTypeList',self::ORDER_TYPE_LIST);

            $this->assign("title", get_system_config("SYSTEM_NAME") . "- 订单 - " . $order['produce_no']." - " . $order['order_sn']);

            $preview = M('OrderFiles')->where(array('order_id' => $id, 'type' => 'preview'))->find();
            if (!empty($preview['url'])) {
                $this->assign('prevSid', $preview['url']);
                $files = array_filter(explode(';', $preview['url']));
                $where['sid'] = array('in', $files);
                $prev_list = M("File")->where($where)->select();
                $this->assign('prev_list', $prev_list);
            } else {
                $this->assign('prev_list', []);
            }
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
            $type = $_REQUEST['type'];
            $this->assign('type', $type);
            $partnerId = $_REQUEST['partner_id'];
            $this->assign('partner_id', $partnerId);
            $shipTypeList = M('ShipType')->field('name id,name')->select();
            $this->assign('shipTypeList', $shipTypeList);
            $shipInfo = M('OrderShip')->where(['order_id' => $id])->find();
            if (isset($shipInfo['ship_name'])) {
                $this->assign('shipInfo', $shipInfo);
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
        $shipPrice = $_POST['ship_price'];
        $note = $_POST['note'];
        if (empty($orderId)) {
            $this->ajaxReturn(null, "非法操作", 0);
        }
        $model = D('OrderShip');
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

        $result1 = D('OrderInfo')->where(
            ['id' => $orderId, 'order_status' => ['in',[21,26]]]
        )->save(
            [
                'ship_fee' => $shipPrice,
                'ship_note' => $shipName,
            ]
        );
        if (!$result1) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败：".D('OrderInfo')->getDbError(), 0);
        }

        $result1 = D('OrderFlow')->addFlowData([
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
        $shipPrice = $_POST['ship_price'];
        $partnerId = $_POST['partner_id'];
        $note = $_POST['note'];
        if (empty($orderId)) {
            $this->ajaxReturn(null, "非法操作", 0);
        }
        $model = D('OrderShip');
        if (false === $model->create()) {
            $this->ajaxReturn(null, "操作失败1：" . $model->getDbError(), 0);
        }
        $model->ship_time = time();
        $model->startTrans();

        if (!($result = $model->add())) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败2：" . $model->getDbError(), 0);
        }

        $note = "标记为【已发货】,快递名称【{$shipName}】,物流单号:{$shipCode},备注:{$note}";

        D('OrderFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => $note,
        ]);

        $result1 = D('OrderInfo')->where(
            ['id' => $orderId, 'order_status' => ['in',[10,16,20]]]
        )->save(
            [
                'order_status' => 26,
                'ship_fee' => $shipPrice,
                'ship_note' => $shipName,
            ]
        );
        if (!$result1) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败：".D('OrderInfo')->getDbError(), 0);
        }

        $result3 = D('OrderStatus')->where(
            [
                'order_id' => $orderId,
            ]
        )->save(
            [
                'is_delivery' => 1,
                'delivery_time' => time(),
            ]
        );

        if (!$result3) {
            $model->rollback();
            $this->ajaxReturn(null, "操作失败：".D('OrderStatus')->getDbError(), 0);
        }

        // 把所有工艺都标记为已完成
        D('OrderPrint')->where(
            [
                'order_id' => $orderId,
            ]
        )->save(
            [
                'status' => 10,
            ]
        );

        $model->commit();
        $this->ajaxReturn(null, "标记成功", 1);
    }

}
