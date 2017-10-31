<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/themes/rt_gemini/particles/video.yaml',
    'modified' => 1497418983,
    'data' => [
        'name' => 'Video',
        'description' => 'Embed videos from YouTube, Vimeo or your server.',
        'type' => 'particle',
        'icon' => 'fa-video-camera',
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
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Blocks',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.caption' => [
                            'type' => 'input.text',
                            'label' => 'Caption',
                            'description' => 'Video caption'
                        ],
                        '.source' => [
                            'type' => 'select.selectize',
                            'label' => 'Source',
                            'description' => 'Video source. Local or external ie: youtube, vimeo.',
                            'placeholder' => 'Select...',
                            'default' => 'local',
                            'options' => [
                                'preset' => 'Slideshow Preset',
                                'vimeo' => 'Vimeo (Url)',
                                'youtube' => 'YouTube (Url)',
                                'local' => 'Local Video'
                            ]
                        ],
                        '.video' => [
                            'type' => 'input.text',
                            'label' => 'Url',
                            'description' => 'URL from YouTube, Vimeo, or vzaar'
                        ],
                        '.local' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Local Video Sources',
                            'description' => 'Serve your video in multiple formats.',
                            'value' => 'title',
                            'ajax' => true,
                            'fields' => [
                                '.file' => [
                                    'type' => 'input.videopicker',
                                    'label' => 'Local Video',
                                    'description' => 'Select desired image.'
                                ]
                            ]
                        ],
                        '.loop' => [
                            'type' => 'select.select',
                            'label' => 'Loop',
                            'description' => 'Enable or disable video looping.',
                            'default' => 'enabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.autoplay' => [
                            'type' => 'select.select',
                            'label' => 'Autoplay',
                            'description' => 'Enable or disable video autoplay.',
                            'default' => 'enabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.controls' => [
                            'type' => 'select.select',
                            'label' => 'Show Controls (YouTube and Local)',
                            'description' => 'Enable or play bar (applies to YouTube and Local videos.).',
                            'default' => 'enabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
