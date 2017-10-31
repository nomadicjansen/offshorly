<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/themes/rt_gemini/particles/headertabs.yaml',
    'modified' => 1497418983,
    'data' => [
        'name' => 'Header Tabs',
        'description' => 'Display Header Tabs.',
        'type' => 'particle',
        'icon' => 'fa-table',
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
                    'description' => 'Globally enable icon menu particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'animation' => [
                    'type' => 'select.select',
                    'label' => 'Animation Type',
                    'description' => 'Set the animation type.',
                    'default' => 'fade',
                    'options' => [
                        'left' => 'Slide Left',
                        'right' => 'Slide Right',
                        'up' => 'Slide Up',
                        'down' => 'Slide Down',
                        'fade' => 'Fade',
                        'toggle' => 'Toggle'
                    ]
                ],
                'duration' => [
                    'type' => 'input.text',
                    'label' => 'Duration',
                    'description' => 'Customize the animation duration.',
                    'placeholder' => 500
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Tabs',
                    'description' => 'Create each tabs item to display.',
                    'value' => 'tab_name',
                    'ajax' => true,
                    'fields' => [
                        '.tab_name' => [
                            'type' => 'input.text',
                            'label' => 'Tab Name',
                            'description' => 'Enter the Tab name'
                        ],
                        '.tab_image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.tab_desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Tab Description',
                            'description' => 'Enter the Tab description'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
