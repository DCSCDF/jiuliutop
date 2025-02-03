<?php

return [
    // 默认日志记录通道
    'default' => env('LOG_CHANNEL', 'file'),

    // 日志记录通道列表
    'channels' => [
        'file' => [
            'type' => 'File',
            'path' => '../runtime/log/',
            'level' => ['error', 'warning', 'info', 'debug'],
        ],
        // 其他日志驱动配置...
    ],
];
