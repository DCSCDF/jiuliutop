<?php
// 应用配置文件

return [
    // 应用名称
    'app_name' => 'Jiuliutop 博客系统',

    // 默认时区
    'timezone' => 'Asia/Shanghai',

    // 默认语言
    'default_lang' => 'zh-cn',

    // 开发模式
    'app_debug' => true,

    // 默认控制器
    'default_controller' => 'Index',

    // 默认操作
    'default_action' => 'index',

    // URL模式
    'url_route_on' => true,
    'url_route_must' => false,
    'url_html_suffix' => 'html',

    // 模板引擎配置
    'template' => [
        'type' => 'Think',
        'view_path' => '../app/view/',
    ],

    // 日志配置
    'log' => [
        'type' => 'File',
        'path' => '../runtime/log/',
    ],
];