<?php
// 入口文件，负责引导ThinkPHP框架的运行

// 定义应用目录
define('APP_PATH', __DIR__ . '/../app/');

// 加载基础文件
require __DIR__ . '/../vendor/autoload.php';

// 加载 ThinkPHP 引导文件
require __DIR__ . '/../vendor/topthink/framework/src/helper.php';

// 执行应用并响应
$http = (new think\App())->http;

// 运行应用并响应
$response = $http->run();

// 发送响应
$response->send();

// 结束应用
$http->end($response);
