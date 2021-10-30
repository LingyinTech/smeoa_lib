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
class OrderStatusAction extends CommonAction
{
    protected $config = array('app_type' => 'public');

    const SHIRT_TYPE = [
        'local' => '仓库下单',
        'entrust' => '外调外做',
        'transfer' => '缺货调货',
    ];

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

        $order = M('OrderInfo')->find($orderId);
        if (empty($order)) {
            $this->error('非法操作');
        }

        if (!empty($check_status)) {
            if (empty($order['shop_id'])) {
                $this->error('请选择店铺');
            }

			if (empty($order['cust_name']) || ($order['order_type'] <> 5 && $order['pay_type'] === '天猫' && empty($order['order_sn']))) {
				$this->error('请填写客户淘宝ID和订单编号');
			}

			if (in_array($order['order_type'], [1, 2, 4]) && empty(floatval($order['total_price']))) {
				$this->error('请填写订单金额');
			}

            if (empty($order['note'])) {
                $this->error('请填写产品及发货信息备注');
            }

            $useProduct = C('USE_PRODUCT') ?: false;
            if($useProduct) {
                $count = D('OrderProduct')->where(['order_id' => $orderId])->count();
                if ($count < 1) {
                    $this->error('订单未选择任何产品');
                }
            }

            if (!in_array($order['order_type'],[3,6])) {
                $model = D('OrderFiles');
                $design = $model->where(
                    [
                        'type' => 'design',
                        'order_id' => $orderId
                    ]
                )->find();
                $preview = $model->where(
                    [
                        'type' => 'preview',
                        'order_id' => $orderId
                    ]
                )->find();
                if (empty($design['url']) || empty($preview['url'])) {
                    $this->error('请先上传文件');
                }
            }

            $model = D('OrderInfo');
            $model->startTrans();
            $result = $model->where(['id' => $orderId, 'order_status' => 0])
                ->save(
                    [
                        'order_status' => 1,
                    ]
                );

            $result2 = D('OrderStatus')->where(['order_id' => $orderId])->save(
                [
                    'is_final' => 1,
                    'final_time' => time(),
                ]
            );

            $result1 = D('OrderFlow')->addFlowData(
                [
                    'order_id' => $orderId,
                    'user_id' => $this->userId,
                    'note' => "审批通过【{$note}】",
                ]
            );

            if (false !== $result && false !== $result1 && false !== $result2) {
                $model->commit();
                $this->success('提交完成');
            } else {
                $model->rollback();
                $this->error('操作失败' . $model->getDbError());
            }
        } else {
            D('OrderFlow')->addFlowData(
                [
                    'order_id' => $orderId,
                    'user_id' => $this->userId,
                    'note' => "审批不通过【{$note}】",
                ]
            );

            D('OrderStatus')->where(['order_id' => $orderId])->save(['is_reject' => 1]);

            $msgNote = "订单【{$order['produce_no']}】审核不通过：{$note}";
            $userList = [
                ['id' => $order['user_id'], 'name' => $order['sales']]
            ];
            $sender['id'] = $this->userId;
            $sender['name'] = $this->userName;
            D('Message')->batchMessage($sender, $userList, $msgNote);
            $this->success('提交完成');
        }

    }

    protected function check_before_craft($orderInfo) {
        if ($orderInfo['shirt_price'] <= 0 || ($orderInfo['order_type'] <> 5 && $orderInfo['gross_profit'] <= 0)) {
            $this->error('底衫价格或者产品毛利为空，请确认数据准确');
        }

        if (3 != $orderInfo['order_type']) {
            if (empty($orderInfo['craft_type'])) {
                $this->error('请选择工艺');
            }

            $orderPrintModel = D('OrderPrint');
            $printArr = $orderPrintModel->where(['order_id' => $orderInfo['id']])->field('partner_id')->select();
            $printArr = array_column($printArr, 'partner_id');

            $partnerArr = D('Partner')->where(['id' => ['in',$printArr]])->field(['id','code'])->select();
            $partnerArr = array_column($partnerArr,'id','code');

            foreach ($partnerArr as $id => $code) {
                if (empty($orderInfo[$code])) {
                    continue;
                }

                if (!in_array($id,$printArr)) {
                    $this->error('工艺数据错误，请重新更新订单');
                }
            }
        }
    }

    public function stock_up()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('OrderInfo');

        $orderInfo = $model->find($orderId);
        if (empty($orderInfo)) {
            $this->error('订单不存在或已被删除');
        }

        $this->check_before_craft($orderInfo);

        $orderStatus = 10;
        if ('transfer' == $orderInfo['shirt_type']) {
            $orderStatus = 2;
        }

        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 1])->save([
            'order_status' => $orderStatus,
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

        $shirtType = self::SHIRT_TYPE[$orderInfo['shirt_type']];
        $result2 = D('OrderFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => "订单已完排，底衫类型【{$shirtType}】",
        ]);

        if (!$result2) {
            $model->rollback();
            $this->error('操作失败' . D('OrderFlow')->getDbError());
        }

        $model->commit();
        $this->success('提交完成');
    }

    public function ready_stock()
    {
        $orderId = $_REQUEST['order_id'];
        $shirtType =$_REQUEST['shirt_type'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('OrderInfo');

        $orderInfo = $model->find($orderId);
        if (empty($orderInfo)) {
            $this->error('订单不存在或已被删除');
        }

        if (IS_POST) {
            $this->check_before_craft($orderInfo);

            $model->startTrans();
            $result = $model->where(['id' => $orderId, 'order_status' => 2])
                ->save(
                    [
                        'order_status' => 10,
                        'shirt_type' => $shirtType,
                    ]
                );

            $result2 = D('OrderStatus')->where(['order_id' => $orderId])->save(
                [
                    'stock_time' => time(),
                    'is_transfer' => 1
                ]
            );

            $shirtType = self::SHIRT_TYPE[$orderInfo['shirt_type']];
            $result1 = D('OrderFlow')->addFlowData(
                [
                    'order_id' => $orderId,
                    'user_id' => $this->userId,
                    'note' => "标记为调货完成,底衫类型【{$shirtType}】,【等待生产】",
                ]
            );

            if (false !== $result && false !== $result1 && false !== $result2) {
                $model->commit();
                $this->success('提交完成');
            } else {
                $model->rollback();
                $this->error('操作失败'.$model->getDbError());
            }
        } else {

        }
    }

    public function confirm_ship()
    {
        $orderId = $_REQUEST['order_id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('OrderInfo');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => ['in',[20,21]]])->save([
            'order_status' => 26,
        ]);

        $result1 = D('OrderFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '确认【全部已发货】',
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

        $model = D('OrderInfo');
        $model->startTrans();
        $result = $model->where(['id' => $orderId, 'order_status' => 21])->save([
            'order_status' => 100,
        ]);
        if (!$result) {
            $model->rollback();
            $this->error('操作失败' . $model->getDbError());
        }

        $result = D('OrderFlow')->addFlowData([
            'order_id' => $orderId,
            'user_id' => $this->userId,
            'note' => '标记为【订单已收货，交易成功】',
        ]);
        if (!$result) {
            $model->rollback();
            $this->error('操作失败' . D('OrderFlow')->getDbError());
        }

        $result = D('OrderStatus')->where(['order_id' => $orderId])->save([
            'is_complete' => 1
        ]);
        if ($result === false) {
            $model->rollback();
            $this->error('操作失败' . D('OrderFlow')->getDbError());
        }

        $model->commit();
        return $this->success('提交完成');
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

            $result1 = D('OrderFlow')->addFlowData([
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

            $result1 = D('OrderFlow')->addFlowData([
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

    public function check_diff() {

        $orderId = $_REQUEST['order_id'];

        $url = ['order/index/diff_price/1/operate/1','order/index?diff_price=1&operate=1'];
        $checkDiff = D('Node')->checkAccess($url);
        if (empty($orderId) || empty($checkDiff)) {
            $this->error("非法操作");
            return;
        }

        $model = M('OrderStatus');
        $result = $model->where(array('order_id' => $orderId))->save(
            [
                'is_check_diff' => 1
            ]
        );

        $result1 = D('OrderFlow')->addFlowData(
            [
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => "确认【已返差价】",
            ]
        );

        if (false === $result || false == $result1) {
            $this->error("操作失败:".$model->getDbError());
        } else {
            $this->success("标记成功");
        }
    }

    public function check_rest() {
        $orderId = $_REQUEST['order_id'];

        $url = ['order/index/rest_price/1/operate/1','order/index?rest_price=1&operate=1'];
        $checkRest = D('Node')->checkAccess($url);
        if (empty($orderId) || empty($checkRest)) {
            $this->error("非法操作");
            return;
        }

        $model = M('OrderStatus');
        $result = $model->where(array('order_id' => $orderId))->save(
            [
                'is_check_rest' => 1
            ]
        );

        $result1 = D('OrderFlow')->addFlowData(
            [
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => "确认【已收尾款】",
            ]
        );

        if (false === $result || false == $result1) {
            $this->error("操作失败:".$model->getDbError());
        } else {
            $this->success("标记成功");
        }
    }
}
