<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/config/plugins/email.yaml',
    'modified' => 1499054734,
    'data' => [
        'enabled' => true,
        'from' => 'hello@thecoapperative.com',
        'from_name' => 'Offshorly Contact Form',
        'to' => 'hello@offshorly.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp-pulse.com',
                'port' => 2525,
                'encryption' => 'none',
                'user' => 'hello@thecoapperative.com',
                'password' => 'SSan5kmoCBL'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
