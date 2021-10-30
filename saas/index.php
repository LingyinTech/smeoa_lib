<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 定义ThinkPHP框架路径
//定义项目名称和路径
define('APP_NAME', 'App');
define('APP_PATH', './App/');
define('ROOT_PATH', __DIR__);

define('LINGYIN_ENV',isset($_SERVER['LINGYIN_ENV']) ? $_SERVER['LINGYIN_ENV'] : 'prod');

define('APP_DEBUG', !('prod' == LINGYIN_ENV));

require __DIR__.'/constant.php';
require __DIR__.'/../lib/vendor/autoload.php';
require __DIR__.'/../lib/ThinkPHP/ThinkPHP.php';