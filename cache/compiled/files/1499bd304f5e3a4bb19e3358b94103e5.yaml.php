<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/plugins/precache/blueprints.yaml',
    'modified' => 1497497215,
    'data' => [
        'name' => 'PreCache',
        'version' => '1.1.3',
        'description' => 'PreCache is a simple Grav plugin that uses Grav\'s powerful `onShutdown` event to run through all pages and call the `content()` method of each page',
        'icon' => 'fighter-jet',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-precache',
        'keywords' => 'precache, plugin, performance',
        'bugs' => 'https://github.com/getgrav/grav-plugin-precache/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'enabled_admin' => [
                    'type' => 'toggle',
                    'label' => 'Admin enabled',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'log_pages' => [
                    'type' => 'toggle',
                    'label' => 'Log cached pages',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
