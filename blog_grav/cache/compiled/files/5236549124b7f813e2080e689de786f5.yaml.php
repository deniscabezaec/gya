<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/plugins/form.yaml',
    'modified' => 1563189248,
    'data' => [
        'enabled' => true,
        'built_in_css' => false,
        'inline_css' => false,
        'refresh_prevention' => true,
        'client_side_validation' => true,
        'inline_errors' => false,
        'files' => [
            'multiple' => false,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => false,
            'filesize' => 0,
            'accept' => [
                0 => 'image/*'
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light'
        ]
    ]
];
