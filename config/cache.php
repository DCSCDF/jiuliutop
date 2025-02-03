<?php

return [
    // 默认缓存驱动
    'default' => env('CACHE_DRIVER', 'file'),

    // 缓存连接配置
    'stores' => [
        'file' => [
            'type' => 'File',
            'path' => '../runtime/cache/',
        ],
        // 其他缓存驱动配置...
    ],

    // 缓存前缀
    'prefix' => 'think',
];
