<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/particles/imagegrid.yaml',
    'modified' => 1497418982,
    'data' => [
        'name' => 'Image Grid',
        'description' => 'Display image grid.',
        'type' => 'particle',
        'icon' => 'fa-picture-o',
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
                'cols' => [
                    'type' => 'select.select',
                    'label' => 'Grid Column',
                    'description' => 'Select the grid column amount',
                    'placeholder' => 'Select...',
                    'default' => 'g-imagegrid-2cols',
                    'options' => [
                        'g-imagegrid-2cols' => '2 Columns',
                        'g-imagegrid-3cols' => '3 Columns',
                        'g-imagegrid-4cols' => '4 Columns',
                        'g-imagegrid-5cols' => '5 Columns'
                    ]
                ],
                'layout' => [
                    'type' => 'select.select',
                    'label' => 'Layout',
                    'description' => 'Select preferred layout',
                    'placeholder' => 'Select...',
                    'default' => 'g-imagegrid-standard',
                    'options' => [
                        'g-imagegrid-standard' => 'Standard',
                        'g-imagegrid-captions' => 'Visible captions'
                    ]
                ],
                'album' => [
                    'type' => 'input.text',
                    'label' => 'Album Name',
                    'description' => 'Customize the album name.',
                    'placeholder' => 'Enter album name'
                ],
                'imagegriditems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Images',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'skip' => true
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Promo Image',
                            'description' => 'Select desired promo image.'
                        ],
                        '.caption' => [
                            'type' => 'input.text',
                            'label' => 'Caption',
                            'description' => 'Customize the image caption.',
                            'placeholder' => 'Enter caption'
                        ],
                        '.linkto' => [
                            'type' => 'select.select',
                            'label' => 'Link To',
                            'description' => 'Choose to display image or open a custom link.',
                            'default' => 'image',
                            'options' => [
                                'image' => 'RokBox Image',
                                'link' => 'Link'
                            ]
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
