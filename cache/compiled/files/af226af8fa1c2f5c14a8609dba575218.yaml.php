<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/plugins/optimus/blueprints.yaml',
    'modified' => 1497418976,
    'data' => [
        'name' => 'Optimus',
        'version' => '1.3.0',
        'description' => 'Image compression library utilizing https://optimus.io/en',
        'icon' => 'compress',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-optimus',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'optimus, plugin, navigation, depth',
        'bugs' => 'https://github.com/getgrav/grav-plugin-optimus/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'license_key' => [
                    'type' => 'text',
                    'label' => 'Licence Key',
                    'placeholder' => 'YOUR_OPTIMUS_KEY'
                ]
            ]
        ]
    ]
];
