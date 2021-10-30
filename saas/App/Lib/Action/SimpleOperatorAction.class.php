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
class SimpleOperatorAction extends CommonAction
{
    protected $config = array('app_type' => 'public');

    public function confirm() {
        $id = $_REQUEST['id'];
        if (empty($id)) {
            $this->error('非法操作');
        }
        $this->assign('orderId', $id);

        $this->display();
    }
}
