<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/site.yaml',
    'modified' => 1560372954,
    'data' => [
        'title' => 'Graficación y Animación',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Denis Cabeza',
            'email' => 'deniskabeza@gmail.com'
        ],
        'taxonomies' => [
            0 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is a flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 100,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'description' => 'Html - Css - Js - Docker - Git',
        'owner' => [
            'name' => 'Alex Kbza',
            'email' => 'alexkbzav@gmail.com',
            'description' => 'Decide, Aprende y Emprende',
            'twitter' => 'alexkbzav',
            'facebook' => 'alexkbzav',
            'github' => NULL,
            'instagram' => 'alexkbzav',
            'google_plus' => NULL
        ],
        'logo' => '/user/themes/notepad/images/logo.png',
        'links' => [
            0 => [
                'title' => 'Sobre Mi',
                'url' => '/about'
            ],
            1 => [
                'title' => 'Contacto',
                'url' => '/contacto'
            ]
        ],
        'include' => [
            0 => '.htaccess'
        ],
        'exclude' => [
            0 => 'lib',
            1 => 'config.rb',
            2 => 'Gemfile',
            3 => 'Capfile',
            4 => 'Gemfile.lock',
            5 => 'config',
            6 => 'log',
            7 => 'Rakefile',
            8 => 'Rakefile.rb',
            9 => 'tmp',
            10 => 'less',
            11 => '*.sublime-project',
            12 => '*.sublime-workspace',
            13 => 'test',
            14 => 'spec',
            15 => 'Gruntfile.js',
            16 => 'package.json',
            17 => 'node_modules'
        ]
    ]
];
