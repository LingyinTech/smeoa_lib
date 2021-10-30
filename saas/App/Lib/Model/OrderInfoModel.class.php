<?php

/**
 * Class OrderInfoModel
 * @property int ship_time
 */
class OrderInfoModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = [
        ['shop_id', 'require', '请选择店铺', 1],
        ['cust_name', 'require', '客户名称不能为空', 1],
    ];

    protected $_auto = [
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('update_time', 'time', self::MODEL_UPDATE, 'function'),
        array('produce_no', 'getProduceNo', self::MODEL_INSERT, 'callback'),
        array('diff_note', '', self::MODEL_INSERT),
    ];

    function getProduceNo()
    {
        $today = date('Ymd');
        $count = intval($this->where(['produce_no' => ['like', "{$today}%"]])->count());

        return $today . str_pad($count + 1, 4, 0, STR_PAD_LEFT);
    }

    public function orderInfo($orderId)
    {
        $orderInfo = $this->find($orderId);

        $accessList = D('Node')->checkAccess('order/price');
        if (empty($accessList)) {
            unset($orderInfo['invoice_fee'], $orderInfo['shirt_fee'], $orderInfo['design_fee'], $orderInfo['plate_fee']);
            unset($orderInfo['produce_fee'], $orderInfo['produce1_fee'], $orderInfo['ship_fee'],$orderInfo['gross_profit']);
        }

        $orderInfo['productList'] = D('OrderProduct')->where(['order_id' => $orderId])->select();

        return $orderInfo;
    }

}
