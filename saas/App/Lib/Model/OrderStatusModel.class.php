<?php

/**
 * Class OrderInfoModel
 * @property int ship_time
 */
class OrderStatusModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = [
        ['order_id', 'require', '订单ID不能为空', 1],
    ];
}
