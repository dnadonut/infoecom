<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'จัดการข้อมูลการอบรม',
    'language' => 'th_TH',
    'timeZone' => 'Asia/Bangkok',
    'components' => [
        'thaiFormatter' => [
            'class' => 'dixonsatit\thaiYearFormatter\ThaiYearFormatter',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
