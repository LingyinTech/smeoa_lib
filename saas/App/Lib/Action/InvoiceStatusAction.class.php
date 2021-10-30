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
class InvoiceStatusAction extends CommonAction
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

        $order = M('Invoice')->find($orderId);

        if (empty($order['order_sn'])) {
            $this->error('未填写订单编号');
        }

        if (empty($order['invoice'])) {
            $this->error('未选择发票类型');
        }

        if(empty($order['invoice_name']) || empty($order['invoice_desc'])) {
            $this->error('请填写发票信息！');
        }

        if(empty($order['ship_address'])) {
            $this->error('请先完善收件人信息');
        }

        $model = D('Invoice');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 0])->save([
            'order_status' => 1,
        ]);

        $result1 = D('InvoiceFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '确认发票',
        ]);

        if (false !== $result && false !== $result1) {
            $model->commit();
            $this->success('提交完成');
        } else {
            $model->rollback();
            $this->error('操作失败' . $model->getDbError());
        }
    }

    public function stock_up()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('Invoice');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 1])->save([
            'order_status' => 2,
        ]);
        if (!$result) {
            $model->rollback();
            $this->error('操作失败' . $model->getDbError());
        }

        $result2 = D('InvoiceFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '安排开票',
        ]);

        if (!$result2) {
            $model->rollback();
            $this->error('操作失败' . D('SimpleFlow')->getDbError());
        }

        $model->commit();
        $this->success('提交完成');
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

        $result = D('OrderStatus')->where(['order_id' => $orderId])->save([
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
