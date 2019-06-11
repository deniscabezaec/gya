<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/plugins/gosquared/languages.yaml',
    'modified' => 1559710422,
    'data' => [
        'en' => [
            'PLUGIN_GOSQUARED' => [
                'GSN' => 'GoSquared Tracking Code',
                'GSN_HELP' => 'GoSquared Tracking Code. ( The tracking code is usually of the form GSN-999999-X )  Please note each website in your GoSquared account will have it\'s own GSN tracking code.',
                'GS_IN_ADMIN' => 'Track Admin Users',
                'GS_IN_ADMIN_HELP' => 'GoSquared can be enabled to track Admin usage as well — generally GRAV admin usage doesn\'t warrant this feature being turned on.',
                'GS_LOAD_LATE' => 'Load late',
                'GS_LOAD_LATE_HELP' => 'If JQuery is NOT loaded in the <head> of your GRAV template you may need to turn \\"Load Late\\" on. Please note, this feature is reliant on your GRAV template supporting the standard "bottom" group for inline Javascript items.'
            ]
        ]
    ]
];
