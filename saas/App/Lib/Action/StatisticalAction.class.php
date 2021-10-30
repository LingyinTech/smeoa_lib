<?php

class StatisticalAction extends CommonAction {

    protected $config = [
        'app_type' => 'master',
        'action_auth' => [
            'daily' => 'read',
        ],
    ];

    function _initialize()
    {
        parent::_initialize();

        $this->assign('filter', $_REQUEST);
    }

    public function index() {
        $widget['date'] = true;
        $this->assign('widget', $widget);

        $groupFieldList = [
            'shop_id' => '店铺',
            'user_id' => '接单人',
            'order_type' => '订单类型',
        ];
        $this->assign('groupFieldList', $groupFieldList);

        $groupField = isset($_REQUEST['group_field']) ? $_REQUEST['group_field'] : 'shop_id';

        $this->assign('groupField', $groupField);
        $this->assign('groupFieldLabel', $groupFieldList[$groupField]);

        $map = $this->_search('OrderInfo');
        if (!empty($map)) {
            foreach ($map as $key => $value) {
                unset($map[$key]);
                $map[C('DB_PREFIX')."order_info.{$key}"] = $value;
            }
        }
        if (method_exists($this, '_search_filter')) {
            $this->_search_filter($map);
        }

        $noteStatus = [
            'is_urgent' => '加急',
            'is_24ship' => '当日发货',
            'is_after_sale' => '售后',
            'is_cancel' => '退单',
        ];

        if (isset($_REQUEST['note_status']) && isset($noteStatus[$_REQUEST['note_status']])) {
            $map["os.{$_REQUEST['note_status']}"] = 1;
        }

        if (IS_POST) {
            $model = M('OrderInfo');

            $join = 'INNER JOIN '.C('DB_PREFIX').'user u on '.C('DB_PREFIX').'order_info.user_id = u.id';
            $join .= ' LEFT JOIN '.C('DB_PREFIX').'order_status AS os ON '.C('DB_PREFIX').'order_info.id = os.order_id';
            $join .= ' LEFT JOIN '.C('DB_PREFIX').'shop AS s ON '.C('DB_PREFIX').'order_info.shop_id = s.id';

            $queryGroupField = C('DB_PREFIX').'order_info.'.$groupField;

            $field = [
                "{$queryGroupField} as group_field",
                'count(*) as count',
                'sum(total_price) as total_price'
            ];

            $list = $model->join($join)->where($map)->field($field)->group($queryGroupField)->select();

            $groupFieldValueArr = array_column($list, 'group_field');
            $groupFieldMap = [];
            switch ($groupField) {
                case 'shop_id':
                    $groupFieldMap = D('Shop')->getCache();
                    $groupFieldMap = array_column($groupFieldMap, 'name', 'id');
                    break;
                case 'user_id':
                    $tempArr = D('User')->where(['id' => ['in', $groupFieldValueArr]])->field('id,name')->select();
                    $groupFieldMap = array_column($tempArr, 'name', 'id');
                    break;
                case 'order_type':
                    $groupFieldMap = ORDER_TYPE_LIST;
                    break;
            }

            $total = [
                'group_field' => '合计',
                'count' => 0,
                'total_price' => 0.00,
            ];
            foreach ($list as &$item) {
                if (isset($groupFieldMap[$item['group_field']])) {
                    $item['group_field'] = $groupFieldMap[$item['group_field']];
                }
                $total['count'] += $item['count'];
                $total['total_price'] += $item['total_price'];
            }
            unset($item);

            array_push($list, $total);

            $this->assign('list', $list);
        }

        $shopList = D('Shop')->getCache();
        $this->assign('shopList', $shopList);

        $this->assign('orderStatusList', ORDER_STATUS_LIST);

        $this->assign('noteStatus', $noteStatus);

        $this->display();
    }

    public function daily()
    {
        $widget['echarts'] = true;
        $this->assign('widget', $widget);

        $model = M('OrderInfo');

        $field = [
            'left(produce_no, 8) as date',
            'order_type',
            'count(*) as count',
            'sum(total_price) as total_price'
        ];

        $beginTime = strtotime('-30 days');
        $thirtyDay = date('Ymd', $beginTime);

        $list = $model->where(['produce_no' => ['gt', $thirtyDay]])->field($field)->order('id desc')->group('date,order_type')->select();

        $dateList = [];
        $nowTime = time();
        while ($beginTime < $nowTime) {
            $dateList[] = date('Y-m-d', $beginTime);
            $beginTime += 86400;
        }

        $countMap = $priceMap = $orderTypeCountMap = $orderTypePriceMap = [];
        $orderTypeList = ORDER_TYPE_LIST;
        foreach ($orderTypeList as $type => $label) {
            $orderTypeCount[$type] = [];
        }

        foreach ($list as $item) {
            if (!isset($countMap[$item['date']])) {
                $countMap[$item['date']] = 0;
            }

            $countMap[$item['date']] += $item['count'];

            if (!isset($priceMap[$item['date']])) {
                $priceMap[$item['date']] = 0;
            }
            $priceMap[$item['date']] += $item['total_price'];

            $orderType = $item['order_type'];
            if (!isset($orderTypeCountMap[$orderType][$item['date']])) {
                $orderTypeCountMap[$orderType][$item['date']] = 0;
            }
            $orderTypeCountMap[$orderType][$item['date']] += $item['count'];

            if (!isset($orderTypePriceMap[$orderType][$item['date']])) {
                $orderTypePriceMap[$orderType][$item['date']] = 0;
            }
            $orderTypePriceMap[$orderType][$item['date']] += $item['total_price'];
        }

        $countList = $priceList = $orderTypeCountList = $orderTypePriceList = [];
        foreach ($dateList as $date) {
            $key = date('Ymd',strtotime($date));
            $countList[] = isset($countMap[$key]) ? $countMap[$key] : 0;
            $priceList[] = isset($priceMap[$key]) ? $priceMap[$key] : 0.00;

            foreach ($orderTypeList as $type => $label) {
                $orderTypeCountList[$type][] = isset($orderTypeCountMap[$type][$key]) ? $orderTypeCountMap[$type][$key] : 0;
                $orderTypePriceList[$type][] = isset($orderTypePriceMap[$type][$key]) ? $orderTypePriceMap[$type][$key] : 0;
            }
        }

        $chartOption = [
            'tooltip' => [
                'show' => true,
                'trigger' => 'axis',
            ],
            'legend' => ['data' => ['总销量', '总销售额']],
            'xAxis' => ['data' => $dateList],
            'yAxis' => new stdClass,
            'series' => [
                [
                    'name' => '总销量',
                    'type' => 'line',
                    'data' => $countList
                ],
                [
                    'name' => '总销售额',
                    'type' => 'line',
                    'data' => $priceList
                ],
            ]
        ];

        foreach ($orderTypeList as $type => $label) {
            $chartOption['series'][] = [
                'name' => "{$label}销量",
                'type' => 'line',
                'data' => $orderTypeCountList[$type]
            ];
            $chartOption['legend']['data'][] = "{$label}销量";
            $chartOption['series'][] = [
                'name' => "{$label}销售额",
                'type' => 'line',
                'data' => $orderTypePriceList[$type]
            ];
            $chartOption['legend']['data'][] = "{$label}销售额";
        }

        $this->assign('chartOption', $chartOption);

        $this->display();
    }

    public function month()
    {
        $widget['echarts'] = true;
        $this->assign('widget', $widget);

        $model = M('OrderInfo');

        $field = [
            'left(produce_no, 6) as date',
            'order_type',
            'count(*) as count',
            'sum(total_price) as total_price'
        ];

        $beginTime = strtotime('-12 months');
        $thirtyDay = date('Ym01', $beginTime);

        $list = $model->where(['produce_no' => ['gt', $thirtyDay]])->field($field)->order('id desc')->group('date,order_type')->select();

        $dateList = [];
        $nowTime = strtotime('first day of next month');
        while ($beginTime < $nowTime) {
            $dateList[] = date('Y-m', $beginTime);
            $beginTime += 86400 * 31;
        }

        $countMap = $priceMap = $orderTypeCountMap = $orderTypePriceMap = [];
        $orderTypeList = ORDER_TYPE_LIST;
        foreach ($orderTypeList as $type => $label) {
            $orderTypeCount[$type] = [];
        }

        foreach ($list as $item) {
            if (!isset($countMap[$item['date']])) {
                $countMap[$item['date']] = 0;
            }

            $countMap[$item['date']] += $item['count'];

            if (!isset($priceMap[$item['date']])) {
                $priceMap[$item['date']] = 0;
            }
            $priceMap[$item['date']] += $item['total_price'];

            $orderType = $item['order_type'];
            if (!isset($orderTypeCountMap[$orderType][$item['date']])) {
                $orderTypeCountMap[$orderType][$item['date']] = 0;
            }
            $orderTypeCountMap[$orderType][$item['date']] += $item['count'];

            if (!isset($orderTypePriceMap[$orderType][$item['date']])) {
                $orderTypePriceMap[$orderType][$item['date']] = 0;
            }
            $orderTypePriceMap[$orderType][$item['date']] += $item['total_price'];
        }

        $countList = $priceList = $orderTypeCountList = $orderTypePriceList = [];
        foreach ($dateList as $date) {
            $key = date('Ym',strtotime($date));
            $countList[] = isset($countMap[$key]) ? $countMap[$key] : 0;
            $priceList[] = isset($priceMap[$key]) ? $priceMap[$key] : 0.00;

            foreach ($orderTypeList as $type => $label) {
                $orderTypeCountList[$type][] = isset($orderTypeCountMap[$type][$key]) ? $orderTypeCountMap[$type][$key] : 0;
                $orderTypePriceList[$type][] = isset($orderTypePriceMap[$type][$key]) ? $orderTypePriceMap[$type][$key] : 0;
            }
        }

        $chartOption = [
            'tooltip' => [
                'show' => true,
                'trigger' => 'axis',
            ],
            'legend' => ['data' => ['总销量', '总销售额']],
            'xAxis' => ['data' => $dateList],
            'yAxis' => new stdClass,
            'series' => [
                [
                    'name' => '总销量',
                    'type' => 'line',
                    'data' => $countList
                ],
                [
                    'name' => '总销售额',
                    'type' => 'line',
                    'data' => $priceList
                ],
            ]
        ];

        foreach ($orderTypeList as $type => $label) {
            $chartOption['series'][] = [
                'name' => "{$label}销量",
                'type' => 'line',
                'data' => $orderTypeCountList[$type]
            ];
            $chartOption['legend']['data'][] = "{$label}销量";
            $chartOption['series'][] = [
                'name' => "{$label}销售额",
                'type' => 'line',
                'data' => $orderTypePriceList[$type]
            ];
            $chartOption['legend']['data'][] = "{$label}销售额";
        }

        $this->assign('chartOption', $chartOption);

        $this->display();
    }
}