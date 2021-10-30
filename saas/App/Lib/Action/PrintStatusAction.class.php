<?php

/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2018/6/14
 * Time: 23:26
 */
class PrintStatusAction extends CommonAction
{

    protected $config = array('app_type' => 'public');

    /**
     * 安排生产
     */
    public function doing()
    {
        $recId = $_REQUEST['rec_id'];
        $orderId = $_REQUEST['order_id'];
        $type = $_REQUEST['type'];
        if (empty($recId) || empty($orderId)) {
            $this->error('非法操作');
        }

        $partnerList = D('Partner')->getAllParamGroupByType();
        $model = D('OrderPrint');
        $print = $model->find($recId);
        if (!empty($print['status'])) {
            $this->error('工艺状态异常，请确认后再操作');
        }

        if ($print['order_id'] != $orderId
            || $print['type'] != $_REQUEST['type']) {
            $this->error('非法操作');
        }

        $model->startTrans();
        $result = $model->where(
            [
                'id' => $recId,
                'order_id' => $orderId,
                'status' => 0
            ]
        )->save(
            [
                'status' => 1,
            ]
        );

        $result1 = D('OrderFlow')->addFlowData(
            [
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => "【{$partnerList[$type][$print['partner_id']]['name']}】【正在处理】",
            ]
        );

        if (false !== $result && false !== $result1) {
            $model->commit();
            $this->success('提交完成');
        } else {
            $model->rollback();
            $this->error('操作失败'.$model->getDbError());
        }
    }

    public function done()
    {
        $recId = $_REQUEST['rec_id'];
        $orderId = $_REQUEST['order_id'];
        $type = $_REQUEST['type'];
        if (empty($recId) || empty($orderId)) {
            $this->error('非法操作');
        }

        $partnerList = D('Partner')->getAllParamGroupByType();
        $model = D('O');
        $print = $model->find($recId);
        if (1 != $print['status']) {
            $this->error('工艺状态异常，请确认后再操作');
        }

        if ($print['order_id'] != $orderId
            || $print['type'] = $_REQUEST['type']) {
            $this->error('非法操作');
        }

        $model->startTrans();
        $result = $model->where(
            [
                'id' => $recId,
                'order_id' => $orderId,
                'status' => 1
            ]
        )->save(
            [
                'status' => 10,
            ]
        );

        $result1 = D('OrderFlow')->addFlowData(
            [
                'order_id' => $orderId,
                'user_id' => $this->userId,
                'note' => "【{$partnerList[$type][$print['partner_id']]['name']}】【处理完成】",
            ]
        );

        $orderStatus = 20;
        $allCraftStatus = $model->where(
            [
                'order_id' => $orderId
            ]
        )->field('partner_id,status')->select();
        foreach ($allCraftStatus as $item) {
            if ($item['partner_id'] != $recId && $item['status'] <= 1) {
                $orderStatus = 16;
            }
        }
        $result2 = D('OrderInfo')->where(['id' => $orderId])->save(['order_status' => $orderStatus]);


        if (false !== $result && false !== $result1 && false != $result2) {
            $model->commit();
            $this->success('提交完成');
        } else {
            $model->rollback();
            $this->error('操作失败'.$model->getDbError());
        }
    }

}
