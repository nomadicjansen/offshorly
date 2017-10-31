<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/plugins/seo/blueprints.yaml',
    'modified' => 1496792160,
    'data' => [
        'name' => 'SEO',
        'version' => '1.0.6',
        'description' => 'SEO is an user friendly plugin to manage your SEO across all your pages.',
        'icon' => 'facebook',
        'testing' => true,
        'author' => [
            'name' => 'Paul Massendari',
            'email' => 'paul@massendari.com'
        ],
        'homepage' => 'https://github.com/paulmassen/grav-plugin-seo',
        'keywords' => [
            0 => 'seo',
            1 => 'meta',
            2 => 'microdata',
            3 => 'schema',
            4 => 'plugin'
        ],
        'bugs' => 'https://github.com/paulmassen/grav-plugin-seo/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twitterid' => [
                    'type' => 'text',
                    'label' => 'Twitter ID',
                    'placeholder' => '@yourusername'
                ]
            ]
        ]
    ]
];
