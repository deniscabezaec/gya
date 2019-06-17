<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/plugins/email.yaml',
    'modified' => 1560647493,
    'data' => [
        'enabled' => true,
        'from' => 'deniskabeza@gmail.com',
        'to' => 'deniskabeza@gmail.com',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'deniskabeza@gmail.com',
                'password' => 'Sined@6972.'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'charset' => 'UTF-8'
    ]
];
