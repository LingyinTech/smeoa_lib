<?php

/**
 * Class OrderInfoModel
 * @property int ship_time
 */
class InvoiceModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = [
        ['shop_id', 'require', '请选择店铺', 1],
        ['cust_name', 'require', '客户名称不能为空', 1],
    ];

    protected $_auto = [
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('update_time', 'time', self::MODEL_UPDATE, 'function'),
        array('user_id', 'get_user_id', self::MODEL_INSERT, 'callback'),
        array('produce_no', 'getProduceNo', self::MODEL_INSERT, 'callback'),
    ];

    function getProduceNo()
    {
        $today = date('Ymd');
        $count = intval($this->where(['produce_no' => ['like',"{$today}%"]])->count());

        return $today . str_pad($count + 1, 4, 0, STR_PAD_LEFT);
    }

}
