<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/particles/accordionmenu.yaml',
    'modified' => 1497418982,
    'data' => [
        'name' => 'Accordion Menu',
        'description' => 'Display multi level accordion menu.',
        'type' => 'particle',
        'icon' => 'fa-list-alt',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'group' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Group',
                    'description' => 'Create group of items.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Group Title',
                            'skip' => true
                        ],
                        '.items' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Group Items',
                            'description' => 'Create menu items.',
                            'value' => 'title',
                            'ajax' => true,
                            'fields' => [
                                '.title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'skip' => true
                                ],
                                '.link' => [
                                    'type' => 'input.text',
                                    'label' => 'Link'
                                ],
                                '.target' => [
                                    'type' => 'select.select',
                                    'label' => 'Target',
                                    'description' => 'Target browser window when item is clicked.',
                                    'placeholder' => 'Select...',
                                    'default' => '_blank',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
