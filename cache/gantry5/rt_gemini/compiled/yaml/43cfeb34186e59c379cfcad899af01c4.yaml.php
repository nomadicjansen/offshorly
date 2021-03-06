<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/themes/rt_gemini/particles/gridstatistic.yaml',
    'modified' => 1497418983,
    'data' => [
        'name' => 'Grid Statistic',
        'description' => 'Display Grid Statistic.',
        'type' => 'particle',
        'icon' => 'fa-sort-numeric-asc',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
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
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'readmore' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Text',
                    'description' => 'Specify the readmore text.',
                    'placeholder' => 'Enter readmore text'
                ],
                'readmorelink' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Link',
                    'description' => 'Specify the readmore link address.'
                ],
                'readmoreclass' => [
                    'type' => 'select.select',
                    'label' => 'Readmore Style',
                    'description' => 'Style for the readmore button.',
                    'default' => 'button-3',
                    'options' => [
                        'button-2' => 'Button 2',
                        'button-3' => 'Button 3',
                        'button-4' => 'Button 4'
                    ]
                ],
                'footerdesc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Footer Description',
                    'description' => 'Customize the footer description.',
                    'placeholder' => 'Enter short footer description'
                ],
                'cols' => [
                    'type' => 'select.select',
                    'label' => 'Grid Column',
                    'description' => 'Select the grid column amount',
                    'placeholder' => 'Select...',
                    'default' => 'g-gridstatistic-2cols',
                    'options' => [
                        'g-gridstatistic-1cols' => '1 Column',
                        'g-gridstatistic-2cols' => '2 Columns',
                        'g-gridstatistic-3cols' => '3 Columns',
                        'g-gridstatistic-4cols' => '4 Columns',
                        'g-gridstatistic-5cols' => '5 Columns',
                        'g-gridstatistic-6cols' => '6 Columns'
                    ]
                ],
                'gridstatisticitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.text1' => [
                            'type' => 'input.text',
                            'label' => 'Statictic Number'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.text2' => [
                            'type' => 'input.text',
                            'label' => 'Statistic Text'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
