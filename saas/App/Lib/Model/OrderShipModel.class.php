<?php

class OrderShipModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = array(
        array('ship_name', 'require', '快递名称不能为空', 1),
        array('ship_code', 'require', '快递单号不能为空', 1),
        array('order_id', 'require', '订单为空，非法操作', 1),
    );
}