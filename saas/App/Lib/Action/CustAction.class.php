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
class CustAction extends CommonAction
{
    const SHIRT_TYPE = [
        'local' => '仓库下单',
        'entrust' => '外调外做',
    ];

    protected $config = array('app_type' => 'public');

    public function confirm() {
        $id = $_REQUEST['id'];
        if (empty($id)) {
            $this->error('非法操作');
        }
        $this->assign('orderId', $id);

        $this->display();
    }

    public function ready_stock() {
        $orderId = $_REQUEST['id'];
        if (empty($orderId)) {
            $this->error('非法操作');
        }

        $model = D('OrderInfo');
        $orderInfo = $model->find($orderId);
        if (empty($orderInfo)) {
            $this->error('订单不存在或已被删除');
        }
        $shirtType = 'local';
        foreach (['gzht_embroidery','gzqw_embroidery','gzsf_silk'] as $code) {
            if (!empty($orderInfo[$code])) {
                $shirtType = 'entrust';
                break;
            }
        }

        $craftType = [];
        $orderPrintModel = D('OrderPrint');
        $printArr = $orderPrintModel->where(['order_id' => $orderInfo['id']])->field('partner_id')->select();
        $printArr = array_column($printArr, 'partner_id');

        $partnerArr = D('Partner')->where(['id' => ['in',$printArr]])->field(['code','name'])->select();
        foreach ($partnerArr as $item) {
            if (!empty($orderInfo[$item['code']])) {
                $craftType[] = $item['name'];
            }
        }

        $orderInfo['craft_type'] = implode('+', $craftType);

        $this->assign('shirtType',$shirtType);
        $this->assign('shirtTypeList', self::SHIRT_TYPE);
        $this->assign('order',$orderInfo);

        $this->display();
    }

    public function note()
    {
        $operator = $_REQUEST['operator'];

        if (IS_POST) {
            if (empty($operator)) {
                $this->ajaxReturn(NULL, "标记失败", 0);
            }
            $orderId = $_REQUEST['order_id'];
            $orderInfo = M('OrderInfo')->where(['id' => $orderId])->find();
            if (empty($orderId) || empty($orderInfo)) {
                $this->ajaxReturn(null, "非法操作", 0);
            }

            $note = $_POST['note'];

            $model = D('OrderInfo');
            $model->startTrans();

            if ('urgent' == $operator) {

                $result = D('OrderStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_urgent' => 1,
                    'note' => $note
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('OrderStatus')->getDbError(), 0);
                }
                $flowNote = "标记为加急，并留言:{$note}";
                $msgNote = "标记订单【{$orderInfo['produce_no']}】为加急，并留言给你：{$note}";
            } elseif ('24ship' == $operator) {

                $result = D('OrderStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_24ship' => 1,
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('OrderStatus')->getDbError(), 0);
                }
                $flowNote = "标记为当日发货，并留言:{$note}";
                $msgNote = "标记订单【{$orderInfo['produce_no']}】为当日发货，并留言给你：{$note}";
            } elseif ('refund' == $operator) {

                $result = $model->where(array('id' => $orderId))->save(array(
                    'order_status' => 11,
                ));
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . $model->getDbError(), 0);
                }

                $result = D('OrderStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_cancel' => 1,
                    'cancel_time' => time(),
                    'cancel_note' => $note,
                    'is_complete' => 1
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('OrderStatus')->getDbError(), 0);
                }
                $flowNote = "标记为退单，并留言:{$note}";
                $msgNote = "标记订单【{$orderInfo['produce_no']}】为退单，并留言给你：{$note}";
            } elseif ('after_sale' == $operator) {

                $result = D('OrderStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_after_sale' => 1,
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('OrderStatus')->getDbError(), 0);
                }
                $flowNote = "标记为订单售后，并留言:{$note}";
                $msgNote = "标记订单【{$orderInfo['produce_no']}】为订单售后，并留言给你：{$note}";
            } elseif ('redo' == $operator) {
                $result = $model->where([
                    'id' => $orderId,
                    'order_status' => ['in',[1,2]],
                ])->save(array(
                    'is_produce' => 0,
                    'order_status' => 0,
                ));
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . $model->getDbError(), 0);
                }

                $flowNote = "标记为退回重做，并留言:{$note}";
                $msgNote = "标记订单【{$orderInfo['produce_no']}】为退回重做，并留言给你：{$note}";
            } elseif ('other' == $operator) {
                $flowNote = "备注订单:{$note}";
                $msgNote = "备注订单【{$orderInfo['produce_no']}】，并留言给你：{$note}";
            }


            if (!empty($_POST['receiver_id'])) {
                $userList = M('User')->where(['id' => $_POST['receiver_id']])->field('id,name')->select();
                $sender['id'] = $this->userId;
                $sender['name'] = $this->userName;
                $result = D('Message')->batchMessage($sender, $userList, $msgNote);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('Message')->getDbError(), 0);
                }
            }

            $result = D('OrderFlow')->addFlowData([
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => $flowNote,
            ]);
            if ($result === false) {
                $model->rollback();
                $this->ajaxReturn(null, '操作失败' . D('OrderFlow')->getDbError(), 0);
            }
            $model->commit();
            $this->ajaxReturn(null, '标记成功', 1);
        } else {
            $id = $_REQUEST['id'];
            if (empty($operator)) {
                $this->error('非法操作');
            }
            $this->assign('orderId', $id);
            $this->assign('operator', $operator);

            $deptList = M('Dept')->where([
                'is_del' => 0,
            ])->field('id,name')->order('sort ASC')->select();
            $this->assign('deptList', $deptList);

            $this->display();
        }
    }

    public function simple()
    {
        $operator = $_REQUEST['operator'];
        if(IS_POST) {
            if (empty($operator)) {
                $this->ajaxReturn(NULL, "标记失败", 0);
            }
            $orderId = $_REQUEST['order_id'];
            $orderInfo = M('Simple')->where(['id' => $orderId])->find();
            if (empty($orderId) || empty($orderInfo)) {
                $this->ajaxReturn(null, "非法操作", 0);
            }

            $note = $_POST['note'];

            $model = D('Simple');
            $model->startTrans();

            if ('urgent' == $operator) {

                $result = D('SimpleStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_urgent' => 1,
                    'note' => $note
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('SimpleStatus')->getDbError(), 0);
                }
                $flowNote = "标记为加急，并留言:{$note}";
                $msgNote = "标记看样【{$orderInfo['produce_no']}】为加急，并留言给你：{$note}";
            }

            elseif ('24ship' == $operator) {

                $result = D('SimpleStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_24ship' => 1,
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('SimpleStatus')->getDbError(), 0);
                }
                $flowNote = "标记为当日发货，并留言:{$note}";
                $msgNote = "标记看样【{$orderInfo['produce_no']}】为当日发货，并留言给你：{$note}";
            }

            elseif ('refund' == $operator) {

                $result = $model->where(array('id' => $orderId))->save(array(
                    'order_status' => 11,
                ));
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . $model->getDbError(), 0);
                }

                $result = D('SimpleStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_cancel' => 1,
                    'cancel_time' => time(),
                    'cancel_note' => $note,
                    'is_complete' => 1
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('SimpleStatus')->getDbError(), 0);
                }
                $flowNote = "标记为退单，并留言:{$note}";
                $msgNote = "标记看样【{$orderInfo['produce_no']}】为退单，并留言给你：{$note}";
            }

            elseif ('after_sale' == $operator) {

                $result = D('SimpleStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_after_sale' => 1,
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('SimpleStatus')->getDbError(), 0);
                }
                $flowNote = "标记为订单售后，并留言:{$note}";
                $msgNote = "标记看样【{$orderInfo['produce_no']}】为订单售后，并留言给你：{$note}";
            }

            elseif ('redo' == $operator) {
                $result = $model->where([
                    'id' => $orderId,
                    'order_status' => 10,
                ])->save(array(
                    'order_status' => 0,
                ));
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . $model->getDbError(), 0);
                }

                $flowNote = "标记为退回重做，并留言:{$note}";
                $msgNote = "标记看样【{$orderInfo['produce_no']}】为退回重做，并留言给你：{$note}";
            }

            elseif ('produce' == $operator) {
                $result = D('SimpleStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_produce' => 1,
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('SimpleStatus')->getDbError(), 0);
                }
                $flowNote = "标记为已安排，并留言:{$note}";
                $msgNote = "标记看样【{$orderInfo['produce_no']}】为已安排，并留言给你：{$note}";
            }

            elseif ('other' == $operator) {
                $flowNote = "备注订单:{$note}";
                $msgNote = "备注订单【{$orderInfo['produce_no']}】，并留言给你：{$note}";
            }


            if (!empty($_POST['receiver_id'])) {
                $userList = M('User')->where(['id' => $_POST['receiver_id']])->field('id,name')->select();
                $sender['id'] = $this->userId;
                $sender['name'] = $this->userName;
                $result = D('Message')->batchMessage($sender, $userList, $msgNote);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('Message')->getDbError(), 0);
                }
            }

            $result = D('SimpleFlow')->addFlowData([
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => $flowNote,
            ]);
            if ($result === false) {
                $model->rollback();
                $this->ajaxReturn(null, '操作失败' . D('SimpleFlow')->getDbError(), 0);
            }
            $model->commit();
            $this->ajaxReturn(null, '标记成功', 1);

        } else {
            $id = $_REQUEST['id'];
            if (empty($operator)) {
                $this->error('非法操作');
            }
            $this->assign('orderId', $id);
            $this->assign('operator', $operator);

            $deptList = M('Dept')->where([
                'is_del' => 0,
            ])->field('id,name')->order('sort ASC')->select();
            $this->assign('deptList', $deptList);

            $this->display();
        }
    }

    public function invoice()
    {
        $operator = $_REQUEST['operator'];
        if(IS_POST) {
            if (empty($operator)) {
                $this->ajaxReturn(NULL, "标记失败", 0);
            }
            $orderId = $_REQUEST['order_id'];
            $orderInfo = M('Invoice')->where(['id' => $orderId])->find();
            if (empty($orderId) || empty($orderInfo)) {
                $this->ajaxReturn(null, "非法操作", 0);
            }

            $note = $_POST['note'];

            $model = D('Invoice');
            $model->startTrans();

            if ('urgent' == $operator) {

                $result = D('InvoiceStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_urgent' => 1,
                    'note' => $note
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('InvoiceStatus')->getDbError(), 0);
                }
                $flowNote = "标记为加急，并留言:{$note}";
                $msgNote = "标记发票【{$orderInfo['produce_no']}】为加急，并留言给你：{$note}";
            }

            elseif ('24ship' == $operator) {

                $result = D('InvoiceStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_24ship' => 1,
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('InvoiceStatus')->getDbError(), 0);
                }
                $flowNote = "标记为当日发货，并留言:{$note}";
                $msgNote = "标记发票【{$orderInfo['produce_no']}】为当日发货，并留言给你：{$note}";
            }

            elseif ('refund' == $operator) {

                $result = $model->where(array('id' => $orderId))->save(array(
                    'order_status' => 11,
                ));
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . $model->getDbError(), 0);
                }

                $result = D('InvoiceStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_cancel' => 1,
                    'cancel_time' => time(),
                    'cancel_note' => $note,
                    'is_complete' => 1
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('InvoiceStatus')->getDbError(), 0);
                }
                $flowNote = "标记为退单，并留言:{$note}";
                $msgNote = "标记发票【{$orderInfo['produce_no']}】为退单，并留言给你：{$note}";
            }

            elseif ('after_sale' == $operator) {

                $result = D('InvoiceStatus')->where([
                    'order_id' => $orderId,
                ])->save([
                    'is_after_sale' => 1,
                ]);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('InvoiceStatus')->getDbError(), 0);
                }
                $flowNote = "标记为订单售后，并留言:{$note}";
                $msgNote = "标记发票【{$orderInfo['produce_no']}】为订单售后，并留言给你：{$note}";
            }

            elseif ('redo' == $operator) {
                $result = $model->where([
                    'id' => $orderId,
                    'order_status' => 1,
                ])->save(array(
                    'order_status' => 0,
                ));
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . $model->getDbError(), 0);
                }

                $flowNote = "标记为退回重做，并留言:{$note}";
                $msgNote = "标记发票【{$orderInfo['produce_no']}】为退回重做，并留言给你：{$note}";
            }

            elseif ('other' == $operator) {
                $flowNote = "备注订单:{$note}";
                $msgNote = "备注订单【{$orderInfo['produce_no']}】，并留言给你：{$note}";
            }


            if (!empty($_POST['receiver_id'])) {
                $userList = M('User')->where(['id' => $_POST['receiver_id']])->field('id,name')->select();
                $sender['id'] = $this->userId;
                $sender['name'] = $this->userName;
                $result = D('Message')->batchMessage($sender, $userList, $msgNote);
                if ($result === false) {
                    $model->rollback();
                    $this->ajaxReturn(null, '操作失败' . D('Message')->getDbError(), 0);
                }
            }

            $result = D('InvoiceFlow')->addFlowData([
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => $flowNote,
            ]);
            if ($result === false) {
                $model->rollback();
                $this->ajaxReturn(null, '操作失败' . D('InvoiceFlow')->getDbError(), 0);
            }
            $model->commit();
            $this->ajaxReturn(null, '标记成功', 1);

        } else {
            $id = $_REQUEST['id'];
            if (empty($operator)) {
                $this->error('非法操作');
            }
            $this->assign('orderId', $id);
            $this->assign('operator', $operator);

            $deptList = M('Dept')->where([
                'is_del' => 0,
            ])->field('id,name')->order('sort ASC')->select();
            $this->assign('deptList', $deptList);

            $this->display();
        }
    }

    public function get_emp_by_dept()
    {
        $deptId = $_REQUEST['dept_id'];

        $userList = M('User')->where([
            'dept_id' => $deptId,
            'emp_no' => ['neq','admin']
        ])->field('id,name')->select();
        if (empty($userList)) {
            $this->ajaxReturn(NULL, "获取失败", 0);
        }
        $this->ajaxReturn([
            'status' => 1,
            'data' => $userList,
            'info' => '获取成功'
        ]);
    }

}
