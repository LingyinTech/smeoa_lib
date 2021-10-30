<?php
/**
 *网站路由配置
 * @package YiCms
 * @author YiCms
 **/
return [
    /*路由设置*/
    'URL_MODEL' => 2,                //URL访问模式
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => [
		'order/index/my/1/reject/:reject\d' => 'Order/Index?my=1',
        'order/index/my/1/status/:order_status\d' => 'Order/Index?my=1',
        'order/index/status/:order_status\d/reject/:reject\d/operate/1' => 'Order/Index?operate=1',
		'order/index/status/:order_status\d/operate/1/shirt_type/:shirt_type\w' => 'Order/Index?operate=1',
        'order/index/status/:order_status\d/operate/1/order_type/:order_type\d' => 'Order/Index?operate=1',
        'order/index/status/:order_status\d/operate/1' => 'Order/Index?operate=1',
        'order/index/after_sale/1' => 'Order/Index?after_sale=1',
        'order/index/status/:order_status\d' => 'Order/Index',
        'order/index/my/1/delivery/:delivery\d' => 'Order/Index?my=1',
        'order/index/my' => 'Order/Index?my=1',

        'simple/index/my/1/status/:order_status\d/reject/:reject\d' => 'Simple/Index?my=1',
        'simple/index/my/1/status/:order_status\d' => 'Simple/Index?my=1',
        'simple/index/status/:order_status\d/reject/:reject\d/operate/1' => 'Simple/Index?operate=1',
        'simple/index/status/:order_status\d/operate/1' => 'Simple/Index?operate=1',
        'simple/index/status/:order_status\d' => 'Simple/Index',
        'simple/index/my/1/delivery/:delivery\d' => 'Simple/Index?my=1',
        'simple/index/my' => 'Simple/Index?my=1',

        'invoice/index/my/1/status/:order_status\d' => 'Invoice/Index?my=1',
        'invoice/index/status/:order_status\d/my/1' => 'Invoice/Index?my=1',
        'invoice/index/status/:order_status\d/operate/1' => 'Invoice/Index?operate=1',
        'invoice/index/status/:order_status\d' => 'Invoice/Index',
    ],
];
