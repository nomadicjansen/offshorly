<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/system/blueprints/user/account.yaml',
    'modified' => 1497429728,
    'data' => [
        'title' => 'Account',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'info' => [
                    'type' => 'userinfo',
                    'size' => 'large'
                ],
                'avatar' => [
                    'type' => 'file',
                    'size' => 'large',
                    'destination' => 'user://accounts/avatars',
                    'multiple' => false,
                    'random_name' => true
                ],
                'content' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ACCOUNT',
                    'underline' => true
                ],
                'username' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.USERNAME',
                    'disabled' => true,
                    'readonly' => true
                ],
                'email' => [
                    'type' => 'email',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.EMAIL',
                    'validate' => [
                        'type' => 'email',
                        'message' => 'PLUGIN_ADMIN.EMAIL_VALIDATION_MESSAGE',
                        'required' => true
                    ]
                ],
                'password' => [
                    'type' => 'password',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.PASSWORD',
                    'validate' => [
                        'required' => false,
                        'message' => 'PLUGIN_ADMIN.PASSWORD_VALIDATION_MESSAGE',
                        'config-pattern@' => 'system.pwd_regex'
                    ]
                ],
                'fullname' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.FULL_NAME',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.TITLE'
                ],
                'language' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.LANGUAGE',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Plugin\\Admin\\Admin::adminLanguages',
                    'default' => 'en',
                    'help' => 'PLUGIN_ADMIN.LANGUAGE_HELP'
                ],
                'security' => [
                    'title' => 'PLUGIN_ADMIN.ACCESS_LEVELS',
                    'type' => 'section',
                    'security' => 'admin.super',
                    'underline' => true,
                    'fields' => [
                        'groups' => [
                            'type' => 'select',
                            'multiple' => true,
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.GROUPS',
                            'data-options@' => '\\Grav\\Common\\User\\Group::groupNames',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.GROUPS_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'access' => [
                            'type' => 'permissions',
                            'label' => 'PLUGIN_ADMIN.PERMISSIONS',
                            'ignore_empty' => true,
                            'validate' => [
                                'type' => 'array'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
