<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/particles/accordionslider.yaml',
    'modified' => 1497418982,
    'data' => [
        'name' => 'Accordion Slider',
        'description' => 'Display items in paginated Accordion layout.',
        'type' => 'particle',
        'icon' => 'fa-slideshare',
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
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'displayitems' => [
                    'type' => 'input.number',
                    'label' => 'Display at Once',
                    'description' => 'Number of items to display at once.',
                    'min' => 1,
                    'default' => 3
                ],
                'nav' => [
                    'type' => 'select.select',
                    'label' => 'Prev / Next',
                    'description' => 'Enable or disable the Prev / Next navigation.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'prevText' => [
                    'type' => 'input.text',
                    'label' => 'Prev Text',
                    'description' => 'Customize the Prev text if Prev / Next navigation is enabled.',
                    'placeholder' => '&larr;'
                ],
                'nextText' => [
                    'type' => 'input.text',
                    'label' => 'Next Text',
                    'description' => 'Customize the Nav text if Prev / Next navigation is enabled.',
                    'placeholder' => '&rarr;'
                ],
                'loop' => [
                    'type' => 'select.select',
                    'label' => 'Loop',
                    'description' => 'Enable or disable the Inifnity loop. Duplicate last and first items to get loop illusion.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'autoplay' => [
                    'type' => 'select.select',
                    'label' => 'Autoplay',
                    'description' => 'Enable or disable the Autoplay.',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'autoplaySpeed' => [
                    'type' => 'input.text',
                    'label' => 'Autoplay Speed',
                    'description' => 'Set the speed of the Autoplay, in milliseconds.',
                    'placeholder' => 5000
                ],
                'pauseOnHover' => [
                    'type' => 'select.select',
                    'label' => 'Pause on Hover',
                    'description' => 'Pause the slideshow when hovering over slider, then resume when no longer hovering.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'accordionTitle' => [
                    'type' => 'input.text',
                    'label' => 'Accordion Title',
                    'description' => 'Customize the accordion title text.',
                    'placeholder' => 'Enter title'
                ],
                'accordionSubtitle' => [
                    'type' => 'input.text',
                    'label' => 'Accordion Subtitle',
                    'description' => 'Customize the accordion subtitle text.',
                    'placeholder' => 'Enter subtitle'
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Accordion Items',
                    'description' => 'Create each accordion item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter the title'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Input the item link.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Input the text for the item link.',
                            'placeholder' => 'Read More'
                        ],
                        '.buttontarget' => [
                            'type' => 'select.selectize',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_self',
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
];
