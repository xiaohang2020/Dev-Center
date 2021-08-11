<?php

return [
    // 默认磁盘
    'default' => env('filesystem.driver', 'local'),
    // 磁盘列表
    'disks'   => [
        'local'  => [
            'type' => 'local',
            'root' => app()->getRuntimePath() . 'storage',
        ],
        'public' => [
            // 磁盘类型
            'type'       => 'local',
            // 磁盘路径
            'root'       => app()->getRootPath() . 'public/storage',
            // 磁盘路径对应的外部URL路径
            'url'        => '/storage',
            // 可见性
            'visibility' => 'public',
        ],
        // 更多的磁盘配置信息
        'aliyun' => [
            'type'         => 'aliyun',
            'accessId'     => 'LTAI4GKuu2vG78HzWUgDt7Q4',
            'accessSecret' => 'ruVlmwtgG6fDG9urq5Mur9p6FIOD4Y',
            'bucket'       => 'yundaohang',
            'endpoint'     => 'oss-cn-beijing.aliyuncs.com',
            'url'          => 'http://yundaohang.oss-cn-beijing.aliyuncs.com',//不要斜杠结尾，此处为URL地址域名。
        ],
        'qiniu'  => [
            'type'      => 'qiniu',
            'accessKey' => '8m6_TzcGQjm_VfVh8NYXJ7CuB6edqzYoCCD7vNYV',
            'secretKey' => 'lKUVTTmXZxqgFwIAnQ2Hp6BHe4Cw6-VHfaRpYjgC',
            'bucket'    => 'xiaohang-dev',
            'url'       => 'http://qxmfhkrv7.hn-bkt.clouddn.com',//不要斜杠结尾，此处为URL地址域名。
        ],
        'qcloud' => [
            'type'       => 'qcloud',
            'region'      => 'ap-guangzhou', //bucket 所属区域 英文
            'appId'      => '1251596223', // 域名中数字部分
            'secretId'   => 'AKIDtcv2uWPCG7kLiqQLSchn8FFE7vUn5Nde',
            'secretKey'  => 'yindDZzC9qHo9E4mHWUE5h3A7qSq282f',
            'bucket'          => 'yundaohang-1251596223',
            'timeout'         => 60,
            'connect_timeout' => 60,
            'cdn'             => 'https://yundaohang-1251596223.cos.ap-guangzhou.myqcloud.com',//您的 CDN 域名
            'scheme'          => 'https',
            'read_from_cdn'   => false,
        ]
    ],
];
