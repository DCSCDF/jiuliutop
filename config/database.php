<?php

return [
    // 默认数据库连接配置
    'default' => env('DB_CONNECTION', 'mysql'),

    // 数据库连接配置
    'connections' => [
        'mysql' => [
            'type'     => 'mysql',
            'hostname' => env('DB_HOST', '127.0.0.1'),
            'database' => env('DB_DATABASE', 'jiuliutop'),
            'username' => env('DB_USERNAME', 'jiuliu'),
            'password' => env('DB_PASSWORD', '123456'),
            'hostport' => env('DB_PORT', '3306'),
            'charset'  => 'utf8mb4',
            'prefix'   => '',
        ],

        // 其他数据库连接配置...
    ],


    // 数据库调试模式
    'debug' => true,
];
