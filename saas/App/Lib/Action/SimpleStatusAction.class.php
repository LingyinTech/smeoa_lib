<?php

/**
 * OrderStatusAction
 *
 * 订单状态
 * 订单状态说明
 *  0.初稿
 *  1.终稿,待计划
 *  2.等待备货
 *  10.等待发货
 *  20.已发货
 *  60.订单已收货
 */
class SimpleStatusAction extends CommonAction
{
    protected $config = array('app_type' => 'public');

    /**
     * 加急
     */
    public function urgent()
    {
        if (IS_POST) {
            $id = $_POST['orderid'];
            $reason = $_POST['reason'];
            $user_name = session('user_name');
            $ship_time = strtotime($_POST['ship_time']);
            $model = D('OrderMain');
            $model->startTrans();
            $result = $model->where(array('id' => $id))->save(array(
                'if_urgent' => 1,
                'ship_time' => $ship_time,
                'order_note' => array('_string', "concat(ifnull(`order_note`,''),'<br />{$this->now_Y_m_d_H_i_s},{$user_name}标记为加急。')")));
            $result1 = M('Order')->where(array('id' => $id))->save(array('note' => $reason, 'ship_time' => $ship_time));
            if (FALSE !== $result && FALSE !== $result1) {
                $model->commit();
                $this->ajaxReturn(NULL, "标记成功", 1);
            } else {
                $model->rollback();
                $this->ajaxReturn(NULL, "标记失败" . D('OrderMain')->getDbError(), 0);
            }
        } else {
            $id = $_REQUEST['id'];
            $this->assign('orderid', $id);
            $order = M('Order')->find($id);
            $this->assign('order', $order);
            $widget['date'] = true;
            $this->assign("widget", $widget);
            $this->display();
        }

    }

    /**
     * 终稿确认
     */
    public function confirm()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $check_status = $_REQUEST['check_status'];
        $note = $_REQUEST['note'];

        $order = M('Simple')->find($orderId);
        if (empty($order)) {
            $this->error('非法操作');
        }

        if (!empty($check_status)) {
            if (empty($order['shop_id'])) {
                $this->error('请选择店铺');
            }

            if (empty($order['cust_name']) || (($order['order_type'] <> 5 || $order['pay_type'] <> '天猫') && empty($order['order_sn']))) {
                $this->error('请填写客户淘宝ID和订单编号');
            }

            if (in_array($order['order_type'], [1, 2, 4]) && empty(floatval($order['total_price']))) {
                $this->error('请填写订单金额');
            }

            if (empty($order['note'])) {
                $this->error('请填写产品及发货信息备注');
            }

            $model = D('Simple');
            $model->startTrans();
            $result = $model->where(
                ['id' => $orderId, 'order_status' => 0]
            )->save(
                [
                    'order_status' => 10,
                ]
            );

            $result1 = D('SimpleFlow')->addFlowData(
                [
                    'order_id' => $orderId,
                    'user_id' => $this->userId,
                    'note' => "审批通过【{$note}】",
                ]
            );

            if (false !== $result && false !== $result1) {
                $model->commit();
                $this->success('提交完成');
            } else {
                $model->rollback();
                $this->error('操作失败'.$model->getDbError());
            }
        } else {
            D('SimpleFlow')->addFlowData(
                [
                    'order_id' => $orderId,
                    'user_id' => $this->userId,
                    'note' => "审批不通过【{$note}】",
                ]
            );

            D('SimpleStatus')->where(['order_id' => $orderId])->save(['is_reject' => 1]);

            $msgNote = "看样订单【{$order['produce_no']}】审核不通过：{$note}";
            $userList = [
                ['id' => $order['user_id'], 'name' => $order['sales']]
            ];
            $sender['id'] = $this->userId;
            $sender['name'] = $this->userName;
            D('Message')->batchMessage($sender, $userList, $msgNote);
            $this->success('提交完成');
        }
    }

    public function stock_up()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('Simple');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 1])->save([
            'order_status' => 2,
        ]);
        if (!$result) {
            $model->rollback();
            $this->error('操作失败' . $model->getDbError());
        }

        $result1 = D('OrderStatus')->where([
            'order_id' => $orderId,
        ])->save([
            'is_produce' => 1,
            'produce_time' => time(),
        ]);
        if (!$result1) {
            $model->rollback();
            $this->error('操作失败' . D('OrderStatus')->getDbError());
        }

        $result2 = D('SimpleFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '标记为【正在备货】',
        ]);

        if (!$result2) {
            $model->rollback();
            $this->error('操作失败' . D('SimpleFlow')->getDbError());
        }

        $model->commit();
        $this->success('提交完成');
    }

    public function ready_stock()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('Simple');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 2])->save([
            'order_status' => 10,
        ]);

        $result1 = D('SimpleFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '标记为正在生产,【等待发货】',
        ]);

        if (false !== $result && false !== $result1) {
            $model->commit();
            $this->success('提交完成');
        } else {
            $model->rollback();
            $this->error('操作失败' . $model->getDbError());
        }
    }

    public function confirm_ship()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('Simple');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 20])->save([
            'order_status' => 21,
        ]);

        $result1 = D('SimpleFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '标记为【已确认发货】',
        ]);

        if (false !== $result && false !== $result1) {
            $model->commit();
            $this->success('提交完成');
        } else {
            $model->rollback();
            $this->error('操作失败' . $model->getDbError());
        }
    }

    public function receive()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('Simple');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 21])->save([
            'order_status' => 100,
        ]);
        if (!$result) {
            $model->rollback();
            $this->error('操作失败' . $model->getDbError());
        }

        $result = D('SimpleFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '标记为【订单已收货，交易成功】',
        ]);
        if (!$result) {
            $model->rollback();
            $this->error('操作失败' . D('SimpleFlow')->getDbError());
        }

        $result = D('OrderStatus')->where(['order_id'=>$orderId])->save([
            'is_complete' => 1
        ]);
        if (!$result) {
            $model->rollback();
            $this->error('操作失败' . D('SimpleFlow')->getDbError());
        }

        $model->commit();
        $this->success('提交完成');
    }

    /**
     * 24小时发货
     */
    public function ship24()
    {
        if (IS_POST) {
            $orderId = $_POST['order_id'];
            $note = $_POST['note'];

            $model = M('OrderStatus');
            $result = $model->where(array('order_id' => $orderId))->save([
                'is_24ship' => 1
            ]);

            $result1 = D('SimpleFlow')->addFlowData([
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => "标记订单为24小时发货,原因:{$note}",
            ]);

            if (false === $result || false == $result1) {
                $this->ajaxReturn(NULL, "操作失败" . $model, 0);
            } else {
                $this->ajaxReturn(NULL, "标记成功", 1);
            }
        } else {
            $id = $_REQUEST['id'];
            $this->assign('orderId', $id);
            $this->display();
        }
    }

    /**
     * 是否售后
     */
    public function after_sale()
    {
        if (IS_POST) {
            $orderId = $_POST['order_id'];
            $note = $_POST['note'];

            $model = M('OrderStatus');
            $result = $model->where(array('order_id' => $orderId))->save([
                'is_after_sale' => 1
            ]);

            $result1 = D('SimpleFlow')->addFlowData([
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => "标记订单为售后,原因:{$note}",
            ]);

            if (false === $result || false == $result1) {
                $this->ajaxReturn(NULL, "操作失败" . $model, 0);
            } else {
                $this->ajaxReturn(NULL, "标记成功", 1);
            }
        } else {
            $id = $_REQUEST['id'];
            $this->assign('orderId', $id);
            $this->display();
        }
    }

}
