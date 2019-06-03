<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/site.yaml',
    'modified' => 1559550238,
    'data' => [
        'title' => 'Graficación y Animación',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Denis Cabeza',
            'email' => 'deniskabeza@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'cms',
            3 => 'blog'
        ],
        'metadata' => [
            'description' => 'Blog creado con el fin de mostrar los trabajos realizado en clases'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'email' => 'deniskabeza@gmail.com',
        'description' => 'Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.',
        'links' => [
            0 => [
                'title' => 'Servicios',
                'url' => '#services'
            ],
            1 => [
                'title' => 'Portafolio',
                'url' => '#portfolio'
            ],
            2 => [
                'title' => 'Trayectoria',
                'url' => '#about'
            ],
            3 => [
                'title' => 'Sobre Mi',
                'url' => '#team'
            ],
            4 => [
                'title' => 'Contacto',
                'url' => '#contact'
            ]
        ],
        'social' => [
            0 => [
                'title' => 'twitter',
                'url' => 'http://www.twitter.com/deniscabezav'
            ],
            1 => [
                'title' => 'facebook',
                'url' => 'https://www.facebook.com/DenisCabezaV'
            ],
            2 => [
                'title' => 'stack-overflow',
                'url' => NULL
            ],
            3 => [
                'title' => 'bitbucket',
                'url' => 'http://bitbucket.org/DenisCabezaV'
            ],
            4 => [
                'title' => 'github',
                'url' => 'http://github.com/DenisCabezaV'
            ]
        ],
        'address' => [
            0 => [
                'line' => '15 de marzo'
            ],
            1 => [
                'line' => 'Esmeraldas - Ecuador'
            ]
        ],
        'quicklinks' => [
            0 => [
                'title' => 'Privacy Policy',
                'url' => '#'
            ],
            1 => [
                'title' => 'Terms of Use',
                'url' => '#'
            ]
        ]
    ]
];
